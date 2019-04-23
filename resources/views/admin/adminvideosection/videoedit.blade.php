@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <br>
        <center><h2>Update Video Info</h2></center>
        <div class="container">
            <div class="row">

                <form action="/videosection/{{$value->id}}" method="POST">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <label for="name">Video Link</label>
                    <input type="text" id="videolink" name="videolink" value="{{$value->videolink}}" placeholder="Inter video link..">

                    <label for="file">Thumbnail</label><br>
                    <input type="file" name="file" ><br><br>

                    <input type="submit" value="Submit" class="btn btn-info" >
                </form>

            </div>
        </div>

        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <center><i><h4 style="color:#ff0000;"><br>**{{$error}}** <br></h4></i></center>
            @endforeach
        @endif
    </div>

@endsection
