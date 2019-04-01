@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class="animated fadeInDown" style="margin:auto;width:60%;">
        <h1 class="h3">Add Problem</h1><hr>
    <form action="/contactus/problems" method="POST">
        @csrf
        <h5>Please select the service</h5>
        {{-- First we have to select the service to the problem --}}
        <div class="select">
            @if(count($services) > 0)
            <select name="service" id="">
                @foreach ($services as $service)
                    <option value="{{$service->issues}}">{{$service->issues}}</option>
                @endforeach
            </select>
            @else
            <select name="" id="">
                <option value="No Service Defined Yet!">No Service Defined Yet!</option>
            </select>
            @endif
            <br><br>
        </div><br><br>
        <label for="" class="label">Add Problem to the service</label>
        <input style="height:90px;" class="input" type="text" name="problem" id="problem" required>
        <br><br>
        <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Done</button>
        <br>
        <hr>
        <small style="color:silver;">INITS LIMITED</small>
    </form>
</div>
@endsection