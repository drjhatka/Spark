<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            @include('partials.css')
            @include('partials.js')
            <title>Spark || @yield('title')</title>
        </head>

        <body>
            <div class="row">
                @include('partials.header')
                @include('partials.sidebar')
                <div class="row">
                        <div class="col m9">
                            @yield('content')                            
                        </div>
                </div>
                @include('partials.footer')

            </div>
            
        </body>
    </html>