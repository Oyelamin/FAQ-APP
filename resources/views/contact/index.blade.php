@extends('layouts.user_app')
@section('content')
    

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

                            <li id="links">
                                <a onclick="clearOut()" href="content/service?n1={{$service->id}}">
                                    
                                    {{$service->issues}}
                                
                                </a>
                            </li>

                        @endforeach
                        @endif
                        <br><br>
                        
                    </ul>
                    {{-- <div class="box" style="width:50%;">
                        {{$services->links()}}
                    </div> --}}
                    

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
    
                        <button onclick="this.form.submit();this.disabled = true;" class="button is-medium hvr-bounce-to-right">
    
                            <a href="/contactus/phone">   Phone</a>
    
                        </button>
    
                        <button onclick="this.form.submit();this.disabled = true;" class=" button is-medium hvr-bounce-to-right">
                            
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
                    @foreach ($links as $link)
                        <p><a href="{{$link->address}}">{{$link->name}}</a></p><br>
                    @endforeach
                    
                    
                

                </div>

            </div>

        </div>
        
    </div>

<script src="{{asset('js/jquery.js')}}"></script>
<script>
    $(document).ready(function(){
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
    

 
@endsection