@if (count($errors) > 0)
    <div id="verify" style=" text-align:center;width:50%;margin:auto;margin-bottom:-40px;" class="animated bounceInDown notification is-danger">
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    </div><br><br>
   
@endif

@if (session('success'))
    <div id="verify" style="text-align:center;width:50%;margin:auto;margin-bottom:-40px;" class="notification is-success">
        <div>{{session('success')}}</div>
    </div><br><br>

    
@endif

@if (session('error'))
    <div id="verify" style="text-align:center;width:50%;margin:auto;" class="box notification is-danger">
        <div>{{session('error')}}</div>
    </div><br><br>

    
@endif
