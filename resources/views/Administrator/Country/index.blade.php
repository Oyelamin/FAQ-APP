
@extends('layouts.auth')
@section('content')
<table class="table animated FadeInDown ">
        @extends('layouts.validation')
        <thead class="thead-light">
            <tr>
                <th scope="col">Country</th>
                <th scope="col">Shortcode</th>
                <th scope="col">Modify</th>
               
            </tr>
        </thead>
           
                @foreach ($countries as $country)
                    <tr>
                        <td>{{$country->name}}</td>
                        <td>{{$country->shortCode}}</td>
                        <td> 
                            <form action="/contactus/countries/{{$country->id}}" method="post">
                            
                                @csrf
                                @method("DELETE")
                                <button onclick="this.form.submit();this.disabled = true;" class="button is-danger is-small">
                                    DELETE
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
                <div class="" style="margin-top:-20px;">
                    {{$countries->links('pagination.index')}}
                    <br>
                </div>
     
</table>

@endsection