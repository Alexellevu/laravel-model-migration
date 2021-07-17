<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Holidays')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body{
                background-color: cyan;  
            }

            .card{
                background-color: red;
                width: 200px
            }
        </style>
       
    <body>
        <header class="" id="site_header">
           

        </header>
       
        <main class="" id="site_main">
            <div class="card">
           @yield('content')
          </div>
       </main>
       
       <footer class="" id="site_footer">
           
       </footer>
    </body>
</html>
