<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDC Dreams Program Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">CDC Dreams</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/girls') }}">Girls</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/events') }}">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/progress') }}">Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/materials') }}">Materials</a></li>
                </ul>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
