<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Front page</title>
        <script>
          window.laravel = {
              baseurl:"{{url('/')}}",
              csrf_token:"{{csrf_token()}}"
          }
        </script>
        <!-- Bootstrap CSS -->
        
        <link href="{{asset('frontend/font-awesome/web-fonts-with-css/css/fontawesome-all.css')}}" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/app.css')}}" rel="stylesheet">

    </head>
    <body>
       <div id="app">
       <frontend-app></frontend-app>
       </div>

        <!-- app js -->
        <script src="{{asset('js/frontend.js')}}"></script>
        <script src="{{asset('frontend/js/app.js')}}"></script>
    </body>
</html>
