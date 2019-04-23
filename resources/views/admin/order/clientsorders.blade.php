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
                                <th scope="col">Order ID</th>
                                <th scope="col">No of Food</th>
                                <th scope="col">Food Name</th>
                                <th scope="col">Food Price</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Place Order Time</th>
                            </tr>
                            </thead>
                            @foreach($value as $item)
                                <tbody>
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->numberoffood}}</td>
                                    <td>{{$item->foodname}}</td>
                                    <td>{{$item->foodprice}} tk</td>
                                    <td>{{$item->customername}}</td>
                                    <td>{{$item->customerphone}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->created_at}}</td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
            </div>
        </div><br>

    </div>
@endsection
