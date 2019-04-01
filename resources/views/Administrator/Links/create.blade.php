@extends('layouts.auth')
@section('content')


<div class="animated fadeInDown" style="margin:auto;width:60%;">
    <h1 class="h3">Add Link</h1><hr>
<form  action="/contactus/links" method="post">
    @extends('layouts.validation')
    @csrf
    <label for="name" class="label">Name</label>
    <input type="text" name="name" class="input">
    <br>
    <label for="address" class="label">Address</label>
    <input style="height:90px;" class="input" type="text" name="address" class="input"><br><br>

    <button onclick="this.form.submit();this.disabled = true;" class="button is-link">
        Submit
    </button>
    <br><hr>
    <small style="color:silver;">INITS LIMITED</small>
</form>


</div>
@endsection