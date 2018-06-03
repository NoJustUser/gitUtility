<?php 

include ROOT.'/views/layout/header.php';
 ?>

<div class="row">
<div id="sitebar" class="col-md-2">
          <!--<a href="/tab">Табель рабочего времени</a>-->

<ul class="nav navbar-nav" style="margin: 0px 0px;">
                            <!-- Выпадающий список -->
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Табель учета рабочего времени
        </a>
        <ul class="dropdown-menu">
                <li><a href="/tab/data">Просмотр данных</a></li>
                <li><a href="#">Ссылка</a></li>
                <li role="separator" class="divider"></li>

                <!--<ul class="nav navbar-nav">-->
                    <li class="dropdown-submenu">
                       <a tabindex="-1" href="#" class="dropdown-toggle" data-toggle="dropdown">Редактировать</a>

                       <ul class="dropdown-menu">
                        <?php foreach($cadres as $cadre): ?>
                          <li><a href="#"><?=$cadre['name']?></a></li>
                        <?php endforeach; ?>
                          <li role="separator" class="divider"></li>
                          <li><a href="/tab">Полный список</a></li>
                       </ul>
                    </li>
                <!--</ul>-->



               
        </ul>
    </li>
</ul>

<ul class="nav navbar-nav" style="margin: 0px 0px;">
                            <!-- Выпадающий список -->
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Учет закрепленного инструмента
        </a>
        <ul class="dropdown-menu">
                <li class="dropdown-header">Заголовок</li>
                <li><a href="#">Просмотр данных</li>
                <li><a href="#">Ссылка</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">редактирование</a></li>
        </ul>
    </li>
</ul>

<ul class="nav navbar-nav" style="margin: 0px 0px;">
                            <!-- Выпадающий список -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Изготовление и отгрузка 
            </a>
            <ul class="dropdown-menu">
                    <li><a href="#">Просмотр данных</a></li>
                    <li><a href="#">Ссылка</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">редактирование</a></li>
            </ul>
        </li>
</ul>

<ul class="nav navbar-nav" style="margin: 0px 0px;">
                            <!-- Выпадающий список -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Остатки материалов и изделий
                                </a>
                                <ul class="dropdown-menu">
                                        <li><a href="#">Просмотр данных</a></li>
                                        <li><a href="#">Ссылка</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">редактирование</a></li>
                                </ul>
                            </li>
</ul>

<hr>

       </div>
       
        <div class="col-md-6" style="float: left; margin-right: 0px; ">
            <h3><?php echo 'Заголовок'; ?></h3>
     
            <?php echo 'Дата'; ?>
            <br>
            <span style="font-family: verdana;">
            <?php echo 'Предлагаемая Вам утилита
                        предназначена для ведения табеля учета 
                        рабочего времени работников на вашем предприятии.
                        Вы можете вести табель учета в любом месте 
                        где бы Вы не находились. Электронный табель автоматически отнимет время обеденного перерыва
                        от общего количества отработанных часов.
                        '; ?>
            </span>
            
        </div>
        
        <div class="col-md-3">
            <!--<img width="340" height="280" src="/MVC/template"/>-->

            <div class="embed-responsive embed-responsive-16by9" style="width: 260px; height: 315px;">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/-9yYJ6ZAYns?loop=1&showinfo=0&playlist=-9yYJ6ZAYns" frameborder="0" allow="autoplay; encrypted-media"allowfullscreen></iframe>
            </div>

            Если хотите больше новостей, вернитесь на
            <a href="/MVC/news">главную.</a>
        </div>
     </div>

<?php include ROOT.'/views/layout/footer.php';?>