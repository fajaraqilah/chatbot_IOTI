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
/* Mengatur latar belakang utama pada body */
body {
    background-image: url('<?= validate_image($_settings->info('cover')) ?>') !important;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    min-height: 100vh; /* Menjaga latar belakang mencakup seluruh layar */
    margin: 0;
    position: relative; /* Agar elemen pseudo berfungsi dengan benar */
    z-index: 1;
}

/* Overlay khusus untuk dark mode */
body.dark-mode::before {
    content: '';
    position: fixed; /* Mengisi seluruh layar */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8); /* Warna overlay dengan transparansi */
    z-index: -1; /* Agar tetap berada di belakang konten utama */
}

/* Menyesuaikan elemen lain yang berada di atas body agar tidak terpengaruh */
body.dark-mode {
    z-index: 10; /* Menyelaraskan konten utama agar di atas overlay */
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
<style>
  .sticky-footer {
    position: relative; /* Atur ini ke fixed jika ingin footer selalu berada di bagian bawah layar */
    bottom: 0;
    left: 0;
    width: 100%;
    height: 108vh; /* Menyesuaikan tinggi sesuai kebutuhan */
    background: linear-gradient(90deg, rgba(30, 30, 45, 1) 0%, rgba(0, 100, 155, 1) 100%);
    color: #fff;
    padding: 20px 0;
  }

  .sticky-footer p {
    margin: 0;
    
  }
  .dark-mode .sticky-footer {
    background: #1e1e2d; /* Ubah sesuai warna dark mode */
    color: #e0e0e0; /* Ubah warna teks agar terlihat jelas di dark mode */
  }
</style>

<footer class="sticky-footer d-flex flex-column align-items-center text-center">
  <p class="fw-bold fs-5">
    <i class="fas fa-robot"></i> Chat Bot - PHP 2024 &copy;
  </p>
  <p class="fs-6">
    Developed By: <span class="fw-bold">Fajar Aqillah</span>
  </p>
</footer>
</body>
</html>