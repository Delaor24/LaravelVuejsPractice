<!DOCTYPE html>
<html lang="">
    <head data-baseurl="{{URL::to('/')}}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel='icon' type='image/png' sizes='32x32' href="{{asset('images/favicon.png')}}">
        <!-- no-cache -->
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <title>Admin Dashboard</title>
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="base-url" content="{{URL::to('/')}}" />
        <script>
          window.laravel = {
              baseurl:"{{url('/')}}",
              csrf_token:"{{csrf_token()}}"
          }
        </script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"/>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
       <div id="app">
       <backend-app></backend-app>
       </div>

        <!-- app js -->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" ></script>

    </body>
</html>
