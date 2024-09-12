<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    
    .user-img {
      position: absolute;
      height: 27px;
      width: 27px;
      object-fit: cover;
      left: -7%;
      top: -12%;
    }

    .btn-rounded {
      border-radius: 50px;
    }
/* Styling untuk .user-img */
.user-img {
  position: absolute;
  height: 27px;
  width: 27px;
  object-fit: cover;
  left: -7%;
  top: -12%;
  border: 2px solid #ddd; /* Menambahkan border agar lebih terlihat */
  transition: border-color 0.3s;
}

/* Styling untuk .btn-rounded */
.btn-rounded {
  border-radius: 50px;
  background-color: #ffffff; /* Warna tombol default */
  color: #333; /* Warna teks default */
  transition: background-color 0.3s, color 0.3s;
}

/* Penyesuaian untuk dark mode */
.dark-mode .user-img {
  border-color: #444; /* Border lebih gelap saat dark mode */
}

.dark-mode .btn-rounded {
  background-color: #333; /* Warna tombol saat dark mode */
  color: #fff; /* Warna teks tombol saat dark mode */
}

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      color: #333;
      transition: background-color 0.3s, color 0.3s;
    }

    body.dark-mode {
      background-color: #121212;
      color: #ffffff;
    }
    .navbar.dark-mode .nav-link {
  color: #ddd; /* Mengubah warna teks navbar saat dark mode aktif */
  transition: color 0.3s; /* Tambahkan transisi agar perubahan lebih halus */
}


    aside.main-sidebar {
      background-color: #343a40;
      transition: background-color 0.3s, filter 0.3s;
    }

    aside.main-sidebar.light-mode {
      background-image: url('http://localhost/chatbot_IOTI/uploads/cover.png') !important;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      filter: grayscale(0);
    }

    aside.main-sidebar.dark-mode {
      filter: grayscale(1);
      background-color: #1f1f1f;
    }

    .brand-link {
      display: flex;
      align-items: center;
      padding: 10px;
      color: #c2c7d0;
      transition: background-color 0.3s, color 0.3s;
    }

    .dark-mode .brand-link {
      background-color: #292929;
    }

    .brand-image {
      opacity: 0.8;
      width: 1.5rem;
      height: 1.5rem;
      max-height: unset;
    }

    .nav-link {
      display: flex;
      align-items: center;
      color: #c2c7d0;
      padding: 10px;
      transition: background-color 0.3s, color 0.3s;
    }

    .dark-mode .nav-link {
      color: #ddd;
    }

    .nav-link.active {
      background-color: #4b545c;
    }

    .dark-mode .nav-link.active {
      background-color: #333;
      color: #fff;
    }

    /* Tambahkan gaya untuk dropdown dan tombol */
    .dropdown-menu {
      background-color: #ffffff;
      transition: background-color 0.3s;
    }

    .dark-mode .dropdown-menu {
      background-color: #2e2e2e;
      color: #ffffff;
    }

    .dropdown-item {
      color: #333;
    }

    .dark-mode .dropdown-item {
      color: #ddd;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light shadow text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url ?>" class="nav-link">
          <?php echo (!isMobileDevice()) ? $_settings->info('name') : $_settings->info('short_name'); ?> - Admin
        </a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <div class="btn-group nav-link">
          <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon" data-toggle="dropdown">
            <span><img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" class="img-circle elevation-2 user-img" alt="User Image"></span>
            <span class="ml-3"><?php echo ucwords($_settings->userdata('firstname') . ' ' . $_settings->userdata('lastname')) ?></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="<?php echo base_url . 'admin/?page=user' ?>"><span class="fa fa-user"></span> My Account</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url . '/classes/Login.php?f=logout' ?>"><span class="fas fa-sign-out-alt"></span> Logout</a>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand light-mode">
    <!-- Brand Logo -->
    <a href="<?php echo base_url ?>admin" class="brand-link bg-gradient-navy text-sm">
      <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Store Logo" class="brand-image img-circle elevation-3" />
      <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="<?php echo base_url ?>admin/?page=responses" class="nav-link nav-responses">
              <i class="nav-icon fas fa-comment-dots"></i>
              <p>Responses</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="<?php echo base_url ?>admin/?page=reports" class="nav-link nav-reports">
              <i class="nav-icon far fa-circle"></i>
              <p>Report</p>
            </a>
          </li>
          <?php if ($_settings->userdata('type') == 1): ?>
          <li class="nav-header">Maintenance</li>
          <li class="nav-item dropdown">
            <a href="<?php echo base_url ?>admin/?page=user/list" class="nav-link nav-user/list">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>User List</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
              <i class="nav-icon fas fa-tools"></i>
              <p>Settings</p>
            </a>
          </li>
          <?php endif; ?>
          <li class="nav-item">
            <a href="#" class="nav-link" id="darkModeToggle">
              <i class="nav-icon fas fa-moon"></i>
              <p>Dark Mode</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
document.addEventListener('DOMContentLoaded', function () {
  const darkModeToggle = document.getElementById('darkModeToggle');

  darkModeToggle.addEventListener('click', function (e) {
    e.preventDefault();
    document.body.classList.toggle('dark-mode');
    const sidebar = document.querySelector('aside.main-sidebar');
    const navbar = document.querySelector('.main-header.navbar');

    // Toggle antara light-mode dan dark-mode pada sidebar dan navbar
    if (sidebar.classList.contains('dark-mode')) {
      sidebar.classList.remove('dark-mode');
      sidebar.classList.add('light-mode');
      navbar.classList.remove('dark-mode'); // Hapus class dark-mode dari navbar
      localStorage.setItem('darkMode', 'disabled');
    } else {
      sidebar.classList.add('dark-mode');
      sidebar.classList.remove('light-mode');
      navbar.classList.add('dark-mode'); // Tambah class dark-mode ke navbar
      localStorage.setItem('darkMode', 'enabled');
    }
  });

  // Cek preferensi pengguna pada saat halaman dimuat
  if (localStorage.getItem('darkMode') === 'enabled') {
    document.body.classList.add('dark-mode');
    const sidebar = document.querySelector('aside.main-sidebar');
    sidebar.classList.add('dark-mode');
    sidebar.classList.remove('light-mode');
    const navbar = document.querySelector('.main-header.navbar');
    navbar.classList.add('dark-mode'); // Tambah class dark-mode ke navbar saat halaman dimuat
  }
});


  </script>
</body>
</html>
