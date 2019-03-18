{{-- <script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/bulma.css')}}"> --}}
@extends('layouts.auth')
@section('content')
<table style="margin-top:-10px;" class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Subject</th>
                <th scope="col">Description</th>
                <th scope="col">From</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>
       
            
                @foreach ($emails as $email)
                <tr>
                    <td>
                       <b>{{$email->subject}}</b> 
                    </td>
                    <td>
                        
                        {{$email->description}}
                 <br><br>
                    <small><i>on {{$email->created_at}}</i></small>
                          
                    
                        
                    
                    </td>
                    <td>
                        {{$email->address}}
                    </td>
                    <td> 
                        <form action="/contactus/emailMessages/{{$email->id}}" method="POST">
                        
                            @csrf
                            @method("DELETE")
                            <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">DELETE</button>

                        </form>
                    </td>
                </tr>
                
                @endforeach
                <div class="" style="margin-top:-20px;margin-bottom:10px;">
                    {{$emails->links('pagination.index')}}
                    <br>
                </div>
    
</table>
@endsection