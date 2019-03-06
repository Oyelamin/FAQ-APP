
@extends('layouts.app')
@section('content')
@extends('layouts.validation')
    <div class="row">
        <div class="left-view">
            <img class="logo" src="{{asset('img/inits-logo.png')}}">ng<br><br><br>
            <h4 class="h1">Email a Question</h4><br>
            <p><b>To:</b></p>
            <small style="font-size:14px;" class="small">
                Customer Service
            </small><br><br>
            <form action="/contactus/email/send" method="post" enctype="multipart/form-data">
                @csrf
                <label for="email" class="label">Email: </label>
                <input name="fro" style="width: 80%;" type="text" class="input" required>
                <br><br>
                <p style="width: 80%;">
                    <b>
                        Note: If you are contacting us about your ACX account and it is not the
                         same as your Audible.com account, please sign out, then enter your ACX account 
                         email in the above box. 
                    </b>
                </p><br><br>
                <label for="email" class="label">Subject: </label>
                <input name="subject" style="width:80%;" type="text" class="input" required><br><br>
                <p style="margin-bottom:-10px;"><b>
                    Please describe the problem you're having and how we can help:
                </b></p><br>
                <small style="font-size:14px;" class="small">
                    
                        If your question is related to an audiobook or listening device, 
                        please include the name of the book or device you're experiencing trouble with. 
                        This will make it easier for us to help solve your problem.
    
                    </small><br>
                <textarea style="width: 70px;" name="message" class="textarea" required></textarea><br>
                {!! Form::file('a_file') !!} <br><br>
                <button class="hvr-bounce-to-right button is-medium is-success">Send e-mail</button>
            </form>
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