@extends('layout.main')

@section('content')
<div class="container col-lg-offset-4 col-lg-4">
  <div class="panel panel-default">
  <div class="panel-heading">Реєстрація</div>
    <div class="panel-body">
      <form role="form" method="POST" action="/internIta.2/public/auth/register">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group">
          <label for="name">Ім'я</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="surname">Призвіще</label>
          <input type="text" class="form-control" id="surname" name="surname">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Пароль</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-default">Готово</button>
      </form>
    </div>
  </div>
</div>
@stop