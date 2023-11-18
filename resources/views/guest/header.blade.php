<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from akinoz.com/demos/BlackCat/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 13:17:16 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="BLACKCAT">
  <link href="{{ asset('blackcat/assets/images/favicon/favicon.png') }}" rel="icon">
  <title>BLACKCAT</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="{{ asset('blackcat/assets/css//fontawesome.all.css') }}">
  <link rel="stylesheet" href="{{ asset('blackcat/assets/css/libraries.css') }}">
  <link rel="stylesheet" href="{{ asset('blackcat/assets/css/style.css') }}">

</head>
<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="{{ asset('blackcat/assets/images/logo/logo-light.png') }}" class="logo-light" alt="logo" height="100">
            <img src="{{ asset('blackcat/assets/images/logo/logo-dark.png') }}" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav__item">
                  <a href="{{ route('guest.index') }}" class="nav__item-link">Home</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="{{ route('guest.about') }}" class="nav__item-link">About Us</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="{{ route('guest.services') }}" class="nav__item-link">Services</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="{{ route('guest.treatment') }}" class="nav__item-link">Projects</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="{{ route('guest.product') }}" class="nav__item-link">Products</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="{{ route('guest.contact') }}" class="nav__item-link">Contact Us</a>
                </li><!-- /.nav-item -->
              </ul><!-- /.navbar-nav -->
              
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
     
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->
