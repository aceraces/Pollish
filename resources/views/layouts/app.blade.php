<!DOCTYPE html>
<html lang="en" prefix="fb: http://www.facebook.com/2008/fbml">
<head>
    <title>{{config('app.name', 'Pollish')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <style media="screen">
        #fb_login{margin-top: 12px}
    </style>

</head>
    <body>
        @yield('content')
    </body>
</html>