@extends('layouts.auth')
@section('content')
@extends('layouts.validation')

<div class="box animated fadeInDown" style="margin:auto;width:60%;">
    <h1 class="h1">Add Link</h1><hr>
<form  action="/contactus/links" method="post">
    @csrf
    <label for="name" class="label">Name</label>
    <input type="text" name="name" class="input">
    <br>
    <label for="address" class="label">Address</label>
    <input type="text" name="address" class="input"><br><br>

    <button onclick="this.form.submit();this.disabled = true;" class="button is-link is-rounded">Submit</button>
</form>


</div>
@endsection