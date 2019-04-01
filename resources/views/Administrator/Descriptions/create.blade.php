{{-- <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.css')}}"> --}}
@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class=" animated fadeInDown" style="margin:auto;width:60%;">
    
        <h1 class="h3">Add Description</h1><hr>
    <form action="/contactus/descriptions" method="POST">
        @csrf
        <h5>Please select the problem</h5>
        {{-- First we have to select the service to the problem --}}
        <div class="select">
            @if(count($problems) > 0)
            <select name="problem" id="">
                @foreach ($problems as $problem)
                    <option value="{{$problem->problem_type}}">{{$problem->problem_type}}</option>
                @endforeach
            </select>
            @else
            <select name="" id="">
                <option value="No Problem Defined Yet!">No Problem is Defined Yet!</option>
            </select>
            @endif
            <br><br>
        </div><br><br>
        <label for="" class="label">Add descriptions to the problem</label>
        <input  style="height:90px;" class="input" type="text" name="description" id="description" required><br><br>
        <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Done</button>
        <br><hr>
    <small style="color:silver;">INITS LIMITED</small>
    </form>
</div>
@endsection