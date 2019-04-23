@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <br>
        <center><h2>Add New Video Section Photos and Video Link</h2></center>
        <div class="container">
            <div class="row">

                <form action="/videosection" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label for="name">Video Link</label>
                    <input type="text" id="videolink" name="videolink" placeholder="Inter video link..">

                    <label for="file">Thumbnail</label><br>
                    <input type="file" name="file"><br><br>


                    <input type="submit" value="Submit">
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
