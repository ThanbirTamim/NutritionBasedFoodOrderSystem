@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <div class="container">
            <div class="row">
                @foreach($value as $item)
                    <div class="col-sm-2" >
                        <div class="panel panel-success">
                            <div class="panel-heading">Add by {{$item->adminname}}</div>
                            <div class="panel-body"><img src="{{'/storage/foodpic/'.$item->photo}}" style="width:100%" class="img-responsive"></div>
                            <div class="panel-footer">
                                <strong><p>{{$item->name}}</p></strong>
                                <p>{{$item->price}} tk</p>

                                {{--edit part--}}
                                <a href="{{'/data/'.$item->id.'/edit'}}"><input type="button" value="Edit" class="btn btn-primary"></a><br><br>

                                {{--start delete part--}}
                                <form class="" action="/data/{{$item->id}}" method="post">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="Delete">
                                </form>
                                {{--close delete part--}}

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><br>

    </div>
@endsection
