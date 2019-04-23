@extends('customer.layouts2.app')

@section('content')
    @include('customer.layouts2.sidebar')

    <div class="main">
        <!-- Menu section -->
        <section id="menu" class="parallax-section">
            <div class="container">
                <center><h3>Your Transactions</h3></center>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Food Name</th>
                        <th scope="col">Food Price</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($newvalue as $item)

                    <tr>
                        <td>{{$item->foodname}}</td>
                        <td>{{$item->foodprice}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
            {{--</div>--}}
        </section>

    </div>
@endsection