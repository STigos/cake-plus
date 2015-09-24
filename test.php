<!DOCTYPE html>

<html lang="RU">
    <head>
        <meta charset="UTF-8">
        <title>Страница для тестирования PHP кода</title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
        <script src="javascripts/jquery-2.1.4.js" ></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="javascripts/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="navbar-inverse  navbar-static-top " role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon-home"></span>Cake-plus</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li><a href="test.php">Test</a></li>
                <li><a href="#about"></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                 <li><a href="#contact">О нас</a></li>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <?php
         
        ?>
            <script>
                
                    
                function set23(){
                    var login = "Админ";
                    var namber = prompt("Вы кто?","");
                    if (namber === null){
                        alert("Вход отменен");
                        }
                            else if ( namber === login ){
                                var password = prompt("Введите пароль"," ");
                                    if (password === "Черный властелин"){
                                        alert("Добро пожаловать господин!");}
                                        else {
                                            alert("Не правильный пароль!");
                                        }
                                    }
                                 else if(namber !== login){
                                    alert("Я вас незнаю!");} 
                }
                   
                
            </script>
            <div class="row">
                <div class="col-lg-6 col-sm-12"><p id="in">Некоторый текст</p>
                    <button onclick="set23()" type="button" accesskey="Enter">Нажми</button></div>
                <div class="col-lg-6 col-sm-12"><p>Некоторый текст</p></div>
                
                
            </div>
    </body>
</html>
