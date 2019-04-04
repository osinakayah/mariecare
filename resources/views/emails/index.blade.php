<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nabob</title>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
</head>
<body>
<div class="container">
    <div class="row" style="text-align: center">
        <div class="col-xs-12" >
            <img style="text-align: center;" class="img-fluid" src="{{URL::asset('images/logo.jpeg')}}">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">From {{$useremail}}</div>
        <div class="col-xs-12">Name {{$fullname}}</div>
    </div>
    <div class="row">
        <div class="col-xs-12">{{$deliverMessage}}<br><br></div>
    </div>
</div>
</body>
</html>