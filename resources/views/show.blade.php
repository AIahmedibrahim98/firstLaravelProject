<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
<h1 style="text-align: center">Hello form Show..</h1>
@for ($i = 0; $i < $age; $i++)
welcome
@endfor

<h1>Your Name: {{$name}}</h1>
<br> <h1>Your Age : {{$age}}</h1>
@if ($age<20)
        <h3> you are young </h3>
@else
<h3> you are Man </h3>

@endif
</body>
</html>
