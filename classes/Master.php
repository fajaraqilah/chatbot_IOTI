<?php
require_once('../config.php');
Class Master extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	function getTotalResponses(){
        $query = $this->conn->query("SELECT COUNT(*) AS total FROM response_list");
        $result = $query->fetch_assoc();
        return $result['total'];
    }

    function getTotalFetched(){
        $query = $this->conn->query("SELECT COUNT(*) AS total FROM keyword_fetched");
        $result = $query->fetch_assoc();
        return $result['total'];
    }

	function capture_err(){
		if(!$this->conn->error)
			return false;
		else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
			return json_encode($resp);
			exit;
		}
	}
	function delete_img(){
		extract($_POST);
		if(is_file($path)){
			if(unlink($path)){
				$resp['status'] = 'success';
			}else{
				$resp['status'] = 'failed';
				$resp['error'] = 'failed to delete '.$path;
			}
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = 'Unkown '.$path.' path';
		}
		return json_encode($resp);
	}
	function save_response(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,['id', 'keyword', 'suggestion'])){
				if(!empty($data)) $data .=",";
				$v = $this->conn->real_escape_string($v);
				$data .= " `{$k}`='{$v}' ";
			}
		}
		$kw_arr=[];
		foreach($keyword as $k => $v){
			$v  = trim($this->conn->real_escape_string($v));
			$check = $this->conn->query("SELECT keyword FROM `keyword_list` where keyword = '{$v}'".(!empty($id) ? " and response_id != '{$id}' " : ""))->num_rows;
			if($check > 0){
				$resp['status'] = 'failed';
				$resp['msg'] = 'Keyword already taken. This might complicate for fetching a response.';
				$resp['kw_index'] = $k;
				return json_encode($resp);
			}
			$kw_arr[]= $v;
		}
		if(empty($id)){
			$sql = "INSERT INTO `response_list` set {$data} ";
		}else{
			$sql = "UPDATE `response_list` set {$data} where id = '{$id}' ";
		}
			$save = $this->conn->query($sql);
		if($save){
			$rid = !empty($id) ? $id : $this->conn->insert_id;
			$resp['rid'] = $rid;
			$resp['status'] = 'success';
			if(empty($id))
				$resp['msg'] = "New Response successfully saved.";
			else
				$resp['msg'] = " Response successfully updated.";
			$data2="";
			foreach($kw_arr as $kw){
				if(!empty($data2)) $data2 .= ", ";
				$data2 .= "('{$rid}', '{$kw}')";
			}
			$sql2 = "INSERT INTO `keyword_list` (`response_id`, `keyword`) VALUES {$data2}";
			$this->conn->query("DELETE FROM `keyword_list` where response_id = '{$rid}'");
			$save2 = $this->conn->query($sql2);
			if(!$save2){
				if(empty($id))
				$this->conn->query("DELETE FROM `keyword_list` where response_id = '{$rid}'");
				$resp['status'] = 'failed';
				$resp['msg'] = $this->conn->error;
				$resp['sql'] = $sql2;
			}
			$data3="";
			$this->conn->query("DELETE FROM `suggestion_list` where response_id = '{$rid}'");
			foreach($suggestion as $sg){
				if(empty($sg))
				continue;
				$sg = $this->conn->real_escape_string($sg);
				if(!empty($data3)) $data3 .= ", ";
				$data3 .= "('{$rid}', '{$sg}')";
			}
			if(!empty($data3)){
				$sql3 = "INSERT INTO `suggestion_list` (`response_id`, `suggestion`) VALUES {$data3}";
				$save3 = $this->conn->query($sql3);
				if(!$save3){
					if(empty($id))
					$this->conn->query("DELETE FROM `keyword_list` where response_id = '{$rid}'");
					$resp['status'] = 'failed';
					$resp['msg'] = $this->conn->error;
					$resp['sql'] = $sql3;
				}
			}
		}else{
			$resp['status'] = 'failed';
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		if($resp['status'] == 'success')
			$this->settings->set_flashdata('success',$resp['msg']);
			return json_encode($resp);
	}
	function delete_response(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `response_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success'," Response successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	 // Fungsi untuk mendapatkan respons dari database
	 function fetch_response_from_db($kw){
        $sql = "SELECT * FROM `response_list` WHERE id IN (SELECT response_id FROM `keyword_list` WHERE `keyword` = '{$kw}')";
        $qry = $this->conn->query($sql);
        if($qry && $qry->num_rows > 0){
            $result = $qry->fetch_array();
            return ['status' => 'success', 'response' => $result['response']];
        }
        return null;
    }

    // Fungsi untuk mendapatkan respons dari API jika tidak ada di database
    function fetch_response_from_api($userMessage){
        // Ganti dengan API URL dan API KEY Anda
        $API_KEY = "AIzaSyBmQO9TgskXVx1dpMv3gNl9PmpAeurAm1E"; 
        $API_URL = "https://generativelanguage.googleapis.com/v1/models/gemini-pro:generateContent?key={$API_KEY}";
        
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode([
                    'contents' => [[
                        'role' => 'user',
                        'parts' => [['text' => $userMessage]]
                    ]]
                ]),
            ],
        ];
        
        $context  = stream_context_create($options);
        $result = file_get_contents($API_URL, false, $context);
        if ($result === FALSE) {
            return ['status' => 'failed', 'msg' => 'Error fetching from API'];
        }
        
        $data = json_decode($result, true);
        if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
            return ['status' => 'success', 'response' => $data['candidates'][0]['content']['parts'][0]['text']];
        }
        return ['status' => 'failed', 'msg' => 'No response from API'];
    }

    // Fungsi utama untuk fetch response
    function fetch_response(){
        extract($_POST);
        // Pertama, coba ambil respons dari database
        $db_response = $this->fetch_response_from_db($kw);
        if ($db_response) {
            return json_encode($db_response);
        }

        // Jika respons tidak ada di database, ambil dari API
        $api_response = $this->fetch_response_from_api($kw);
        return json_encode($api_response);
    }
}


$Master = new Master();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
$sysset = new SystemSettings();
switch ($action) {
	case 'get_totals':
		$totals = [
			'total_responses' => $Master->getTotalResponses(),
			'total_fetched' => $Master->getTotalFetched()
		];
		echo json_encode($totals);
		break;	
	case 'delete_img':
		echo $Master->delete_img();
	break;
	case 'save_response':
		echo $Master->save_response();
	break;
	case 'delete_response':
		echo $Master->delete_response();
	break;
	case 'fetch_response':
		echo $Master->fetch_response();
	break;
	default:
		// echo $sysset->index();
		break;
}