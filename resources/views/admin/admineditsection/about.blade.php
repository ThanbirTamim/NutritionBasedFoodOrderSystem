@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <div class="container">
            <div class="row">
                @foreach($value as $item)
                    <div class="col-sm-2" >
                        <div class="panel panel-success">
                            <div class="panel-heading">Added by {{$item->adminname}}</div>
                            <div class="panel-body"><img src="{{'/storage/aboutsection/'.$item->photo}}" style="width:100%" class="img-responsive"></div>
                            <div class="panel-footer">
                                {{--start delete part--}}
                                <form class="" action="/aboutsection/{{$item->id}}" method="post">
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
