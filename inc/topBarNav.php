<!DOCTYPE html>
<html lang="en">
<head>
       <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
/* Default styling for .navbar-custom */
.navbar-custom {
    background: linear-gradient(90deg, rgba(15, 23, 42, 1) 0%, rgba(0, 212, 255, 1) 100%);
}

.navbar-brand img {
    border-radius: 50%;
    border: 2px solid #fff;
}

.navbar-custom .nav-link {
    color: #fff;
    font-weight: 500;
}

.navbar-custom .nav-link:hover {
    color: #d0d0d0;
}

.navbar-custom .btn-admin {
    background-color: #0056b3;
    color: #fff;
    border: none;
}

.navbar-custom .btn-admin:hover {
    background-color: #003d7a;
}

/* Dark mode styling for .navbar-custom */
.dark-mode .navbar-custom {
    background: linear-gradient(90deg, rgba(30, 30, 45, 1) 0%, rgba(0, 100, 155, 1) 100%);
}

.dark-mode .navbar-custom .nav-link {
    color: #cfcfcf;
}

.dark-mode .navbar-custom .btn-admin {
    background-color: #003d7a;
}

.dark-mode .navbar-custom .btn-admin:hover {
    background-color: #002957;
}

        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./">
            <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30" height="30" class="d-inline-block align-top" alt="Logo" loading="lazy">
            INFRASTRUKTUR DAN OPERASIONAL TEKNOLOGI INFORMASI
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <!-- Additional nav items can go here -->
            </ul>
            <div class="d-flex align-items-center">
                <a class="btn btn-admin d-flex align-items-center" href="./admin">
                    <i class="fas fa-sign-in-alt me-2"></i> Admin Login
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Bootstrap JS Bundle -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>