@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class="box animated fadeInDown" style="margin:auto;width:60%;">
    <h1 class="h1">Add Service</h1><hr>
<form  action="/contactus/services" method="post">
    @csrf
    <label for="name" class="label">Service</label>
    <input type="text" name="service" class="input">
    
    {{-- <input type="text" name="address" class="input"><br><br> --}}
    <br><br>
    <button onclick="this.form.submit();this.disabled = true;" class="button is-link is-rounded">Submit</button>
</form>
</div>
@endsection