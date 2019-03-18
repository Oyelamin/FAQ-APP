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

                <div class="" style="margin-top:-20px;">
                    {{$solutions->links('pagination.index')}}
                    <br>
                </div>
            
        {{-- </tbody> --}}
</table>
@endsection