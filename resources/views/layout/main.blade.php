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
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sing up</a></li>
                    <li><a href="#">Registry</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="panel panel-default">
        <div class="panel-heading">Вхід</div>
        <div class="panel-body">
            <form role="form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Пароль</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">Запам'ятати мене</label>
                </div>
                <button type="submit" class="btn btn-default">Увійти</button>
            </form>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Реєстрація</div>
        <div class="panel-body">
            <form role="form">
                <div class="form-group">
                    <label for="last-name">Ім'я</label>
                    <input type="text" class="form-control" id="last-name">
                </div>
                <div class="form-group">
                    <label for="first-name">Призвіще</label>
                    <input type="text" class="form-control" id="first-name">
                </div>
                <div class="form-group">
                    <label for="pwd">Пароль</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Пароль</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <button type="submit" class="btn btn-default">Готово</button>
            </form>
        </div>
    </div>
</body>
</html>