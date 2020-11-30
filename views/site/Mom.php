<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Сайт курсовой работы по web-разработке" />
  <meta name="robots" content="all" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Курсовой проект</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/basis.css">
</head>
<body>

<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="css/jquery.vide.min.js"></script>

<div id = "container">

  <div id="sidebar">
    <div class="toggle-btn" onclick="openMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul>
      <li><a href="Mom.php">Embrase Fitness</a></li>
      <li><a href="index_1.php">Наши инструктора</a></li>
      <li><a href="index_2.php">Направления</a></li>

    </ul>
  </div>

  <div class= "block_1">
    <div class = "header"></div>
  </div>

<div>
  <div class="block_2" data-vide-bg='video/SilhouetteJogger.mp4'></div>

  <div class="block_3">
    <div class = "header"></div>
    <br>
    <h2>О Embrase Fitness: </h2>
    <br>
    <p>Embrase fitness - молодая команда, созданная вдохновлять и направлять людей.</p>
    <br>
    <p>Мир меняется , и мы меняемся вместе с ним. Спасибо за ваше доверие. С любовью, команда Embrace Fitness.  </p>
    <br>
  </div>
  <p><a id="#block_1"></a></p>
</div>
<div class="block_5" data-vide-bg='video/180419_Boxing_15_06.mp4'></div>

  <div class="block_4">
    <div class="header"></div>
      <br>
      <h2>О нас: </h2>
      <br>
      <p> Проект начинается с идеи. В основе нашего проекта лежит идея социальной ответственности бизнеса. Осознавая свою ответственность за здоровье людей и окружающую среду мы:

         1.Использовали в отделке клуба только экологически чистые материалы безопасные для здоровья
         2.Установили систему рекуперации тепла с заботой об окружающей среде и экономии ресурсов. Смонтировали современную систему вентиляции и кондиционирования воздуха для создания благоприятного климата на всей территории клуба
         3.Закупили систему очистки воды без химии для снижения химического загрязнения сточных вод
         4.Приобрели оборудование для тренировок, разработанное на основании научных исследований и прошедшее лабораторные испытания, чтобы свести к нулю нагрузку на суставы и риск получения травм</p>
      <br>
      <p>Создавая VanderFit мы придерживались концепции интеллектуального фитнеса. Развитие технологий меняет нашу жизнь и фитнес-клуб не может остаться в стороне от актуальных тенденций.</p>
      <br>

  </div>

  <div class="block_2" data-vide-bg='video/180419_Boxing_15_03'></div>

  <div class="block_3">
    <div class = "header"></div>
    <br>
    <h2>Тренажерный зал: </h2>
    <br>
   <p>Тренажерный зал оснащен тренажерами и спортивным оборудованием Life Fitness, Hammer Strength и комплексом для функциональных тренировок Synrgy 360XL. Тренажеры подходят как для опытных так и для начинающих пользователей. Последние достижения биомеханики и эргономичной конструкции позволят обеспечить прогресс тренировочного процесса.</p>
   <br>
   <p>Кардиотренажеры с консолью DISCOVER SE3 HD делают тренировки увлекательными и доставят удовольствие. Кардиотренировки становятся не такими скучными с интерактивными видеомаршрутами Lifescape, множеством готовых программ тренировок и созданием собственных. Улучшай результаты с помощью видеокурса RunSocial и участвуй в соревнованиях в режиме реального времени с пользователями со всего мира на знаменитых марафонских трассах. Совместимость с облачным ресурсом LFconnect поможет отслеживать результаты тренировок.</p>
   <br>
   <p>Фитнес-классы: аэробные; силовые; танцевальные; body&mind. Смена нагрузки дает положительный эффект и мотивацию. Вносите разнообразие в занятия, выбирайте групповые направления по настроению и близкие по духу. </p>
   <br>
  </div>

  <div class= "block_6">
    <div id="footer">
      <p>2020 Zheleva Diana</p>
    </div>
  </div>
</div>






  <script>
    function openMenu() {
      document.getElementById("sidebar").classList.toggle('active'); /*добавление или удаление класса*/
    }
  </script>
