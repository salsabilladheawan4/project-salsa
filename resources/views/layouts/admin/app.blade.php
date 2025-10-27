<!DOCTYPE html>
<html lang="id">
<head>
    @include('layouts.admin.css')
</head>
<body>
    <div id="app">
        @include('layouts.admin.sidebar')
        <div id="main">
            @include('layouts.admin.header')

            @yield('content')

            @include('layouts.admin.footer')
        </div>
    </div>
    @include('layouts.admin.js')
</body>
</html>

