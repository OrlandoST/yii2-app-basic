<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="nav_menu">
<div class="" role="navigation">
<div class="nav toggle">
 <a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>

<ul class="nav navbar-nav navbar-right">
 <li class="">
   <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
     <img src="/images/img.jpg" alt=""><?= $user->username ?>
     <span class=" fa fa-angle-down"></span>
   </a>
   <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
     <li><a href="#"><i class="fa fa-bookmark pull-right"></i> Помощь</a>
     </li>
     <li><a href="<?=Url::to(['dashboard/profile'])?>"><i class="fa fa-cogs pull-right"></i> Настройки профиля</a>
     </li>
     <li><a href="<?=Url::to(['site/logout']) ?>"><i class="fa fa-sign-out pull-right"></i> Выход</a>
     </li>
   </ul>
   </li>
    <li role="presentation" class="dropdown">
   <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
     <i class="fa fa-lightbulb-o"></i>
     <span class="badge bg-green">2</span>
   </a>
   <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
     <li>
       <a>
         <span class="image"><img src="images/img.jpg" alt="Profile Image" /> </span>
         <span>
         <span>Новый дизайн</span>
         <span class="time">40 минут назад</span>
         </span>
         <span class="message"> Рады представить вам новый обнавлённый дизайн.</span>
       </a>
     </li>
     <li>
       <a>
         <span class="image"><img src="images/img.jpg" alt="Profile Image" /> </span>
         <span>
         <span>Добавление функции</span>
         <span class="time">2 часа назад</span>
         </span>
         <span class="message"> Рады представить вам новую функцию автопостинг.</span>
       </a>
     </li>
    </ul>        
        </nav>
      </div>
    </div>