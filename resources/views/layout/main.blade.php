<!DOCTYPE html>
<html>
<head>
    <title>T</title>

    <link rel="stylesheet" href="/internita/public/assets/bower_vendor/bootstrap/dist/css/bootstrap.min.css"/>
    <script src="/internita/public/assets/bower_vendor/jquery/dist/jquery.js"></script>
    <script src="/internita/public/assets/bower_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Intern</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sing up</a></li>
                    <li><a href="#">Registry</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    @yield('content')

    <script src="/internita/public/assets/bower_vendor/underscore/underscore.js"></script>
    <script src="/internita/public/assets/bower_vendor/backbone/backbone.js"></script>
    <script src="/internita/resources/views/layout/login.js"></script>
</body>
</html>