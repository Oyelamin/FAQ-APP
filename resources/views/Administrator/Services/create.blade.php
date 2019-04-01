@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class="animated fadeInDown" style="margin:auto;width:60%;">
    <h1 class="h3">Add Service</h1><hr>
<form  action="/contactus/services" method="post">
    @csrf
    <label for="name" class="label">Service</label>
    <input style="height:90px;" type="text" name="service" class="input">
    
    {{-- <input type="text" name="address" class="input"><br><br> --}}
    <br><br>
    <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Submit</button>
    <br><br><hr>
    <small style="color:silver;">INITS LIMITED</small>
</form>
</div>
@endsection