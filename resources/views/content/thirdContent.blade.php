<br>
<div class="animated fadeInDown">
<h5>Please make a selection</h5>
<div class="select">

   <select name="" id="nav3" onchange="this.value;">
        <option value="*...*">*...*</option>
        @foreach ($descriptions as $description)
  
            <option value="content/service3?n3={{$description['id']}}">{{$description['description']}}</option>

        @endforeach
 
    </select>
    
</div>
<div id="third_content" class="animated slideInDown">

</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('select').on('change', function(){

            var page= this.value;

            $('#third_content').load(page);
            
            return false;
        });
    });

</script>