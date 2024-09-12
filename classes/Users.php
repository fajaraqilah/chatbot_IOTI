<?php
require_once('../config.php');
Class Users extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	public function save_users(){
		extract($_POST);
		$data = '';
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','password'))){
				if(!empty($data)) $data .=" , ";
				$data .= " {$k} = '{$v}' ";
			}
		}
		if(!empty($password) && !empty($id)){
			$password = md5($password);
			if(!empty($data)) $data .=" , ";
			$data .= " `password` = '{$password}' ";
		}
	
		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
			$fname = 'uploads/'.strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'],'../'. $fname);
			if($move){
				$data .=" , avatar = '{$fname}' ";
				if(isset($_SESSION['userdata']['avatar']) && is_file('../'.$_SESSION['userdata']['avatar']))
					unlink('../'.$_SESSION['userdata']['avatar']);
			}
		}
	
		if(empty($id)){
			$qry = $this->conn->query("INSERT INTO users set {$data}");
			if($qry){
				$new_id = $this->conn->insert_id; // Dapatkan ID pengguna yang baru dibuat
				$this->settings->set_flashdata('success','User Details successfully saved.');
	
				// Pastikan hanya pengguna aktif yang diperbarui session-nya
				if($this->settings->userdata('id') == $new_id) {
					foreach($_POST as $k => $v){
						if($k != 'id'){
							$this->settings->set_userdata($k, $v);
						}
					}
				}
				return 1;
			} else {
				return 2;
			}
	
		} else {
			$qry = $this->conn->query("UPDATE users set $data where id = {$id}");
			if($qry){
				$this->settings->set_flashdata('success','User Details successfully updated.');
	
				// Pastikan hanya pengguna aktif yang diperbarui session-nya
				if($this->settings->userdata('id') == $id) {
					foreach($_POST as $k => $v){
						if($k != 'id'){
							$this->settings->set_userdata($k, $v);
						}
					}
					if(isset($fname) && isset($move))
						$this->settings->set_userdata('avatar',$fname);
				}
				return 1;
			} else {
				return "UPDATE users set $data where id = {$id}";
			}
		}
	}
	
	public function delete_users(){
		extract($_POST);
		$qry = $this->conn->query("DELETE FROM users where id = $id");
		if($qry){
			$this->settings->set_flashdata('success','User Details successfully deleted.');
			if(is_file(base_app."uploads/avatars/$id.png"))
				unlink(base_app."uploads/avatars/$id.png");
			return 1;
		}else{
			return false;
		}
	}
	
}

$users = new users();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
switch ($action) {
	case 'save':
		echo $users->save_users();
	break;
	case 'delete':
		echo $users->delete_users();
	break;
	default:
		// echo $sysset->index();
		break;
}