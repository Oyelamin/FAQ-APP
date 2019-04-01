<?php
$app_name= Change::title();
$dateTime= explode(" ",$date);

?>
<body>

    <div class="notification" style="border:2px solid silver;padding:20px;width:80%;border-radius:10px;">

        <div class="cont">

            <h1 style="padding: 10px;">
                
                {{$subject}}    <img style="float:right;width: 190px; height: 50px;" class="logo" src="<?php echo $message->embed($pathToFile); ?>">
            
            </h1><br>
                <br/><br>
                
                    {{$bodyMessage}}
                
            <br>
            <hr>
            <h3>

                {{$replyTo_name}}
               < <small>

                    {{$replyTo_address}}
    
                </small>>

            </h3>


             <br>

            <p style="color:silver;">

                On {{$dateTime[0]}} by {{$dateTime[1]}} you wrote: 

            </p>

            <p>

                <?php echo $body_mess ?>

            </p>
            <br><br><br><br>
            <hr>
            <h4 style="color:silver;">From: {{$app_name->name}}</h4>

        </div>

    </div><hr>
        
</body>

