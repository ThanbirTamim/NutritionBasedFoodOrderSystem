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
                                <th>id</th>
                                <th>namee</th>
                                <th>email</th>
                                <th></th>
                            </tr>
                       </thead>
                        <tbody>
                        @foreach($value as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    {{--edit part--}}
                                    <a href="{{'/admininfo2/'.$item->id.'/edit'}}"><input type="button" value="Edit" class="btn btn-primary" onclick="aleart()"></a><br><br>

                                    {{--start delete part--}}
                                    <form class="" action="/admininfo2/{{$item->id}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete" onclick="aleart()">
                                    </form>
                                    {{--close delete part--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div><br>

    </div>
@endsection
<script>
    function aleart() {
        var r = confirm("Press a button!");
    }
</script>
