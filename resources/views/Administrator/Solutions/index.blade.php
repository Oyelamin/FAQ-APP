@extends('layouts.auth')
@section('content')
<table class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Solutions</th>
                <th scope="col">Date</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>
        {{-- <tbody> --}}
           {{-- 1) Try To reload the page and see if the page will work out. 
2) Make sure you didn't login with the old password. 
3) If the problem is not solved contact or hit us a mail. --}}
                @if(count($solutions) > 0)
                    @foreach ($solutions as $solution)
                    <tr>
                        {{-- <td>{{$solution->solution}}</td> --}}
                        <td>
                            <?php echo $solution->solution ?>
                        </td>
                        <td>{{$solution->created_at}}</td>
                        <td> 
                            <form action="/contactus/solutions/{{$solution->id}}" method="post">
                            
                                @csrf
                                @method("DELETE")
                                <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">DELETE</button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        
                        <td><h1 class="h2" style="padding:30px;">No solutions Defined Yet!</h1></td>
                    </tr>
                @endif
                <div class="" style="margin-top:-20px;">
                    {{$solutions->links('pagination.index')}}
                    <br>
                </div>
            
        {{-- </tbody> --}}
</table>
@endsection