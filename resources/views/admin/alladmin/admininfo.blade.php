@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <div class="container">
            <div class="row">

                    <div class="col-sm-12" >
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                </tr>
                            </thead>
                            @foreach($value as $item)
                            <tbody>
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    {{--edit part--}}
                                    {{--<a href="{{'/data/'.$item->id.'/edit'}}"><input type="button" value="Edit" class="btn btn-primary"></a><br><br>--}}

                                    {{--start delete part--}}
                                    {{--<form class="" action="/data/{{$item->id}}" method="post">--}}
                                    {{--{{csrf_field()}}--}}
                                    {{--{{ method_field('DELETE') }}--}}
                                    {{--<input type="submit" value="Delete">--}}
                                    {{--</form>--}}
                                    {{--close delete part--}}
                                    <br>
                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                    </div>

            </div>
        </div><br>

    </div>
@endsection
