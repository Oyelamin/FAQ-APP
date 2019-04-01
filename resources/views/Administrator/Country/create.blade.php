@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class=" animated fadeInDown" style="margin:auto;width:60%;">
        <h1 class="h3">Add Country</h1><hr>
    <form action="/contactus/countries" method="POST">
        @csrf
        
        <label for="" class="label">Country</label>
        <input type="text" class="input" name="country" required>
        <label for="" class="label">ShortCode</label>
        <input maxlength="5" style="height:90px;" class="input" type="text" name="shortCode" id="shortCode" required><br><br>
        <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Done</button>
        <br><hr>
    <small style="color:silver;">INITS LIMITED</small>
    </form>
</div>
@endsection