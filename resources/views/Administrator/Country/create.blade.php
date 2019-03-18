{{-- <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.css')}}"> --}}
@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class="box animated fadeInDown" style="margin:auto;width:60%;">
        <h1 class="h5">Add Country</h1><hr>
    <form action="/contactus/countries" method="POST">
        @csrf
        <label for="" class="label">Country</label>
        <input maxlength="5" type="text" class="input" name="country" required>
        <label for="" class="label">ShortCode</label>
        <input class="input" type="text" name="shortCode" id="shortCode" required><br><br>
        <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Done</button>
    </form>
</div>
@endsection