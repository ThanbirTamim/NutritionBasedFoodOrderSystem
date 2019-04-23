<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- stylesheets css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/nivo_themes/default/default.css')}}">

    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />

    <title>Admin Panel</title>

    <style>
        .sidenav {
            height: 100%;
            width: 180px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #000033;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 16px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }
        .sidenav a:active {
            color: red;
        }

        .main {
            margin-left: 185px; /* Same as the width of the sidenav */
            font-size: 15px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        body{

        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <table class="table">
                    <thead class="black white-text">
                    <tr  class="bg-primary">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>

                    </tr>
                    </thead>
                    @foreach($values as $item)
                        <tbody>
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}} </td>
                            <td>{{$item->phone}} </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <form action="/home" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Srore Information</label><br>
                    <input type="text" name="name" placeholder="name">
                    <input type="text" name="phone" placeholder="phone">
                    <input type="submit" value="Done">
                </form>
            </div>
        </div>
    </div><br>
    <div class="columns" id="app">
        <div class="column is-two-thirds">
            <section class="section">
                <h1 class="title">hey</h1>
                <p class="subtitle">
                    excuseme <strong>labtest</strong>!
                </p>
                <hr>

                <!-- form starts here -->
                <section class="form">
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input v-model="form.name" class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                form : {
                    name: ''
                }
            }
        })
    </script>
    {{--<h2>Analysis Type er kisu rakbo,,,,,,</h2>--}}
    {{--<h2>Your weekly sell cost can be: {{$newy}}</h2>--}}
</div>
</body>
</html>
