<?php
  $hash = [
    "iscm" => "star",
    "imit" => "123str",
  ];
  $login = $_POST['login'];
  $pass1 = $_POST['password1'];
  $pass2 = $_POST['password2'];
  if(isset($_POST['submit']))
  {
    if($_POST['login'] == '' || $_POST['password1'] == '')
    {
      $text = 'Вы не ввели логин и пароль';	
      require 'errors.php';
      return;
    }
    else if(!isset($hash['$login']))
    {
        if($pass1 == $pass2)
        {
            // $hash += ['$login' => 'pass1'];
            echo 'Вы зарегистрировались';
        }
        else
        {
          $text = 'Пароли не совпадают';	
          require 'errors.php';
          return;
        }
    }
    else
    {
      $text = 'Логин уже существует';	
      require 'errors.php';
      return;
    }
  }
?>   
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>test</title>	

	  <link href="style.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Заря</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event.php">Секции</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entry.php">Войти</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="registration.php">Регистрация</a>
            </li> 
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>	
    <div class="wrap">
      <div class="container">
        <div class="d-flex justify-content-center align-content-center">
          <form method="POST">                
            <div class="form-group">
              <label for="exampleInputEmail1">Введите логин</label>
              <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Логин">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Введите пароль</label>
              <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <div class="form-group">           
              <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Повторите пароль">
              <small id="emailHelp" class="form-text text-muted">Пароли должны совпадать</small>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Зарегистрироваться</button>
          </form>
        </div>
      </div> <!-- container -->
    </div><!-- /.wrap -->
    <footer class="container">
      <hr>
      <p class="float-right"><a href="#">Наверх</a></p>
      <p>&copy; 2017-2018 Company, Inc. </p>
    </footer>
  </body>
</html>
