
@extends('layouts.user_app')
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
                <input name="mailAddress" style="width: 80%;" type="text" class="input" required>
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
                <div id="attachment" class="animated bounceInLeft" style="display:none;">
                        {{-- {!! Form::file('a_file') !!} --}}
                    <div class="input-group control-group increment">
                        <div class="form-control">
                             {!! Form::file('a_file[]') !!}
                        </div>
                           
                        <div class="input-group-btn">
                            <button class="btn btn-success"  style="font-weight:bold;" type="button"><i class="fa fa-plus"></i>Add</button>
                        </div>
                    </div>
                    <div class="clone hide" style="display:none;">
                        <div class="control-group input-group" style="margin-top:10px">
                            <div class="form-control">
                                {!! Form::file('a_file[]') !!}
                            </div>
                            <div class="input-group-btn">
                                <button class="btn btn-danger"  style="font-weight:bold;" type="button"><i class="fa fa-minus"></i>Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a id="attach-fetcher" href="javascript:void(0)" onclick="showAttachment()">Add Screenshots</a>
                 <br><hr>
                <button onclick="this.form.submit();this.disabled= true;" style="width:100%;" class="hvr-bounce-to-right button is-medium is-success">Send e-mail</button>
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
    
    <script type="text/javascript">

        $(document).ready(function() {
    
          $(".btn-success").click(function(){ 
              var html = $(".clone").html();
              $(".increment").after(html);
          });
    
          $("body").on("click",".btn-danger",function(){ 
              $(this).parents(".control-group").remove();
          });
    
        });
    
    </script>

@endsection