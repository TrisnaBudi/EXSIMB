<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    {{-- External Assets --}}
    @yield('external_assets')
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

<style>
    /* Sidebar Collapse */
    .sidebar-collapse .main-sidebar {
        display: none;
    }

    .sidebar-collapse .sidebar.active {
        display: block;
    }

    .header-nav{
        display: block;
        position: relative;
        top: 10px;
        z-index: 1200;
        background-color: transparent;
        border: none;
        outline: none;
        cursor: pointer;
    }
    /* Sidebar Toggle Button */
    .toggle-sidebar-btn {
        display: block;
        position: relative;
        left: 10px;
        z-index: 1200;
        background-color: transparent;
        border: none;
        outline: none;
        cursor: pointer;
    }

    .toggle-sidebar-btn i {
        font-size: 1.5rem;
        color: #000;
    }

    /* Untuk layar kecil */
    @media (max-width: 767px) {
        .toggle-sidebar-btn {
            display: block;
        }

        .main-sidebar {
            display: none;
        }

        .sidebar-toggle {
            display: block !important;
        }

        .sidebar-collapse .sidebar {
            display: none !important;
        }

        .sidebar-collapse .content-wrapper {
            margin-left: 0 !important;
        }

        .sidebar-collapse .main-header {
            margin-left: 0 !important;
        }
    }

    /* Untuk layar sedang dan besar */
    @media (min-width: 768px) {
        .main-sidebar {
            flex: 0 0 250px !important;
            max-width: 250px !important;
            width: 250px !important;
        }

        .sidebar-collapse .main-sidebar {
            flex: 0 0 60px !important;
            max-width: 60px !important;
            width: 60px !important;
        }

        .sidebar-collapse .content-wrapper {
            margin-left: 60px !important;
        }
    }

    .main-sidebar.sidebar-dark-primary {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        width: 250px;
        z-index: 1100;
    }

    .sidebar .nav-link {
        color: #fff;
    }

    .sidebar .nav-link:hover {
        background-color: #007bff;
        color: #fff;
    }

    .sidebar .nav-link:hover > .nav-icon {
        color: #fff;
    }

    .sidebar .nav-link.active {
        background-color: #0069d9;
        color: #fff;
    }

    .sidebar .nav-link.active > .nav-icon {
        color: #fff;
    }

    .nav-heading {
        color: #ddd;
        font-size: 0.9rem;
        padding: 8px 16px;
        text-transform: uppercase;
    }

    .sidebar-collapse .sidebar {
        display: none;
    }

    .sidebar-collapse .sidebar.active {
        display: block;
    }

    /* Header */
    .main-header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        border-bottom: 1px solid #ebebeb;
        background-color: #fff;
        margin-left: 250px;
    }

    .main-header .navbar {
        transition: margin-left .3s linear;
    }

    .main-header .navbar-nav .nav-item {
        margin: 0;
    }

    .main-header .nav-link {
        position: relative;
        height: 2.5rem;
    }

    @media (max-width: 767px) {
        .main-header {
            padding-left: 0;
        }
    }

    /* Cards */
    .info-card {
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .info-card {
            width: 100%;
        }
    }

    /* Tables */
    .datatable {
        width: 100%;
    }

    @media (max-width: 768px) {
        .datatable {
            overflow-x: auto;
        }
    }

    /* Content Wrapper, Main Footer, Main Header */

    @media (max-width: 991.98px) {
        .content-wrapper,
        .content-wrapper:before,
        .main-header,
        .main-header:before {
            margin-left: 0;
        }
    }

    .hold-transition .content-wrapper,
    .hold-transition .main-header {
        transition: none !important;
    }

    .main-header .navbar-nav .nav-item {
        margin: 0;
    }

    .main-header .nav-link {
        position: relative;
        height: 2.5rem;
    }

    .skin-black .main-header .navbar .nav>li>a:hover,
    .skin-black .main-header .navbar .nav>li>a:active,
    .skin-black .main-header .navbar .nav>li>a:focus,
    .skin-black .main-header .navbar .nav .open>a,
    .skin-black .main-header .navbar .nav .open>a:hover,
    .skin-black .main-header .navbar .nav .open>a:focus,
    .skin-black .main-header .navbar .nav>.active>a {
        background: #fff;
        color: #999;
    }

    .skin-black .main-header .navbar .sidebar-toggle {
        color: #333;
    }

    .skin-black .main-header .navbar .sidebar-toggle:hover {
        color: #999;
        background: #fff;
    }

    .skin-black .main-header .navbar>.sidebar-toggle {
        color: #333;
        border-right: 1px solid #eee;
    }

    .skin-black .main-header .navbar .navbar-nav>li>a {
        border-right: 1px solid #eee;
    }

    .skin-black .main-header .navbar .navbar-custom-menu .navbar-nav>li>a,
    .skin-black .main-header .navbar .navbar-right>li>a {
        border-left: 1px solid #eee;
        border-right-width: 0;
    }

    .skin-black .main-header .logo {
        background-color: #fff;
        color: #333;
        border-bottom: 0 solid transparent;
        border-right: 1px solid #eee;
    }

    .skin-black .main-header .logo:hover {
        background-color: #fcfcfc;
    }

    .skin-black .main-header li.user-header {
        background-color: #222;
    }

    /* Transisi */
    .main-sidebar .brand-text,
    .sidebar .nav-link p,
    .sidebar .user-panel .info {
        transition: margin-left .3s linear, opacity .5s ease;
    }

    /* Sidebar */
    .main-sidebar .sidebar {
        width: 250px;
        min-height: 353.2px;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 1100;
    }

    .sidebar.bg-dark {
        background-color: #343a40; /* Sesuaikan dengan warna latar belakang yang diinginkan */
    }

    .sidebar-dark-primary .nav-treeview > .nav-item > .nav-link {
        color: #fff;
    }

    .sidebar-dark-primary .nav-treeview > .nav-item > .nav-link:hover {
        background-color: #007bff;
    }

    .sidebar-dark-primary .nav-treeview > .nav-item > .nav-link:hover > .nav-icon {
        color: #fff;
    }

    .sidebar-dark-primary .nav-treeview > .nav-item > .nav-link.active {
        background-color: #0069d9;
    }

    .sidebar-dark-primary .nav-treeview > .nav-item > .nav-link.active > .nav-icon {
        color: #fff;
    }

    .nav-heading {
        color: #ddd;
        font-size: 0.9rem;
        padding: 8px 16px;
        text-transform: uppercase;
    }

    .sidebar-collapse .sidebar {
        display: none;
    }

    .sidebar-collapse .sidebar.active {
        display: block;
    }

    .main-header .navbar {
        transition: margin-left .3s linear;
    }

    .main-header .navbar.collapsed {
        margin-left: 0;
    }

    .main-header .navbar-nav .nav-item {
        margin: 0;
    }

    /* Untuk layar kecil */
    @media (max-width: 767px) {
        .toggle-sidebar-btn {
            display: block;
        }
    }

    .navbar-nav.ml-auto {
        flex-direction: column;
        align-items: flex-end;
    }

    /* Cards */
    .info-card {
        margin-bottom: 20px;
    }

    @media (max-width: 575.98px) {
        .info-card {
            margin-left: 10px;
            margin-right: 10px;
        }
    }

    /* Tables */
    .datatable {
        width: 100%;
    }

    @media (max-width: 767px) {
        .datatable {
            overflow-x: auto;
        }
    }

    /* Footer */
    .main-footer {
        position: fixed;
        bottom: 0;
        left: 250px;
        right: 0;
        z-index: 1030;
        border-top: 1px solid #ebebeb;
        background-color: #fff;
    }

    @media (max-width: 767px) {
        .main-footer {
            padding-left: 0;
        }
    }

    @media (max-width: 991.98px) {
        .content-wrapper,
        .content-wrapper:before,
        .main-footer,
        .main-footer:before,
        .main-header,
        .main-header:before {
            margin-left: 0;
        }
    }

    .sidebar-collapse .sidebar,
    .sidebar-collapse .main-sidebar {
        display: none;
    }

    .sidebar-dark-primary .sidebar {
        background-color: #222;
    }

    .sidebar-dark-primary .sidebar a {
        color: #b8b8b8;
    }

    .sidebar-dark-primary .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar-dark-primary .sidebar .nav-treeview > .nav-item > .nav-link {
        background-color: #1f1f1f;
        color: #b8b8b8;
    }

    .sidebar-dark-primary .sidebar .nav-treeview > .nav-item > .nav-link:hover {
        background-color: #343a40;
    }

    .sidebar-dark-primary .sidebar .nav-treeview > .nav-item > .nav-link.active {
        background-color: #343a40;
        color: #fff;
    }

    .sidebar-dark-primary .sidebar .user-panel > .info,
    .sidebar-dark-primary .sidebar .user-panel > .info > a {
        color: #b8b8b8;
    }

    .sidebar-dark-primary .sidebar a {
        text-decoration: none;
    }

</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @yield('main_section')
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const toggleBtn = document.querySelector('.toggle-sidebar-btn');
      const sidebar = document.getElementById('sidebar-nav');

      toggleBtn.addEventListener('click', function() {
          sidebar.classList.toggle('active');
      });

      window.addEventListener('resize', function() {
          if (window.innerWidth <= 767) {
              sidebar.classList.remove('active');
          } else {
              sidebar.classList.add('active');
          }
      });
  });
</script>

@yield('js_external_assets')
</body>
</html>
