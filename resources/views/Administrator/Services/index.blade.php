@extends('layouts.auth')
@section('content')

<table class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Service</th>
                <th scope="col">Date</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>
        {{-- <tbody> --}}
           
                @foreach ($services as $service)
                <tr>
                    <td>{{$service->issues}}</td>
                    <td>{{$service->created_at}}</td>
                    <td> 
                        <form action="/contactus/services/{{$service->id}}" method="post">
                        
                            @csrf
                            @method("DELETE")
                            <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">DELETE</button>

                        </form>
                    </td>
                </tr>
                @endforeach
                <div class="" style="margin-top:-20px;margin-bottom:10px;">
                        {{$services->links('pagination.index')}}
                        <br>
                    </div>
                
            
        {{-- </tbody> --}}
</table>
@endsection