<?php

$count_caller= Change::callers_count_number();
$count_email= Change::email_count_number();
$index= Change::index();
$app_name= Change::title();
?>

<link href="{{asset('css/bootstrap.min.css" rel="stylesheet')}}" id="bootstrap-css">
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{asset('js/home.js')}}"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    @if(strlen($app_name["name"]) < 1)
    <title> Add App Name</title>
    @else
    <title>{{$app_name["name"]}}</title>
    @endif
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home.style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <style>
    a:hover{
      text-decoration: none;
    }
  </style>
</head>
<body class="animated fadeInDown">
    
    
<div class="page-wrapper chiller-theme toggled">
  {{-- Nav Menu Bar --}}
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="javascript:void(0)">
      <i class="fa fa-bars"></i>
    </a>
    {{-- Side Bar Nav --}}
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="javascript:void(0)" style="font-size:20px;color: white">
            <img style="width:190px;" class="logo" src="{{asset('img/inits-logo.png')}}">
          </a>
          <div id="close-sidebar">
            <i class="fa fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
            <i style="color:#1d5dd3;font-size:30px;margin-left:20px;" class="fa fa-user-circle"></i>
          </div>
          <div class="user-info">
            <span class="user-name">
              <strong>{{ Auth::user()["name"] }}</strong>
            </span>
            <span class="user-role">Administrator</span>
            <span class="user-status">
              <i class="fa fa-circle" style="color:green"></i>
              <span>Online</span>
            </span>
          </div>
        </div>
        <div id="sideBarMenu" class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span><i class="fa fa-dashboard"></i> Dashboard </span>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)">
                  <i class="fa fa-phone"></i>
                  <span>Callers</span>
                  <span class="badge badge-pill badge-danger">{{$count_caller}} </span>
                </a>
                <div class="sidebar-submenu">
                  <ul>
                    <li>
                      <a href="/contactus/todayCallers">
                        Today Callers
                      </a>
                    </li>
                    <li>
                      <a href="/contactus/callers">
                        View Callers
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            <li class="sidebar-dropdown">
              <a href="javascript:void(0)">
                <i class="fa fa-cog "></i>
                <span>Service</span>
                <span class="badge badge-pill badge-warning">New</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="/contactus/services/create">Add Service
                      <span class="badge badge-pill badge-success">Pro</span>
                    </a>
                  </li>
                  <li>
                    <a href="/contactus/services">View Services </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a href="javascript:void(0)">
                <i class="fa fa-eraser"></i>
                <span>Problem</span>
                <span class="badge badge-pill badge-danger"></span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="/contactus/problems/create">
                      Add Problem
                    </a>
                  </li>
                  <li>
                    <a href="/contactus/problems">View Problems</a>
                  </li>
                  
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)">
                  <i class="fa fa-list"></i>
                  <span>Description</span>
                  <span class="badge badge-pill badge-danger"></span>
                </a>
                <div class="sidebar-submenu">
                  <ul>
                    <li>
                      <a href="/contactus/descriptions/create">
                        Add Description
                      </a>
                    </li>
                    <li>
                      <a href="/contactus/descriptions">View Descriptions</a>
                    </li>
                    
                  </ul>
                </div>
              </li>

            <li class="sidebar-dropdown">
              <a href="javascript:void(0)">
                <i class="fa fa-globe"></i>
                <span>Solution</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="/contactus/solutions/create">
                      Add Solution
                    </a>
                  </li>
                  <li>
                    <a href="/contactus/solutions">View Solutions</a>
                  </li>
                </ul>
              </div>
            </li><hr>
            <li class="header-menu">
              <span>Extra</span>
            </li>
            <li>
              <div id="singleLink">
                <a href="/contactus/EmailMessgs">
                  <i class="fa fa-mail-forward"></i>
                  <span>Emails</span>
                  <span class="badge badge-pill badge-danger">{{$count_email}} </span> 
                </a>
              </div>
            </li>
           
              <li id="link" class="sidebar-dropdown">
                  <a href="javascript:void(0)">
                      <i class="fa fa-link"></i>
                      <span>Links</span>
                    {{-- <span class="badge badge-pill badge-danger">3</span> --}}
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="/contactus/links/create">Add Link
      
                        </a>
                      </li>
                      <li>
                        <a href="/contactus/links">View Links</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
                <li id="link" class="sidebar-dropdown">
                  <a href="javascript:void(0)">
                      <i class="fa fa-link"></i>
                      <span>Countries</span>
                    {{-- <span class="badge badge-pill badge-danger">3</span> --}}
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="/contactus/countries/create">Add Country
      
                        </a>
                      </li>
                      <li>
                        <a href="/contactus/countries">View Countries</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
                <li id="link" class="sidebar-dropdown">
                  <a href="javascript:void(0)">
                      <i class="fa fa-link"></i>
                      <span>Customer Prefer</span>
                    {{-- <span class="badge badge-pill badge-danger">3</span> --}}
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="/contactus/CustomerPrefer/AddTollFreeNumber">Add Toll free Number
      
                        </a>
                      </li>
                      <li>
                        <a href="/contactus/CustomerPrefer/InternationalNumber">Add International Number</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>

      {{-- Sidebar Footer --}}
      <div id="sidebar-footer" class="sidebar-footer" style="display:inline;">
        <li style="list-style:none;color:white;padding:3px;text-align:center;" id="link" class="sidebar-dropdown">
            <a style="color:white;" href="javascript:void(0)">
              <i class="fas fa-cog"></i>
            </a>
            <div style="display:none;" class="sidebar-submenu animated bounce">
              <br>
              <ul>
                  <li>
                      <small>
                        <a style="color:silver;" href="/contactus/settings/ChangeAppName">
                          Change App Name
                        </a>
                      </small>
                    </li>
                <li>
                  <small>
                    <a style="color:silver;" href="/contactus/settings/ChangeHomeAddress">
                      Change Home App Address
                    </a>  
                  </small>
                </li>
                <li>
                    <small>
                      <a style="color:silver;" href="/contactus/settings/ChangeEmailAddress">
                        Change Email App Address
                      </a>
                    </small>
                </li>
                <li>
                  <small>
                    <a style="color:silver;" href="/contactus/settings/ChangePhoneAddress">
                      Change Contact App Address
                    </a>
                  </small>
                </li>
              </ul>
            </div>
          </li>
      </div>
    </nav>
    <div>
        
  <!-- sidebar-content  -->
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
          <nav style="background:silver;margin-left:-50px;position:fixed;width:75%;margin-top:-10px;" class="navbar nav-fixed-top navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
              @if(strlen($app_name["name"]) < 1)
              <a class="navbar-brand" href="http://127.0.0.1:8000/contactus/settings/ChangeAppName"> <i class="fa fa-plus"></i> Add App Name</a>
              @else
                <a class="navbar-brand" href="/{{$index}}">
                   {{$app_name["name"]}}
                </a>
                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="fa fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      <br><br><br><br><br>
      <div class="row" >
        <div class="form-group col-md-12">
          <div id="showContents">
            @yield('content')
          </div>
        </div>
      </div>
      <div id="showView">
      </div>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</body>
</html>
