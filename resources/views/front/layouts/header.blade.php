<!DOCTYPE html>
<html>
<head>
    <title>Hospital Manegment</title>
     <link rel="icon" href="{{asset('front/img/logo.png')}}" type="img" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
</head>
<body>
<section>
<header>
<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="header-info-outer hidden-xs">
  <div class="info-box">
  <div class="icon"></span></div>
<a href="">Email</a>
</div>
<div class="info-box">
<div class="icon"><span class="flaticon-customer-service"></span></div>
  <a class="phone" href="#">Phone</a>
</div>
</div>
  <div class="social">
<ul>
<li><a href="{{Route('login')}}" target="_blank" class="black"><i class="fa fa-lg fa-sign-in"> </i> Login</a> </li>
<li><a href=""><i class="fa fa-lg fa-facebook"></i></a></li>
<li><a href=""><i class="fa fa-lg fa-twitter"></i></a></li>
<li><a href=""><i class="fa fa-lg fa-instagram"></i></a></li>
<li><a href="#"><i class="fa fa-lg fa-skype"></i></a></li>
</ul>
  </div>
  </div>
        </div>
    </div>
</header>
</section>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="{{URL::to('index')}}"><img width="80%" src="{{asset('front/img/logo.png')}}"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills mr-auto justify-content-end w-100">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('index')}}"><b>Home</b> <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{URL::to('about_head')}}">Message From Head</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{URL::to('management')}}">Manegment</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{URL::to('corporate_client')}}">Corporate Client</a>
</div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patients
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{URL::to('appointment')}}">Make an Appointment</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{URL::to('labtest_fee')}}">Lab Test Fee</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{URL::to('room_rent')}}">Room Rent</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{URL::to('service')}}">Patient Facilities</a>

{{--          <div class="dropdown-divider"></div>--}}
{{--            <a class="dropdown-item" href="{{URL::to('patient_feedback')}}">Patient Feedback</a>--}}

{{--        </div>--}}
      </li>
{{--       <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{URL::to('visitors')}}">Visitors</a>--}}
{{--      </li>--}}
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('service')}}">Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('department')}}">Department</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('dr_home')}}">Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('contact')}}">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""><i class="fa fa-lg fa-share-alt"></i> Shareit</a>
      </li>
    </ul>

  </div>
  </div>
</nav>
