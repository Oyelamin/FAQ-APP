<?php
    
$count_caller= Change::callers_count_number();
$count_email= Change::email_count_number();
?>

@extends('layouts.auth')
@section('content')

<br><br>
<div class="cont box animated fadeInDown" style="width:100%;">
    <div class="left-content">
        <h3 style="border:1px solid silver;" class="h2">
                <i class="fas fa-envelope-open"></i>
        </h3><br><br>
        <h1>
            <span>No.</span>
            0{{$count_email}}
        </h1>
    </div>
    <div class="right-content">
        <h3 class="h2">
                <i class="fas fa-phone"></i>
        </h3><br><br>
        <h1 style="border:2px solid white;">
            <span>No.</span>
            0{{$count_caller}}
        </h1>

    </div>
 </div>
<style>
    .cont{
        display:grid;
        grid-template-columns: auto auto;
        padding:0px;
        text-align:center;
        /* box-shadow:4px 1px 20px black; */
    }
    .right-content{
        color:white;
        padding:20px;
        background:silver;
    }
    h1 span{
        font-size:20px;
        /* margin-bottom:80px; */
    }
    .h2{
        font-size:55px;
        border:1px solid white;
        border-radius:80px;
        width:20%;
        padding:14px;

    }
    h1{
        border-radius:6px;
        margin:auto;
        border:2px solid silver;
        width:30%;
        text-align:center;
        padding:30px;
        font-size:70px;
    }
    .left-content{
        padding:20px;
        border:2px solid silver;
        color:silver;
    }
</style>
@endsection