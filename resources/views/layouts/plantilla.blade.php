<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <!--favicon -->
    <!-- estilos-->
    <style>
        .active{
            color: brown;
            font-weight: bold;
        }
    </style>
</head>
<body>

  @include('layouts.hed.header')
   
    <!--nav -->
    @yield('content')
    <!-- footer-->
    <!--script -->
</body>
</html>