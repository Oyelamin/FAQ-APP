@extends('layouts.auth')
@section('content')
<table class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Link(Name)</th>
                <th scope="col">Address(URL)</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>
        {{-- <tbody> --}}
           
                @foreach ($links as $link)
                <tr>
                    <td>{{$link->name}}</td>
                    <td>{{$link->address}}</td>
                    <td> 
                        <form action="/contactus/links/{{$link->id}}" method="post">
                        
                            @csrf
                            @method("DELETE")
                            <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">DELETE</button>

                        </form>
                    </td>
                </tr>
                @endforeach
                <div class="" style="margin-top:-10px;">
                        {{$links->links('pagination.index')}}
                        <br>
                    </div>
            
        {{-- </tbody> --}}
</table>
@endsection