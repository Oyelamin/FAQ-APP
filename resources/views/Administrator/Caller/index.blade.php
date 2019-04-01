{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
{{-- <link rel="stylesheet" href="{{asset('css/animate.css')}}"> --}}
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

@extends('layouts.auth')
@section('content')
    

@if(count($callers) > 0)
    <table class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Country</th>
                <th scope="col">Phone</th>
                <th scope="col">Date</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>

        @if(count($callers) > 0)
        @foreach ($callers as $caller)
            <tr>
                <td>{{$caller['country']}}</td>
                <td>{{$caller['phone']}}</td>
                <td>{{$caller['created_at']}}</td>
                <td> 
                    <form action="/contactus/callers/{{$caller['id']}}" method="post">
                    
                        @csrf
                        @method("DELETE")
                        <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">
                            DELETE
                        </button>

                    </form>
                </td>
            </tr>
        @endforeach
        @else
        <tr>
            <td>
                <h1 class="h3" style="padding:30px;">No Callers Defined Yet!</h1>
            </td>
        </tr>
        @endif
        <br><br>
        <div class="" style="margin-top:-70px;margin-bottom:10px;">
            {{$callers->links('pagination.index')}}
            <br>
        </div>
             

    </table>
@else
<div class="notification">
    <h1 class="h1" style="margin:auto;text-align:center;">No Callers Yet!</h1>
</div>

@endif

@endsection