<!DOCTYPE html>
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 07:25:25 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard | Lorem'Kost</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('asset/poto-kost/logoo-removebg-preview.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('asset/admin/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('asset/admin/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('asset/admin/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('asset/admin/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('asset/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    
    <link rel="stylesheet" href="{{asset('asset/admin/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/admin/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('asset/admin/css/trix.css')}}">
    <script type="text/javascript" src="{{asset('asset/admin/js/trix.js')}}"></script>

    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display:none;
      }
    </style>
    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="{{asset('asset/admin/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('asset/admin/js/config.js')}}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
    <a href="index-2.html" class="app-brand-link">
      <span class="app-brand-logo demo">

<img src="{{asset('asset/poto-kost/logoo-removebg-preview.png')}}" width="60" height="60" alt="">
</span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">Lorem'Kost</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  

  <ul class="menu-inner py-1">

    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="{{ url('dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">User</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Account Settings">Admin</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{url('dashboard/admin')}}" class="menu-link">
            <div data-i18n="Account">Account</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pages-account-settings-notifications.html" class="menu-link">
            <div data-i18n="Notifications">Setting</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Authentications">Pemilik Kost</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link" target="_blank">
            <div data-i18n="Basic">Account</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="auth-register-basic.html" class="menu-link" target="_blank">
            <div data-i18n="Basic">Setting</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Authentications">User</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link" target="_blank">
            <div data-i18n="Basic">Account</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="auth-register-basic.html" class="menu-link" target="_blank">
            <div data-i18n="Basic">Setting</div>
          </a>
        </li>
      </ul>
    </li>
    
    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Kost</span></li>
    <!-- User interface -->
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home"></i>
        <div data-i18n="User interface">Kost</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{url('dashboard/kost') }}" class="menu-link">
            <div data-i18n="Accordion">Upload</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{url('dashboard/kost') }}" class="menu-link">
            <div data-i18n="Alerts">Lihat</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{url('dashboard/kost') }}" class="menu-link">
            <div data-i18n="Alerts">Edit</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="{{url('kategori')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-crown"></i>
        <div data-i18n="Boxicons">Category</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Transaksi</span>
    </li>

    <!-- Extended components -->
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-money"></i>
        <div data-i18n="Extended UI">Transaksi</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{ url('dashboard/pembayaran') }}" class="menu-link">
            <div data-i18n="Perfect Scrollbar">Pembayaran</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cart"></i>
        <div data-i18n="Extended UI">Cart</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Perfect Scrollbar">Cart</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Perfect Scrollbar">Checkout</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="{{url('dashboard/wishlist')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-folder-open"></i>
        <div data-i18n="Boxicons">Wishlist</div>
      </a>
    </li>
  </ul>

</aside>
<!-- / Menu -->
    <!-- Layout container -->
    <div class="layout-page">
<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item d-flex align-items-center">
            <i class="bx bx-search fs-4 lh-0"></i>
            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
          </div>
        </div>
        <!-- /Search -->
        

        <ul class="navbar-nav flex-row align-items-center ms-auto">
        
          <!-- User -->
            <li>
				<form action="{{ url('logout') }}" method="post">
					@csrf
					<button type="submit" class="dropdown-item"><i class="bx bx-log-out-circle me-2"></i> logout</button>
				</form>
		    </li>
          <!--/ User -->
          

        </ul>
      </div>
  </nav>
<!-- / Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        @yield('content')
    </div>  
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
      document.write(new Date().getFullYear())
      </script>
      , made with ❤️ by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-bolder">Ervina Hardiyat</a>
    </div>
    <div>
      
      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
      
      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
      
      <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
      
      
    </div>
  </div>
</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
  </div>
  <!-- / Layout wrapper -->

  
  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{asset('asset/admin/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{asset('asset/admin/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{asset('asset/admin/vendor/js/bootstrap.js')}}"></script>
  <script src="{{asset('asset/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  
  <script src="{{asset('asset/admin/vendor/js/menu.js')}}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{asset('asset/admin/vendor/libs/apex-charts/apexcharts.js')}}"></script>

  <!-- Main JS -->
  <script src="{{asset('asset/admin/js/main.js')}}"></script>

  <!-- Page JS -->
  <script src="{{asset('asset/admin/js/dashboards-analytics.js')}}"></script>
  
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="{{asset('asset/admin/buttons.github.io/buttons.js')}}"></script>
  
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 07:25:25 GMT -->
</html>
