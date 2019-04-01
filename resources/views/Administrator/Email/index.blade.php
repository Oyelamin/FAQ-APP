
@extends('layouts.auth')
@section('content')

<div class="row">
    <div id="content">

    </div>
    <table style="margin-top:-10px;" class="table animated FadeInDown ">
 
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Subject</th>
                <th scope="col">Description</th>
                <th scope="col">From</th>
                <th scope="col">Modify</th>
                @foreach ($emails as $email)
                @if($email->attachment !== "No Attachments Found")
                <th scope="col"></th>
                @endif
                @endforeach
               
            </tr>
        </thead>
       
        @if(count($emails) > 0)
            @foreach ($emails as $email)
                <tr id="emails">
                    
                    <td style="width:90px;">
                            <b>{{$email->subject}}</b> 
                    </td>
                    <td id="attach">
                        {{$email->description}}
                        <br><br>
                        <small><i>Sent on {{$email->created_at}}</i> </small>
                        <i class="fa fa-clipboard"></i>
                        @if($email->attachment !== "No Attachments Found")
                        <a href="/contactus/Emails/attachment?id={{$email->id}}">
                            <i class="fa fa-paperclip"></i>
                        </a>
                        @endif
                    </td>
                    <td>
                        {{$email->address}}
                    </td>
                    <td>
                        <form action="/contactus/Emails/{{$email->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">DELETE</button>
                        </form>
                        <a style="padding:5px;" href="/contactus/Emails/reply?id={{$email->id}}">
                            <button class="button is-link is-outlined is-small">Reply</button>
                        </a><br><br>
                        <div style="background:white;height:10px;padding:0;" class="box"></div>
                    </td>
                    @if($email->attachment !== "No Attachments Found")
                   
                    @endif
                </tr>
                
            @endforeach
        @else
        <tr>
            <td>
                <h1 class="h3" style="padding:30px;">No Email Recieved Yet!</h1>
            </td>
        </tr>
        @endif
        <div class="" style="margin-top:-20px;margin-bottom:10px;">
            {{$emails->links('pagination.index')}}
            <br>
        </div>
    </table>
</div>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script>
        $(document).ready(function(){
    $('table tr#emails td#attach a').click(function(){
        var page= $(this).attr('href');
        $('#content').load(page).fadeIn();
        return false;
    });
    
});
    </script>
@endsection
