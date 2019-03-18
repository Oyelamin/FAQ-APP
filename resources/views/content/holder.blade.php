<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Service</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/w3.css')}}">
        <link rel="stylesheet" href="{{asset('css/hover.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/content.css')}}">
        <link rel="shortcut icon" href="{{asset('img/contact.png')}}" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="left-view">
                <img class="logo" src="{{asset('img/inits-logo.png')}}">ng<br><br><br>

                <h4 class="h1">Contact Customer Service</h4>

                <small class="small">

                    Answer a few questions about the issue you are having and we'll get someone to help.

                </small><br><br>
                
                <div class="w3-container">
                    {{-- First Helper --}}
                    <h3 class="h3">

                        1. What can we help you with?

                    </h3><br>
                    <ul id="nav">
                        @if($services)
                        @foreach($services as $service)
                        <?php

                        // $serv=explode(' ' ,$service->id);
                        
?>
                        <li id="links">
                           <a onclick="clearOut()" href="content/service?n1={{$service->id}}">{{$service->issues}}</a>
                        </li>
                        @endforeach
                        @endif
                        
                    </ul>

                    <div class="animated slideInDown" id="first_content">

                    </div>
                    <div style="color: silver;opacity:0.5;" class="fade_content" id="fade_content">
                        <br><h3 class="h3">2. Tell us more</h3>
                        <div class="select">
                            <select style="cursor:not-allowed;" name="" id="">
                                <option value="">*..*</option>
                            </select>
                        </div><br><br>
                    </div>
                    <div class="third_content" style="opacity:0.3;cursor:not-allowed;" id="third_content">
                        <h3 class="h3">

                            3. How would you like to contact us?
    
                        </h3><br><br>
    
                        <button class="button is-success is-medium hvr-bounce-to-right">
    
                            <a href="/contactus/phone">   Phone</a>
    
                        </button>
    
                        <button class=" button is-success is-medium hvr-bounce-to-right">
                            
                            <a href="/contactus/email">  Email </a>
                        
                        </button>
              
                    </div>

                </div>
                
            </div>

            <div class="right-view">

                <div class="h-show">

                    <p style="border-left: none;">
                        
                        <a href="">Help</a>
                    
                    </p>

                    <p>
                        
                        <a href=""> Sign In </a>
                    
                    </p>
                </div><br>
                <div class="search">

                    <input style="width:70%;" type="text" class="input is-rounded" placeholder="Search...">

                </div>

                <div class="section">

                    <h3>

                        Helpful Links

                    </h3><hr>

                    <p>Enroll in an Audible Membership</p><br>

                    <p>Reset Your Password</p><br>

                    <p>Manage Payment Information</p><br>

                    <p>Unknown Charges</p><br>
                    
                    <div id="more" style="display:none;">

                        <p>Change Name, Email Address, or Password</p>
                        <p>Update Email Preferences</p><br>
                        <p>Original Member Benefit</p><br>
                        <p>Cancel my Membership</p><br>
                        <p>Visit the Gift Center</p><br>
                        <p>Visit the Help Center</p><br>
                        <p>Other Contact Information</p><br>

                    </div>

                    <p id="less" style="display: none;">

                        <a href="javascript:void(0)" onclick="showLess()">
                            
                            Less <i class="fas fa-angle-up"></i>
                        
                        </a>

                    </p>
                    
                    <p id="hide">
                        
                        <a href="javascript:void(0)" onclick="showMore()">
                            
                            MORE <i class="fas fa-angle-down"></i>
                        
                        </a>
                    
                    </p>

                </div>

            </div>

        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        // $('#first_content').load('/content');
        $('ul#nav li a').click(function(){
            $('#fade_content').hide();
       
            var page= $(this).attr('href');
            // $(this).setAttr('active');
            // alert(page);
            $('#first_content').load(page).fadeIn();
            
            return false;
        });
        
    });

    function clearOut(){
        document.getElementById('third_content').style.opacity= '4';
        document.getElementById('third_content').style.cursor= 'pointer';
        
    }
</script>
    

 
</body>