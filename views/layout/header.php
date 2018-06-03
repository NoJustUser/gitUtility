<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">


</head>

<body>

<div class="container">

            <nav class="navbar navbar-default">
                    <div class="container-fluid" style="background-color: white; border-radius: 5px">
                    <!-- Заголовок -->
                    <div class="navbar-header">
                        <!--гамбургер-->
                        <button type="button" class="navbar-toggle collapsed"
                                data-toggle="collapse" data-target="#navbar-main">
                      
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--end_гамбургер-->
                        <a id="brand" class="navbar-brand" href="#" style="border-right: 1px solid #cccccf;">
                            <img src="/template/images/logo.jpg" style="margin: -15px 0px 0px 0px;" />
                        </a>
                    </div>
                    <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
                    <div class="collapse navbar-collapse" id="navbar-main">
                    <!-- Содержимое основной части -->

                    <ul class="nav navbar-nav">
                            <li><a href="#">Ссылка 1</a></li>
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="#">Ссылка 3</a></li>
                            <li><a href="#">Ссылка 4</a></li>
                            <li><a href="#">Ссылка 5</a></li>
                            
                            <!-- Выпадающий список -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Раздел 
                                    <span class="caret">
                                        
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                        <li><a href="#">Ссылка</a></li>
                                        <li><a href="#">Ссылка</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Ссылка</a></li>
                                </ul>
                            </li>

                    </ul>
                    
                    <!-- Блок, расположенный справа -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Ссылка -->        
                    <li><a href="#">Войти</a></li>
                    <!-- Выпадающий список -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Раздел <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Ссылка</a></li>
                            <li><a href="#">Ссылка</a></li>
                        </ul>
                    </li>
                    </ul>
                            
                 
      
                    </div>
                    </div>
            </nav>



<!--
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
  <li><a href="#">Action</a></li>
  <li><a href="#">Another action</a></li>
  <li><a href="#">Something else here</a></li>
  <li class="divider"></li>
  <li class="dropdown-submenu">
    <a tabindex="-1" href="#">More options</a>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Second level</a></li>
      <li class="dropdown-submenu">
        <a href="#">More..</a>
        <ul class="dropdown-menu">
            <li><a href="#">3rd level</a></li>
            <li><a href="#">3rd level</a></li>
        </ul>
      </li>
      <li><a href="#">Second level</a></li>
      <li><a href="#">Second level</a></li>
    </ul>
  </li>
</ul>

-->



	<hr>