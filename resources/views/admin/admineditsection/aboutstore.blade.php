@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <br>
        <center><h2>Add New About Section Photos</h2></center>
        <div class="container">
            <div class="row">

                <form action="/aboutsection" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label for="file">Select Image</label><br>
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
