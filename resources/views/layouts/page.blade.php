<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel X Elementor</title>

    {{-- CORE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    @include('layouts.public-navbar')
    @yield('content')
    @include('layouts.public-script')
    @stack('child-scripts')
</body>

</html>
