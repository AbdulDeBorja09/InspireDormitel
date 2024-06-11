<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADMIN</title>
    <link rel="icon" href="{{ url('/image/Nulogo.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('admin.layout.navbar')
    @yield('content')
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
