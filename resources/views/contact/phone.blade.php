<?php
$index= Change::index();  //Address to the first view page
$phone= Change::phone();  //Address to the phone call Page
?>
@extends('layouts.user_app')
@section('content')
@extends('layouts.validation')
    <div class="row">
        <div class="left-view">
            <img class="logo" src="{{asset('img/inits-logo.png')}}">ng<br><br><br>

            <h4 class="h1">Talk with Customer Service</h4>

            <small class="small">

                Enter your number and we'll call you.

            </small><br><br>
            <form action="/{{$index}}/{{$phone}}" method="post">
                @csrf
                <label class="label" for="">Country</label>
                <div style="width: 70%;" class="select">
                    @if(count($countries) > 0)
                    <select required name="country" id="">
                        @foreach($countries as $country)
                            <option onsubmit="this.form.submit" onchange="showOthers" value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                        <option onsubmit="this.form.submit" value="Other">Other</option>
                    </select>
                    @else
                        <select name="" id="">
                            <option value="">No country is available yet!</option>
                        </select>
                    @endif
                </div><br><br>
                <small style="display:none;" id="top-data" class="top-data animated bounceInRight">
                    Enter your extension here. You can type a comma (,) to add a pause and designate with your country code.
                </small>
                <label class="label" for="">
                    Your Number
                </label>
                (<input required name="first_digit" class="input number_input" style="width:3.2em; margin: 0px 4px;" type="text" maxlength="3">)
                <input required name="second_digit" class="input number_input" style="width:3.2em; margin:0px 4px;" type="text" maxlength="3"> -
                <input required name="third_digit" class="input number_input" style="width:4em; margin:0px 4px;" type="text" maxlength="4">
                <span style="position: absolute;margin-top:-30px;font-weight: bold;margin-left:5px;">Ext.</span>
                <input name="extra" value="" id="ext" onfocus="showTopData()" class="input ext" onkeyup="showColorBox()" style="width:4em; margin:0px 4px;" type="tel">
                <div class="animated fadeInDown ext-info" id="ext-info" style="display:none;">
                    {{-- <h6><b>  Will a receptionist answer this call?</b></h6> --}}
                    <h6><b> I believe a receptionist will answer this call!!</b></h6>
                    {{-- <input type="radio" name="" id="" class="radio"> No <input type="radio" class="radio"> Yes --}}
                </div>
                <br><br>
                
                <button onclick="this.form.submit();this.disabled = true;" style="margin:0px 4px;" class="button is-success">Call us now</button>
                {{-- <button onclick="this.form.submit();this.disabled = true;" style="margin:0px 4px;" class="button is-link is-outlined">Call me in 5 Minutes</button> --}}
            </form>
            <br><br>
            <span>
                <a href="/{{$homePage['name']}}" style="color: green;font-size:15px;">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </span>
            <div class="optional">
                <a style="text-decoration:none;" href="javascript:void(0)" onclick="showOpt()" id="showOpt">
                    <label for="" class="label" style="cursor:pointer;margin-left:5px;">
                    
                        <i class="fas fa-angle-right"></i> If you prefer, you can also call our general help number
                    
                    </label>
                </a>
                <a href="javascript:void(0)" id="hideOpt" onclick="hideOpt()" style="text-decoration:none; display: none;">
                    <label for="" class="label" style="cursor:pointer;margin-left:5px;">
                    
                        <i class="fas fa-angle-down"></i> If you prefer, you can also call our general help number
            
                    </label>
                </a>
                
                <div style="display:none;" id="opt-content" class="content">
                    <div class="sec">
                        <p>
                        
                            If you prefer to call the general help line instead, please note you will need to answer a series of questions to verify your identity.

                        </p>
                    </div>
                     <label class="label" for="" style="font-size:13px;">Toll free</label>
                    <div class="sec">
                        
                        <p style="margin-bottom:5px;">{{$customer_p_number['number']}}</p>

                    </div>
                    <label class="label" for="" style="font-size:13px;">International</label>
                    <div class="sec">
                        
                        <p style="margin-bottom:5px;" >{{$customer_p_i_number['number']}} -- charges may apply.</p>

                    </div>
                    <p style="font-size:13px;"> <b> Ayuda en Español</b> (Disponible 9AM - 9PM) </p>
                    <div class="sec">
                        <i>  <p style="margin-bottom:5px;margin-top:-18px;">Llama gratis : {{$customer_p_number['number']}} </p>
                            <p style="margin-top:-5px;">Internacional : {{$customer_p_i_number['number']}} </p>
                     
                        </i>
                    </div>
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

            </div><br>
            <div style="font-size:12px;" class="top-section">
                <h5>Ayuda en Español</h5>
                <hr>
                <p><b>Disponible: </b> 8am-12am ET</p>
                <p><b>Llame gratis:  </b>(888) 283-0332</p>
                <p><b>Internacional: </b>(206) 922-0156</p>
            </div>

            <div style="border-top-right-radius:0px;border-top-left-radius:0px;" class="section">

                <h3>

                    Helpful Links

                </h3><hr>

                @if(count($links) > 0)
                @foreach ($links as $link)
                    <p><a href="{{$link->address}}">{{$link->name}}</a></p><br>
                @endforeach
                @else
                    <h4>No Link is Available</h4>
                @endif
            </div>

        </div>

    </div>

<script>
function showColorBox() {
var x = document.getElementById("ext");  

var myDiv = document.getElementById("ext-info");
if (x.value != "")
{
    myDiv.style.display = "block";
} else {
    myDiv.style.display = "none";
}    
}
function showTopData(){

    document.getElementById('top-data').style.display='block';

}


$(document).ready(function() {
  $(".ext").focus(function() {
      $('.top-data').show('slow');       
      //return false;
    });
  
 $('.ext').blur(function(){
    if( !$(this).val() ) {

        $('.top-data').hide('slow');

    }
});

});//end

</script>
    
@endsection
