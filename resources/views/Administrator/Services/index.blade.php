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
            @if(count($services) > 0)
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
            @else
            <tr>
                <td>
                    <h1 class="h3" style="padding:30px;">No Services Defined Yet!</h1>
                </td>
            </tr>
            @endif
                <div class="" style="margin-top:-20px;margin-bottom:10px;">
                        {{$services->links('pagination.index')}}
                        <br>
                    </div>
                
            
        {{-- </tbody> --}}
</table>
@endsection