
@extends('layouts.app')
@section('content')
@extends('layouts.validation')
    <div class="row">
        <div class="left-view">
            <img class="logo" src="{{asset('img/inits-logo.png')}}">ng<br><br><br>
            <h4 class="h1">Contact Customer Service</h4>
            <small class="small">
                Answer a few questions about the issue you are having and we'll get someone to help.
            </small><br><br>
            
            
            <div class="w3-container">
                <h3 class="h3">
                    1. What can we help you with?
                </h3><br>

                <div class="w3-row">
                    
                
                    @foreach ($services as $service)
                    
                    <a href="javascript:void(0)" onclick="openCity(event, '{{$service->issues}}');">
                    <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">{{$service->issues}}</div>
                    </a>
                
                    @endforeach
                
                </div> <br/>

                <h3 class="h3">
                    
                    2. Tell us more

                </h3>
                <br><br>
        
            
            <div class="values">

                    @foreach ($services as $service)
                   
                    
            <div id="{{$service->issues}}" class="w3-container" style="display:none">
                    
                    <div class="field">
                        <h5  class="h5">Please Make a Selection</h5>
                        <div class="control">
                            <div class="select">

                                    @foreach($service->problems as $pro)
                                   
                                <form name="myform" action="show"  id ="myform" method="get">

                                    @endforeach
                                    
                                <select name="n2" onchange="this.form.submit();">

                                    <option>...</option>

                                    @foreach($service->problems as $pro)
                                    
                                    <option value="{{$pro->id}}">
                                        
                                    <div class="tab">

                                        {{-- <a  href="/contactus/{{$pro->id}}/show"class="tablinks2"> --}}

                                            <a href="javascript:rudrSwitchTab('{{$pro->id}}', '{{$pro->problem_type}}');" id="{{$pro->id}}" class="tabmenu active">{{$pro->problem_type}}</a>
                                           
                                        {{-- </a> --}}
                                    </div>
                        
                                    </option>
                                    @endforeach
                                </select>
                            </form>
                            </div>
                        </div>
                        
                    </div>
                    
                <br><br>
                   <h3 class="h3">

                        3. How would you like to contact us?
                  
                        <div class="select2">
                            
                        </div>
                    </h3><br><br>
                    <button class="button is-success is-medium hvr-bounce-to-right">

                        <a href="/contactus/phone">   Phone</a>

                    </button>

                    <button class=" button is-success is-medium hvr-bounce-to-right"><a href="/contactus/email">  Email </a></button>

                </div>
                
                
                @endforeach
                
             
            </div>
            
            </div>
        </div>

        <div class="right-view">
            <div class="h-show">
                <p style="border-left: none;"><a href="">Help</a> </p>
                <p><a href=""> Sign In </a></p>
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
                        <a href="javascript:void(0)" onclick="showLess()">Less <i class="fas fa-angle-up"></i></a>
                </p>
                <p id="hide"><a href="javascript:void(0)" onclick="showMore()">MORE <i class="fas fa-angle-down"></i></a></p>
            </div>
        </div>

    </div>

@endsection
