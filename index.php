<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<?php if($_settings->chk_flashdata('success')): ?>
<script>
  $(function(){
    alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
  })
</script>
<?php endif;?>
<style>
  body{
    background-image:url('<?= validate_image($_settings->info('cover')) ?>') !important;
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center center;
  }
</style>
<body>
<?php require_once('inc/topBarNav.php') ?>
<?php $page = isset($_GET['p']) ? $_GET['p'] : 'home';  ?>
<?php 
    if(!file_exists($page.".php") && !is_dir($page)){
        include '404.html';
    }else{
    if(is_dir($page))
        include $page.'/index.php';
    else
        include $page.'.php';

    }
?>
<div class="container-fluid bg-gradient-navy text-light" style="height: 108vh;">
<p class="m-0 text-center text-white fw-bold fs-5">
‎ 
</p>
<p class="m-0 text-center text-white fw-bold fs-5">
    Copyright &copy; Chat Bot - PHP 2024
</p>
<p class="m-0 text-center text-white fs-6">
    Developed By: Fajar Aqillah
</p>

</div>




</body>
</html>