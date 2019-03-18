<br>
<div class="animated fadeInDown">


<h3 class="h3">2. Tell us more</h3>
<div class="select">
    <select id="navs" onchange="this.value;">
        <option value="*..*">*..*</option>
        @foreach ($problems as $problem)
        @foreach($services as $serv)
            <?php 
            
                $s= explode(' ',$serv); 
                $service= $s[0].$s[1];
            ?>
            <option value="content/service2?n2={{$problem['id']}}">
               {{$problem['problem_type']}}
            </option>
        @endforeach
        @endforeach
    </select>



</div>
<div id="second_content">

</div>
    
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('select').on('change', function(){
            var page= this.value;
            $('#second_content').load(page);
            return false;
        });
    });

</script>