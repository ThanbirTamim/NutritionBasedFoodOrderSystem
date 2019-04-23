@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <br>
        <center><h2>Update Food Info</h2></center>
        <div class="container">
            <div class="row">

                <form action="/data/{{$value->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{$value->name}}" placeholder="Food name">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" value="{{$value->price}}" placeholder="address"><br><br>

                    <label for="file">Select Image</label><br>
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
