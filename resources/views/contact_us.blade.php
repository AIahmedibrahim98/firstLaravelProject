<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Contact US</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <form action="/contactus" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Your Email</label>
                    <input type="email"
                           class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text"
                           class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text"
                           class="form-control" name="subject" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea class="form-control" name="message" id="" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Sent</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
