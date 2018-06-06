
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="icon" href="../../../../favicon.ico">--}}

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url('css/blog.css') }}" rel="stylesheet">
</head>

<body>
<div class="container">
    @include('layouts.nav');
    @if($flash = session('message'))
        <div id="alert-flash" class="alert alert-success" role="alert">
            {{ $flash }}
        </div>
    @endif
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    List Post
                </h3>

                {{--<div class="container">--}}
                @yield('content')
                {{--</div>--}}
                @include('layouts.sidebar')

                @include('layouts.footer')
            </div>
</body>
</html>
