@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class=" animated fadeInDown" style="margin:auto;width:60%;">
    
        <h1 class="h3">Add Toll Free Number</h1><hr>
    <form action="/contactus/CustomerPrefer/AddTollFreeNumber" method="POST">
        @csrf
        <label for="" class="label">Please Provide the Number</label>
        <input  style="height:90px;" class="input" type="text" name="toll_free_number" id="toll_free" required><br><br>
        <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Save Changes</button>
        <br><hr>
    <small style="color:silver;">INITS LIMITED</small>
    </form>
</div>
@endsection