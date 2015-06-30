@extends('layout.main')

@section('content')
<div class="container col-lg-4 col-lg-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">Вхід</div>
        <div class="panel-body">
            <form role="form" id="login" action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">Запам'ятати мене</label>
                </div>
                <button type="submit" class="btn btn-default" id="signIn">Увійти</button>
            </form>
        </div>
    </div>
</div>
@stop