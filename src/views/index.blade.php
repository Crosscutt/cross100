<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Cross-Packages</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
       

        
            <div id="root" data={{Auth::user()->id}} data1={{Auth::user()->name}}></div>
            <script src="{{mix('js/app.js')}}" ></script>



        
    </body>
</html>