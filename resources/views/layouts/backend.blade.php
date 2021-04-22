<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard</title>

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
