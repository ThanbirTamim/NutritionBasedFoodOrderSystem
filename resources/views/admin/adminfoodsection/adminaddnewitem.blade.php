@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <br>
        <center><h2>Add New Item</h2></center>
        <div class="container">
            <div class="row">

                <form action="/data" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Food name..">

                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Food price..">

                    <label for="Protein">Protein</label>
                    <input type="text" id="Protein" name="protein" placeholder="Food Protein..">

                    <label for="Fat">Fat</label>
                    <input type="text" id="Fat" name="fat" placeholder="Food Fat..">

                    <label for="Calories">Calories</label>
                    <input type="text" id="Calories" name="calories" placeholder="Food Calories..">

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
