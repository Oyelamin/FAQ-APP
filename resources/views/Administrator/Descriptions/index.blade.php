{{-- <script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/bulma.css')}}"> --}}
@extends('layouts.auth')
@section('content')
<table class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Descriptions</th>
                <th scope="col">Date</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>
        {{-- <tbody> --}}
           
                @foreach ($descriptions as $description)
                <tr>
                    <td>{{$description->description}}</td>
                    <td>{{$description->created_at}}</td>
                    <td> 
                        <form action="/contactus/descriptions/{{$description->id}}" method="post">
                        
                            @csrf
                            @method("DELETE")
                            <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">DELETE</button>

                        </form>
                    </td>
                </tr>
                @endforeach
                <div style="margin-top:-10px;margin-bottom:0px;">
                    {{$descriptions->links('pagination.index')}}
                    <br>
                </div>
        {{-- </tbody> --}}
</table>

@endsection