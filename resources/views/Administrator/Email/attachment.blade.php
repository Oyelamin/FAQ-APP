<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<style>
    .full{
        width: 400px;
        
    }
    .full img{
        width:550px;
        height:250px;
        margin:auto;
        border-radius: 10px;
        transition:.8s;
        border:2px solid white;
        box-shadow:4px 4px 40px black;
    }
</style>
    <div id="full" class="full animated fadeInRight">
        <div style="width:80%;" class="container">
            <img style="position:relative;" src="{{ asset('storage/'.$attachment)}}" alt="Attachment">
        </div>
    </div>
<script src="{{asset('js/jquery.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#full').click(function(){
            $('#full').hide('slow');
        });
    });
</script>