@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class="animated fadeInDown" style="margin:auto;width:60%;">
    <h1 class="h3">Re: {{ucwords($subject)}}</h1><hr>
<form  action="/contactus/Emails/reply?id={{$email_id}}" method="POST">
    @csrf
    <label for="name" class="label">Reply</label>
    <textarea style="height:130px; border:none;background:transparent;border-bottom:4px solid white;" type="text" name="reply" class="input"></textarea>
    <br><br>
    <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Submit</button>
    <br><br><hr>
    <small style="color:silver;">INITS LIMITED</small>
</form>
</div>
@endsection