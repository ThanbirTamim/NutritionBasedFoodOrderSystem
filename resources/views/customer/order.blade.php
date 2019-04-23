<!doctype html>
<html lang="en">
<head>
    @include('customer.layouts.head')
</head>
<body>
<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Daffodil Food House</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" class="smoothScroll">Home</a></li>
            </ul>
        </div>

    </div>
</div>

{{--@foreach($val as $item)--}}


{{--@endforeach--}}

<div class="container">
    <div class="row">
        <div class="col-md-2 ">
            @foreach($nutrition as $value)
                <center><h4><b><?php echo $value['name']; ?></b></h4></center>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nutrition</th>
                        <th scope="col">Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>protein</td>
                        <td><?php echo $value['protein']; ?>%</td>
                    </tr>
                    <tr>
                        <td>calories</td>
                        <td><?php echo $value['calories']; ?>%</td>
                    </tr>

                    <tr>
                        <td>Fat</td>
                        <td><?php echo $value['fat']; ?>%</td>
                    </tr>
                    </tbody>
                </table>
                <br><br>
            @endforeach
        </div>
        <div class="col-md-5 col-md-offset-1">
            <form action="/ordertaken" method="post" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Number of Food</label>
                    <input readonly type="text" class="form-control" name="numberoffood" value="{{$numberOfFood}}" placeholder="" >
                    {{--//readonly er kaj ta holo same to same disabled....2 tar kaj e same--}}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Food</label>
                    <input readonly type="text" class="form-control" name="foodname" value="{{$name}}" placeholder="" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Total Price</label>
                    <input readonly type="text" class="form-control" name="foodprice" value="{{$price}}" placeholder="" >
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Your Name</label>
                    <input type="text" name="customername" class="form-control" placeholder="your name.." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Your Phone</label>
                    <input type="text" name="customerphone" class="form-control" placeholder="your phone.." required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="5" placeholder="Enter your address" required></textarea>
                </div>

                <input type="submit" class="btn btn-success" value="Confirm Order" onclick="myFunction()"><br>
            </form>
        </div>
        {{--<div class="col-md-3 col-md-offset-1">--}}
            {{--<center><h4>Overal Nutrition</h4></center>--}}
            {{--<table class="table">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th scope="col">Nutrition</th>--}}
                    {{--<th scope="col">Quantity</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<td>protein</td>--}}
                    {{--<td id="totalprotein">{{$totalprotein}}%</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td >calories</td>--}}
                    {{--<td id="totalcalories">{{$totalcalories}}%</td>--}}
                {{--</tr>--}}

                {{--<tr>--}}
                    {{--<td>Fat</td>--}}
                    {{--<td id="totalfat">{{$totalfat}}%</td>--}}
                {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}

            {{--<br><br>--}}

            {{--<center><h4>BMI quantity</h4></center>--}}
            {{--<table class="table">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th scope="col">BMI Rate</th>--}}
                    {{--<th scope="col">Risk</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<td>0-19</td>--}}
                    {{--<td>Under Weight</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>20-25</td>--}}
                    {{--<td>Normal Weight</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>25-30</td>--}}
                    {{--<td>Over Weight</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>30-40</td>--}}
                    {{--<td>Obesity</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>40-100</td>--}}
                    {{--<td>Morbid Obesity</td>--}}
                {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}

            {{--<br> <br>--}}
            {{--<div>--}}
                {{--<input class="btn btn-danger" type="button" value="BMI Calculate" onclick="showbmi()"> <br>--}}
            {{--</div>--}}
            {{--<div id="bmi" style="display: none">--}}
                {{--<br>--}}
                {{--<input class="form-control" id="heightfeet" type="text" name="heightfeet" placeholder="height in feet">--}}
                {{--<input class="form-control" id="heightinch" type="text" name="heightinch" placeholder="and inch"><br>--}}
                {{--<input class="form-control" id="weight" type="text" name="weight" placeholder="weight in kg"><br>--}}
                {{--<input class="btn btn-primary" type="button" value="submit" onclick="calculate()"><br><br>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<p id="x"></p>--}}
            {{--<p id="y"></p>--}}
            {{--<p id="z"></p>--}}
        {{--</div>--}}
    </div>

</div>


@include('customer.layouts.footer')
</body>

<script>
    function showbmi() {
        document.getElementById('bmi').style = "display: block";
    }
    function calculate() {
        var heightfeet = parseInt(document.getElementById("heightfeet").value);
        var heightinch = parseInt(document.getElementById("heightinch").value);
        var height = (((heightfeet*12)+heightinch)*2.54)/100;
        var weight = parseInt(document.getElementById("weight").value);
        var calculation = Math.round(weight/(height*height));
        // document.getElementById("x").innerHTML = document.write("\n\n");
        document.getElementById("x").innerHTML = "Your BMI:  " + calculation;
        document.getElementById('bmi').style = "display: none";


        if(calculation <= 19){
            document.getElementById("y").innerHTML = "Sir, You can eat your foods easily. Cause you are Under Weight";
        }
        else if (calculation <= 25){
            document.getElementById("y").innerHTML = "Sir, You can eat your foods easily but be careful cause junk food is harmful but you are Normal Weight";
        }
        else if (calculation <= 30){
            document.getElementById("y").innerHTML = "Sir, You can eat your foods a bite and be careful about your body, Cause you are Over Weight and do cardiovascular exercise for 10 min for eat it.";
        }
        else if (calculation <= 40){
            document.getElementById("y").innerHTML = "Sir, You can eat your foods a little bite and be careful about your body, Cause you are Obesity and do cardiovascular exercise for  20 min for eat it.";
        }
        else {
            document.getElementById("y").innerHTML = "Sir, we prefer you that you should not eat junk food, Cause you are Obesity but if you want you can but please do cardiovascular exercise for 1 hour for eat it.";
        }
        document.getElementById("z").innerHTML = "BMI test and suggestion is given base on WHO(World Health Organization)";
        document.getElementById("y").style.color = "white";
        document.getElementById("x").style.color = "white";
        document.getElementById("y").style.backgroundColor = "#3399ff";
        document.getElementById("y").style.borderRadius = "10px";
        document.getElementById("x").style.backgroundColor = "#3399ff";
        document.getElementById("x").style.borderRadius = "6px";
        document.getElementById("z").style.color = "#bfbfbf";
    }






function myFunction() {
  confirm("Congratulation! your order is taking. We will call you soon");
}
</script>

</html>
