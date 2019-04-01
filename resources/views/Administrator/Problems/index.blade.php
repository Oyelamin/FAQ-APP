@extends('layouts.auth')
@section('content')
<table class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">

                
    
                
            <tr>
                <th scope="col">Problem</th>
                <th scope="col">Date</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>
        
           @if(count($problems) > 0)
                @foreach ($problems as $problem)
                <tr>
                    <td>{{$problem->problem_type}}</td>
                    <td>{{$problem->created_at}}</td>
                    <td> 
                        <form action="/contactus/problems/{{$problem->id}}" method="post">
                        
                            @csrf
                            @method("DELETE")
                            <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">DELETE</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td>
                        <h1 class="h3" style="padding:30px;">No Problems Defined Yet!</h1>
                    </td>
                </tr>
            @endif
            <div class="" style="margin-top:-20px;margin-bottom:10px;">
                {{$problems->links('pagination.index')}}
                <br>
            </div>
        
        {{-- </tbody> --}}
</table>
@endsection