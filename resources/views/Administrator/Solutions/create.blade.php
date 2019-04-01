@extends('layouts.auth')
@section('content')
@extends('layouts.validation')
<div class="animated fadeInDown" style="margin:auto;width:60%;">
        <h1 class="h3">Add Solution</h1><hr>
    <form action="/contactus/solutions" method="POST">
        @csrf
        <h5>Please select the description</h5>
        {{-- First we have to select the service to the problem --}}
        <div class="select">
            @if(count($descriptions) > 0)
            <select name="description" id="">
                @foreach ($descriptions as $description)
                    <option value="{{$description->description}}">{{$description->description}}</option>
                @endforeach
            </select>
            @else
            <select name="" id="">
                <option value="No Description Defined Yet!">No Description is Defined Yet!</option>
            </select>
            @endif
            <br><br>
        </div><br><br>
        <label for="" class="label">Add solution to the description</label>
        <textarea onclick="sendMessage()" class="textarea" type="text" name="solution" id="solution" required></textarea>
        <br>
        <button onclick="this.form.submit();this.disabled = true;" class="button is-link">Done</button>
        <br><hr>
        <small style="color:silver;">INITS LIMITED</small>
    </form>
</div>
<script>
    function sendMessage(){
        alert("use <br/> to make new line.Thanks!");
    }
</script>
@endsection