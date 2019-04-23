<!-- Menu section -->
<section id="menu" class="parallax-section">
    <div class="container">
        {{--<div class="row">--}}
        <form action="/order" method="post">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Food Menu</h2>
                    <h4>we have special menus</h4>
                </div>
            </div>

            <div class="row">

                @foreach($value as $item)


                    <div class="col-md-6 col-sm-6">
                        <div class="media wow fadeInUp" data-wow-delay="0.6s">
                            <div class="media-object pull-left">
                                <img style="border-radius: 35px" src="{{'/storage/foodpic/'.$item->photo}}" class="img-responsive" alt="Food Menu">
                                <span class="menu-price" style="border-radius: 35px; font-family: Forte">{{$item->price}} tk</span>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">{{$item->name}}</h3>
                                <p>You Should to test it. It's So much testy</p>

                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" name="order[]" class="styled" type="checkbox" value="{{$item->id}}">
                                    <label for="checkbox8" style="">
                                        select
                                    </label>
                                </div>
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

                                    {{--<button class="btn btn-primary" name="Cart" type="submit" value="Cart" style="font-size:12px">Cart <i class="fa fa-shopping-cart"></i></button>--}}
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach


                {{--<div class="col-md-6 col-sm-6">--}}
                    {{--<div class="media wow fadeInUp" data-wow-delay="0.6s">--}}
                        {{--<div class="media-object pull-left">--}}
                            {{--<img src="images/b5.jpeg" class="img-responsive" alt="Food Menu">--}}
                            {{--<span class="menu-price">100 tk</span>--}}
                        {{--</div>--}}
                        {{--<div class="media-body">--}}
                            {{--<h3 class="media-heading">Burger</h3>--}}
                            {{--<p>You Should to test it. It's So much testy</p>--}}

                            {{--<div class="checkbox checkbox-info checkbox-circle">--}}
                                {{--<input id="checkbox8" class="styled" type="checkbox" >--}}
                                {{--<label for="checkbox8">--}}
                                    {{--select--}}
                                {{--</label>--}}
                            {{--</div>--}}



                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}



            </div>

            @csrf
            <br><br><br>
            <center><input type="submit" name="Order" class="btn btn-success" value="Order"></center>
        </form>

    </div>
    {{--</div>--}}
</section>
