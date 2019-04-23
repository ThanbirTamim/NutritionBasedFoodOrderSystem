<!DOCTYPE html>
<html lang="en">
<head>
<style>
    img{
        border-radius: 35px;
    }
</style>
@include('customer.layouts.head')

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section loading sign ekn e kaj korbe jokon scrool korbo-->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section home-bg-slideshow2 -->
<section id="home" class="parallax-section">
    <div class="gradient-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-12" >
                <h1 class="wow fadeInDown" data-wow-delay="0.6s">Food House</h1>
                <h3 class="wow fadeInDown" data-wow-delay="1.0s" style="color:white">Nutrition Based Food Order System</h3>
                <a href="#feature" class="wow fadeInDown btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Browse Now</a><br>
            </div>

        </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Food House</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top" class="smoothScroll">Home</a></li>
                <li><a href="#feature" class="smoothScroll">Features</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#menu" class="smoothScroll">Menu</a></li>
                <li><a href="#gallery" class="smoothScroll">Gallery</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
                <li><a href="#team" class="smoothScroll">Team</a></li>
                <li><a style="font-size: small; color: white" href="/customer" class="smoothScroll btn btn-primary">Login</a></li>
            </ul>
        </div>

    </div>
</div>


<!-- Feature section -->
<section id="feature" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                    <h2>Why Choose Us?</h2>
                    <h4>Food House @ Nutrition Based Food Order System</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-cutlery"></i></span>
                    </div>
                    <h3>SPECIAL DISH</h3>
                    <p>Whole Wheat Pasta in Mushroom Sauce, Aloo Tamatar Jhol.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-coffee"></i></span>
                    </div>
                    <h3>BLACK COFFEE</h3>
                    <p>Black Coffee, Milk + Black Coffee, Honey Coffee.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-bell-o"></i></span>
                    </div>
                    <h3>DINNER</h3>
                    <p>Honey Baked Chicken, Burgers and homemade buns</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- About section -->
<section id="about" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Our Story</h2>
                    <h4>Your Dining Restaurant since 2018</h4>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="wow fadeInUp col-md-3 col-sm-5" data-wow-delay="0.3s">
                <img style="border-radius: 35px" src="images/about-img.jpg" class="img-responsive" alt="About">
                <h3>We take food order</h3>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

                <!-- flexslider -->
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($value1 as $item1)
                            <li>
                                <img style="border-radius: 35px" src="{{'/storage/aboutsection/'.$item1->photo}}" class="img-responsive" alt="Flexslider" height="200" width="300">
                            </li>
                        @endforeach
                        {{--<li>--}}
                            {{--<img src="images/slide-img2.jpg" alt="Flexslider">--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<img src="images/slide-img3.jpg" alt="Flexslider">--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<img src="images/b5.jpeg" alt="Flexslider">--}}
                        {{--</li>--}}

                    </ul>
                </div>

                <p>Food House Restaurent will serve all types of food which you want</p>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="0.9s">
                <h2>Fine Dining</h2>
                <p>Food House is one of the beautiful restaurent in Dhaka</p>
                <p>Our speical food is Beef Vindaloo. Butter Chicken. Carrot Halwa. Chaat Papri. Cham-Cham.</p>
            </div>

        </div>
    </div>
</section>


@include('customer.layouts.video')

@include('customer.layouts.menu')

@include('customer.layouts.gallery')

@include('customer.layouts.contact')

@include('customer.layouts.team')

@include('customer.layouts.footer')

</body>



<script>
    /* home slideshow section
-----------------------------------------------*/
    $(function(){
        var simg1 = '{!! $simg1 !!}';
        var simg2 = '{!! $simg2 !!}';
        var simg3 = '{!! $simg3 !!}';
        jQuery(document).ready(function() {
            $('#home').backstretch([
                simg1,
                simg2,
                simg3,
            ],  {duration: 2000, fade: 750});
        });
    });



    {{--$(function(){--}}
        {{--jQuery(document).ready(function() {--}}
            {{--$('#home').backstretch([--}}
                {{--"images/home-bg-slideshow2.jpg",--}}
                {{--"images/home-bg-slideshow2.jpg",--}}
                {{--"images/home-bg-slideshow3.jpg",--}}
            {{--],  {duration: 2000, fade: 750});--}}
        {{--});--}}
    {{--});--}}
</script>
</html>
