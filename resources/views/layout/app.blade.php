<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Holidays')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
       
    <body>
       
        @include('partials.header')

      
       
        <main class="" id="site_main">
            <div class="container">
              
                @yield('content')
               
          </div>
       </main>
       
       
       @include('partials.footer')
       
    </body>
</html>
