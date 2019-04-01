@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class=" animated fadeInDown" style="margin:auto;width:60%;">
        <h1 class="h3">Add New Address to the Email App Address</h1><hr>
    <form action="/contactus/settings/ChangeEmailAddress" method="POST">
        @csrf
        
        <label for="" class="label">Name</label>
        <input type="text" class="input" name="name" required><br><br>
        <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Save Changes</button>
        <br><hr>
    <small style="color:silver;">INITS LIMITED</small>
    </form>
</div>
@endsection