<!DOCTYPE html>
<html>
<head>
    <title>T</title>
    <link rel="stylesheet" href="assets/bower_vendor/bootstrap/dist/css/bootstrap.min.css"/>
    <script src="assets/bower_vendor/jquery/dist/jquery.js"></script>
    <script src="assets/bower_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
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
                @if ($login)
                    Вошол
                @else
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Sing up</a></li>
                        <li><a href="#">Registry</a></li>
                    </ul>
                @endif
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</body>
</html>