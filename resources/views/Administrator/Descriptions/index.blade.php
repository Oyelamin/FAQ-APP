
@extends('layouts.auth')
@section('content')
<table class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Descriptions</th>
                <th scope="col">Date</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>
        {{-- <tbody> --}}
           @if(count($descriptions) > 0)
                @foreach ($descriptions as $description)
                <tr>
                    <td>{{$description->description}}</td>
                    <td>{{$description->created_at}}</td>
                    <td> 
                        <form action="/contactus/descriptions/{{$description->id}}" method="post">
                        
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
                        <h1 class="h3" style="padding:30px;">No Description Defined Yet!</h1>
                    </td>
                </tr>
            @endif
                <div style="margin-top:-10px;margin-bottom:0px;">
                    {{$descriptions->links('pagination.index')}}
                    <br>
                </div>
        {{-- </tbody> --}}
</table>

@endsection