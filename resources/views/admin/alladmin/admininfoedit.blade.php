@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <br>
        <center><h2>Update Admin Info</h2></center>
        <div class="container">
            <div class="row">

                <form action="/admininfo2/{{$value->id}}" method="POST">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{$value->name}}" placeholder="name">
                    <label for="price">Email</label>
                    <input type="text" id="email" name="email" value="{{$value->email}}" placeholder="email"><br><br>

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
