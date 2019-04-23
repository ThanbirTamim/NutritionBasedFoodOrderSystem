@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <div class="container">
            <div class="row">
                @foreach($value as $item)
                    <div class="col-sm-6" >
                        <div class="panel panel-success">
                            <div class="panel-heading">Added by {{$item->adminname}}</div>
                            <div class="panel-body"><img src="{{'/storage/videosection/'.$item->photo}}" style="width:100%" class="img-responsive"></div>
                            <div class="panel-footer">
                                <strong><p>Video Link:</p></strong>
                                <p>{{$item->videolink}}</p>
                                {{--edit part--}}
                                <a href="{{'/videosection/'.$item->id.'/edit'}}"><input type="button" value="Edit" class="btn btn-primary"></a><br><br>

<br>
                                {{--start delete part--}}
                                <form class="" action="/videosection/{{$item->id}}" method="post">
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
