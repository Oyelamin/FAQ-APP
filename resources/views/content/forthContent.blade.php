<div class="solutions animated fadeInDown">
    <p><b>Do you know?</b></p><br>
    <small>

        @if(!empty($solutions))

            @foreach($solutions as $solution)

            {{-- {{$solution['solution']}} --}}
            <?php echo $solution['solution'];?>
            
            @endforeach
        @else
            Hold on, we are still looking forward to the solution of the problem specified.You can Email us and we'll get intouch with you immediately. <br> Thanks!
        @endif

    </small>
 </div>