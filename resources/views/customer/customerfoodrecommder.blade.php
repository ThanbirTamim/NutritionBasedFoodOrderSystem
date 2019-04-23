@extends('customer.layouts2.app')

@section('content')
    @include('customer.layouts2.sidebar')

    <div class="main">
        <!-- Menu section -->
        <section id="menu" class="parallax-section">
            <div class="container">
                {{--<div class="row">--}}
                <form action="/customer/order" method="post" enctype="multipart/form-data">

                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                        <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                            <div id="root">
                                <h2>@{{name}}</h2>
                            </div>


                        </div>
                    </div>

                    <div class="row">

                        @foreach($finfo as $item)


                            <div class="col-md-6 col-sm-6">
                                <div class="media wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="media-object pull-left">
                                        <img style="border-radius: 35px" src="{{'/storage/foodpic/'.$item['photo']}}" class="img-responsive" alt="Food Menu">
                                        <span class="menu-price" style="border-radius: 35px; font-family: Forte">{{$item['price']}} tk</span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading">{{$item['name']}}</h3>
                                        <p>You Should to test it. It's So much testy</p>

                                        <input id="checkbox8" name="order[]" class="styled" type="checkbox" value="{{$item['id']}}">  select<br>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Quantity</label>
                                            <select class="form-control" name="quantity[]" id="exampleFormControlSelect1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <br>

                                            <button class="btn btn-primary" name="Cart" type="submit" value="{{$item['id']}}" style="font-size:12px">Cart <i class="fa fa-shopping-cart"></i></button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        @endforeach



                    </div>

                    @csrf
                    <br><br><br>
                    <center><input type="submit" name="Order" class="btn btn-success" value="Order"></center>
                </form>

            </div>
            {{--</div>--}}





            <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
            <script type="text/javascript">
                var app = new Vue({
                    el: '#root',
                    data: {
                        name: "Our AI agent recommend you these burger:"
                    }
                })

            </script>
        </section>

    </div>


@endsection
