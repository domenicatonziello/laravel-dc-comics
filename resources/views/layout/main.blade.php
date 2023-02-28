<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{env('APP_NAME')}} </title>
    @vite('resources/js/app.js')
</head>
<body>
    <!-- Header -->
    @include('includes.header')
    <!-- Main -->
    <main>
        <!-- Jumbotron -->
        <div class="jumbo"></div>
        @yield('content')
    </main>
    <!--Footer -->
    @include('includes.footer')
</body>
</html>