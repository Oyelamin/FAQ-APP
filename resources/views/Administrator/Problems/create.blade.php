@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class="box animated fadeInDown" style="margin:auto;width:60%;">
        <h1 class="h3">Add Problem</h1><hr>
    <form action="/contactus/problems" method="POST">
        @csrf
        <h5>Please select the service</h5>
        {{-- First we have to select the service to the problem --}}
        <div class="select">
            
            <select name="service" id="">
                @foreach ($services as $service)
                    <option value="{{$service->issues}}">{{$service->issues}}</option>
                @endforeach
            </select>
            <br><br>
        </div><br><br>
        <label for="" class="label">Add Problem to the service</label>
        <input class="input" type="text" name="problem" id="problem" required><br><br>
        <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Done</button>
    </form>
</div>
@endsection