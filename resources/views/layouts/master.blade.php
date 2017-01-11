<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.  恩恩
@show
Hello, {{ $name }}.
<div class="container">
    @yield('content')
</div>
</body>
</html>