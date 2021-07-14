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
        </style>
       
    <body>
        <header class="" id="site_header">
            <h1>laravel migration</h1>

            </header>
       
        <main class="" id="site_main">
           @yield('content')
       </main>
       
       <footer class="" id="site_footer">

       </footer>
    </body>
</html>
