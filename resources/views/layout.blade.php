<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Project Flyer</title>
        <link rel="stylesheet" href="/css/vendor.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Project Flyer</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ setActive('flyers') }}"><a href="/flyers">Browser Flyers</a></li>
                        <li class="{{ setActive('flyers/create') }}"><a href="/flyers/create">Create a Flyer</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if($user)
                        <p class="navbar-text">Logged as {{ $user->name }}</p>
                        <li class="{{ setActive('auth/login') }}"><a href="/auth/logout">Logout</a></li>
                        @else
                        <li class="{{ setActive('auth/login') }}"><a href="/auth/login">Login</a></li>
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>

        <script src="/js/vendor.js"></script>
        @yield('scripts.footer')
        @include('flash')
    </body>
</html>
