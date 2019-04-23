@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.sidebar')

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <table class="table">
                        <thead class="black white-text">
                        <tr  class="bg-primary">
                            <th scope="col">Week</th>
                            <th scope="col">Invest</th>
                            <th scope="col">Cell Cost</th>

                        </tr>
                        </thead>
                        @foreach($values as $item)
                            <tbody>
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->advertise}} tk</td>
                                <td>{{$item->cellcost}} tk</td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <form action="/report" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Input Advertisement Cost</label><br>
                        <input type="text" name="ad" placeholder="">
                        <input type="submit" value="Done">
                    </form>
                </div>
            </div>
        </div><br>
        {{--<h2>Analysis Type er kisu rakbo,,,,,,</h2>--}}
        {{--<h2>Your weekly sell cost can be: {{$newy}}</h2>--}}
    </div>
@endsection
