@php
App::setLocale(session()->get("lang"));
@endphp
<!DOCTYPE html>
<html lang="en" dir="@lang('data.dir')">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Test Lang</title>
</head>
<body>
<h1>{{__("data.welcome")}}</h1>
<h3>{{__("data.user")}}</h3>
<h3>{{__("data.password")}}</h3>
<h3>{{__("data.category")}}</h3>
<h1>{{__("data.bye")}}</h1>
@lang('data.user') <br>
{{ trans("data.password") }} <br>
<a href="change/lang/ar">عربي</a>
<a href="change/lang/en">English</a> <br>
{{ App::getLocale() }}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>