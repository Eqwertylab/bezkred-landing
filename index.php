<?php
  $dataBase = array(
    // Данные набора по умолчанию
    'default' => array(
      'slides' => array(
        1 => 'Вы не в состоянии оплачивать долги по кредитам?',
        2 => 'Банк собирается подать в суд и забрать Ваше имущество?',
        3 => 'Коллекторы угрожают Вам и Вашим близким?'
      ),
      'service' => array(
        1 => array(
          'title'=>'Уменьшим вашу задолженность перед банком',
          'icon'=>'dist/img/1a.png' 
        ), 
        2 =>  array(
          'title'=>'Остановим рост процентов по кредитному долгу',
          'icon'=>'dist/img/2a.png' 
        ) 
      )
    ),

    // Проблемы с автокредитом
    'autokred' => array(
      'slides' => array(
        1 => 'Возникли проблемы с автокредитом?',
        2 => 'Банк угрожает забрать Ваш автомобиль?',
        3 => 'Звонят коллекторы?'
      ),
      'service' => array(
        1 => array(
          'title'=>'Вернем Вас обратно в график!',
          'icon'=>'dist/img/1a.png' 
        ), 
        2 =>  array(
          'title'=>'100% Защитим Ваше имущество – автомобиль, жилье!',
          'icon'=>'dist/img/2a.png' 
        ) 
      )
    ),

    // Проблемы с ипотекой
    'ipoteka' => array(
      'slides' => array(
        1 => 'Возникли проблемы с ипотекой?',
        2 => 'Банк угрожает забрать Вашу квартиру?',
        3 => 'Звонят коллекторы?'
      ),
      'service' => array(
        1 => array(
          'title'=>'Вернем Вас обратно в график!',
          'icon'=>'dist/img/1a.png' 
        ), 
        2 =>  array(
          'title'=>'100% Защитим Ваше имущество – автомобиль, жилье!',
          'icon'=>'dist/img/2a.png' 
        )
      )
    ),

    // Реструктуризация кредита
    'restruk' => array(
      'slides' => array(
        1 => 'Мы поможем добиться реструктуризации!',
        2 => 'Хотите снизить платеж по кредиту?'
      ),
      'service' => array(
        1 => array(
          'title'=>'Проведем переговоры с кредитным учреждением!',
          'icon'=>'dist/img/1a.png' 
        ), 
        2 => array(
          'title'=>'Поможем добиться реструктуризации!',
          'icon'=>'dist/img/2a.png' 
        )
      )
    )
  );
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="cleartype" content="on"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="HandheldFriendly" content="True"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>

  <title>Безкредитофф. Антикредитные решения</title>

  <link href="favicon.ico" rel="shortcut icon">
  <!-- Styles -->
  <link href="dist/js/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="dist/css/animate.css" rel="stylesheet" data-skrollr-stylesheet/>
  <link href="dist/player/skin/minimalist.css" rel="stylesheet"/>
  <!-- Bootstrap -->
  <link href="dist/css/bootstrap.css" rel="stylesheet">
  <link href="dist/css/bootstrap-theme.css" rel="stylesheet">
  
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>


  <!-- Навигация -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-theme">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#service">Наши услуги</a></li>
          <li><a href="#why">Почему мы</a></li>
          <li><a href="#victory">Наши победы</a></li>
          <li><a href="#review">Отзывы</a></li>
          <li><a href="#works">Как мы работаем</a></li>
          <li><a href="#contact">Контакты</a></li>
        </ul>
        <div class="navbar-right">
          <button class="btn btn-theme btn-head" id="open-form">
            <span class="hidden-sm">
              Заказать обратный звонок<br>специалиста
            </span>
            <span class="glyphicon glyphicon-earphone"></span>
          </button>
        </div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  
  <div id="skrollr-body">
  <!-- Заголовок -->
  <header class="header-page">
    <div class="container-theme">
      <div class="row">

        <div class="logo logo-header">
          <img src="dist/img/logo2.png" alt="" class="img-logo" alt="Безкредитофф. Антикредитные решения">
        </div>
        <div class="contact-header">
          <div class="tel ya-phone">
            8&nbsp;(800)&nbsp;333-58-34
          </div>
          <div class="work-time">
            График работы: Пн-Пт c 10:00 - 20:00
          </div>
          <div class="contact-header-desc">
            Заявки, оставленные до 10:00 и после 20:00, обрабатываются в рабочее время.
          </div>
        </div>

      </div>

    </div>
  </header>

  <!-- Промо-форма -->
  <div class="promo1">
    <div class="container-theme">

      
      <!-- Слайдер -->
      <!--div id="carousel-example-generic" class="carousel slide webwestofthebest carousel-theme" data-ride="carousel">

        <div class="carousel-inner">
          
          <?php 
            // Указываем набор с данными по умолчанию
            $nabor = 'default'; 
            
            // Если GET не пустой и в указанном наборе есть данные, устанавливаем его
            if(isset($_GET['set']) && $_GET['set'] !== '' && $dataBase[$_GET['set']] !== null) { $nabor = $_GET['set']; } 

            //Выводим данные в соответствии с указанным набором 
            foreach ($dataBase[$nabor]['slides'] as $key => $value) {
              $isactive = '';

              // Для первого элемента устанавливаем active
              if($key == 1) { $isactive = 'active'; };
              echo '<div class="item slide2 '.$isactive.'">'.$value.'</div>';
            }
          ?>

        </div>
      </div-->

      <div class="video_play">
        <div class="embed-responsive embed-responsive-16by9">
          <div class="embed-responsive-item">
            <div class="flowplayer" data-ratio="0.5625">
              <video autoplay>
                <source type="video/webm" src="dist/video/Bezkreditoff-HD.webm">
                <source type="video/mp4" src="dist/video/Bezkreditoff-HD.mp4">
                <source type="video/ogv" src="dist/video/Bezkreditoff-HD.webm">
              </video>
            </div>
          </div>
        </div>
      </div>

      <!-- Форма -->
      <div class="feedback1" id="feedback1">
        <p class="line1">Оставьте заявку</p>
        <p class="line2">и, в течение 15* минут узнайте, как решить Ваши проблемы с кредитами у нашего специалиста по телефону</p>
        <p class="line3">БЕСПЛАТНО</p>
        <form action="mail.php" class="form-inline form-feedback" role="form">
          <input type="hidden" name="feedback" value="Верхняя форма">
          <input type="hidden" name="url" value="<?php echo $_SERVER[SERVER_NAME].$_SERVER[REQUEST_URI]; ?>" id="furl">

          <div class="form-group">
            <label class="sr-only" for="inputName">Ваше имя</label>
            <input type="name" name="name" class="form-control" id="inputName" placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputTel">Ваш телефон</label>
            <input type="tel" name="tel" class="form-control" id="inputTel" placeholder="Ваш телефон">
          </div>
          <button type="submit" class="btn btn-theme">Решить проблему</button>
          <p class="footnote">* Заявки, оставленные до 10:00 и после 20:00, обрабатываются в рабочее время.</p>
        </form>
      </div>
      
      <!--
      <div class="col-sm-7 pull-right">
        <q>За последние 3 года к нам обратилось более 1000 благодарных клиентов, которых мы освобидили от кредитного рабства, защищали от произвола коллекторов и помогли вернуть незаконные комиссии и страховки. Нас выбирают, нам доверяют, нас рекомендуют.</q> 
        <p class="sign">
          Алексей Пацинский, <br>
          генеральный директор
        </p>
      </div>
      -->
      
    </div>
  </div>


  
  <!-- Красная полоса -->
  <div class="red-line">
    <div class="container-theme">
      <div class="title-wrap">
        <span class="title">
          В 9 из 10 случаев банки и микрокредитные организации нарушают закон
        </span>
      </div>
    </div>
  </div>

  
  <!-- Нарушения банков -->
  <div class="promo2">
    <div class="container-theme">
      <ul class="bad-bank">
        <li>
          <p>Многократно превышают допустимые законом лимиты по начислению штрафов, пени и неустоек</p>
        </li>
        <li>
          <p>Банки и коллекторы вмешиваются в частную жизнь граждан и оказывают психологическое давление!</p>
        </li>
        <li>
          <p>Нарушают действующее законодательство</p>
        </li>
        <li>
          <p>Незаконно передают информацию о должнике третьим лицам, коллекторам!</p>
        </li>
        <li>
          <p>Начисляют запрещенные законом комиссии!</p>
        </li>
      </ul>
    </div>
  </div>



  <!-- Красная полоса -->
  <div class="red-line" id="service">
    <div class="container-theme">
      <div class="title-wrap">
        <span class="title">
          Обратитесь к нам, и мы решим любую из этих проблем
        </span>
      </div>
    </div>
  </div>

  


  <!-- Мы сделаем -->
  <div class="promo3">
    <div class="container-theme">
      <ul class="wego">

        <?php 
          foreach ($dataBase[$nabor]['service'] as $key => $value) { 
            echo '<li><img src="'.$value['icon'].'"><p>'.$value['title'].'</p></li>';
          }
        ?>

        <li>
          <img src="dist/img/4a.png" alt="">
          <p>100% защита Вас и Вашего имущества в случае попытки банка подать на Вас в суд</p>
        </li>
        <li>
          <img src="dist/img/5a.png" alt="">
          <p>100% защита Вас и Вашего имущества в случае передачи Вашего долга коллекторам</p>
        </li>
        <li>
          <img src="dist/img/6a.png" alt="">
          <p>Вернем Ваши деньги за незаконно начисленные комиссии</p>
        </li>
      </ul>


      <!-- Красная стрелка -->
      <img class="red-arroy" src="dist/img/red-arroy.png">
    </div>

  </div>

  <!-- Опросник -->
  <div class="promo9">
    <div class="container-theme">
      <?php 
        // По умолчанию текущая страничка не является опросом
        $isopros = FALSE;

        // Массив с опросами
        $queris = array(
          'theme1' => array(
            1 => 'Сколько всего вы должны?',
            2 => 'Надо быть откровенным, так сколько?',
            3 => 'А ваши родители вам верели когда вы им так отвечали?'
          ),
          'theme2' => array(
            1 => 'Вы знаете кто убил Кенеди?',
            2 => 'А может тогда вам стоит рассказать нам?',
            3 => 'Дорогуша! :) там вам что ... уже можно?'
          )
        );

        // Смотрим если в запросе укащзатель на тему опроса
        if (isset($_GET['theme']) && $_GET['theme'] !== '' && $queris[$_GET['theme']] !== '') {

          // указываем тему опроса
          $theme = $_GET['theme'];

          // Подключаем файл с опросом
          require_once 'view_opros.php';
        } else {

          // Подключаем файл с формой обратной связи
          require_once 'view_form.php';
        }    

      ?>
      

    </div>
  </div>
  <!-- / Опросник -->



  <!-- Красная полоса -->
  <div class="red-line" id="why">
    <div class="container-theme">
      <div class="title-wrap">
        <span class="title">
          Почему более 1000 благодарных клиентов выбрали нас!
        </span>
      </div>
    </div>
  </div>
  


  <!-- Достоинства -->
  <div class="promo5">
    <div class="container-theme">
      <ul class="dignity">
        <li>
          <img src="dist/img/1b.png" alt="">
          <div class="dignity-text">
            <h3 class="caption">Большой опыт:</h3>
            <p>Мы профессиональные юристы с опытом более 10 лет</p>
          </div>
        </li>
        <li>
          <img src="dist/img/4b.png" alt="">
          <div class="dignity-text">
            <h3 class="caption">99% выигранных дел:</h3>
            <p>Мы специализируемся исключительно на защите интересов граждан перед банками и коллекторами</p>
          </div>
        </li>
        <li>
          <img src="dist/img/2b.png" alt="">
          <div class="dignity-text">
            <h3 class="caption">Уникальная практика</h3>
            <p>Нами разработаны уникальные документы, письма, обращения, исковые заявления, проверенные на деле</p>
          </div>
        </li>
        <li>
          <img src="dist/img/6b.png" alt="">
          <div class="dignity-text">
            <h3 class="caption">Решение проблем на любой стадии</h3>
            <p>Банк уже подал на Вас в суд? Арестовал Ваше имущество? Звоните! Мы помогаем даже в экстренных случаях!</p>
          </div>
        </li>
        <li>
          <img src="dist/img/5b.png" alt="">
          <div class="dignity-text">
            <h3 class="caption">Работа "под ключ"</h3>
            <p>Мы полностью берем все заботы на себя. Вам никуда не надо ходить. Вы получаете готовый результат.</p>
          </div>
        </li>
        <li>
          <img src="dist/img/3b.png" alt="">
          <div class="dignity-text">
            <h3 class="caption">Приемлемая цена на услуги</h3>
            <p>Вы самостоятельно выбираете тариф и способ оплаты исходя из ваших финансовых возможностей, а так же исходя из сложности Вашей проблемы.</p>
          </div>
        </li>
      </ul>
    </div>

  </div>


  <!-- Наши победы -->
  <div class="promo6" id="victory">
    <div class="container-theme">
      <h2>НАШИ ПОБЕДЫ</h2>


      <!-- Цитата -->
      <div class="wewin">
        <img src="dist/img/man.jpg" alt="">
        <div class="wewin-text">
          <q>Долговая яма, непомерные процентные ставки, слишком доступные кредиты - это не проблема отдельного человека, это проблема страны в целом. Каждый день мы доказываем то, что закон находится на стороне человека, а не защищает интересы частных и государственных банков. И мы побеждаем раз за разом, создавая уверенность в завтрашнем дне, как для отдельного человека, так и для страны в целом. </q>
          <p class="sign"><a href="http://vk.com/id373633">Ведущий юрист Виктор Старовойтов</a></p>
        </div>
      </div>


      <!-- Сканы -->
      <ul class="docs">
        <li>
          <h3 class="title">МигомДеньги</h3>
          <p class="num">Взыскание с банка незаконной комисси за выдачу кредита 25 882 руб. 41 коп.</p>
          <a href="dist/img/docs/one/1001.jpg" class="scan" rel="album1">
            <img src="dist/img/docs/one/10001_min.jpg" alt="">
          </a>
        </li>
        <li>
          <h3 class="title">Банк Хоум Кредит</h3>
          <p class="num">Отмена судебного приказа</p>
          <a href="dist/img/docs/foo/10001.jpg" class="scan" rel="album2">
            <img src="dist/img/docs/foo/10001_min.jpg" alt="">
          </a>
        </li>
        <li>
          <h3 class="title">Райффайзен Банк</h3>
          <p class="num">Взыскание с банка 84 360 руб. за незаконные действия</p>
          <a href="dist/img/docs/three/4001.jpg" class="scan" rel="album3">
            <img src="dist/img/docs/three/4001_min.jpg" alt="">
          </a>
          <a href="dist/img/docs/three/5001.jpg" class="scan hidden" rel="album3"></a>
        </li>
        <li>
          <h3 class="title">Банк Открытие</h3>
          <p class="num">Снижение неустойки в 10 раз. со 121 181 руб. 40 коп. до 10 998 руб. 54 коп.</p>
          <a href="dist/img/docs/two/1002.jpg" class="scan" rel="album4">
            <img src="dist/img/docs/two/1002_min.jpg" alt="">
          </a>
          <a href="dist/img/docs/two/2001.jpg" class="scan hidden" rel="album4"></a>
          <a href="dist/img/docs/two/3001.jpg" class="scan hidden" rel="album4"></a>          
        </li>
      </ul>

    </div>

  </div>
  

  <!-- Отзывы -->
  <div class="promo7" id="review">
    <div class="container-theme">
      <h2>ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>


      <!-- Карусель отзывов -->
      <div id="carousel2-example-generic" class="carousel slide review" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="review-content">
              <img src="dist/img/review/1.jpg" class="ava" alt="">
              <div class="title">Александр Поляков, консультант по недвижимости</div>
              <q>Взял потребительский кредит под открытие собственного офиса агентства недвижимости. Через три месяца офис пришлось закрыть, кредит платить было тяжело. Обратился в "Безкридитофф". Получил рассрочку по оплате кредита по удобному для меня графику. Спасибо Виктору!</q>
            </div>
          </div>
          <div class="item">
            <div class="review-content">
              <img src="dist/img/review/2.jpg" class="ava" alt="">
              <div class="title">Роман Владимирович, финансовый брокер на бирже форекс</div>
              <q>Огромное спасибо! Ребята просто спасли меня! Водин момент я оказался должен банкам порядка 4 000 000 рублей. Каждый месяц я должен был платить 135 000 рублей по кредитам при доходе в 180 000 рублей, а кредиты все не уменьшались! В октябре 2013 года меня уволили. Теперь благодаря юридической фирме "Безкредитофф", мой ежемесячный платеж снизился до 20 000 рублей, и мне даже удалось сохранить мой Hundai I35, купленный в кредит</q>
            </div>
          </div>
          <div class="item">
            <div class="review-content">
              <img src="dist/img/review/3.jpg" class="ava" alt="">
              <div class="title">Артём Костоусов, старший инженер компании ЗАО "Премьер СТ"</div>
              <q>Передаю привет банку ”Тинькофф”, который начислил на небольшой долг по кредитной карте около 500%. Спасибо Алексею за то, что отстоял справедливость. Задолженность я погасил, но в адекватном размере.</q>
            </div>
          </div>
          <div class="item">
            <div class="review-content">
              <img src="dist/img/review/5.jpg" class="ava" alt="">
              <div class="title">Олеся Иванова (Харченко), администратор салона красоты “Апельсин”</div>
              <q>Мы с мужем оформили автокредит на 520 000 рублей в банке “Советский” на покупку моего нового Opel Corsa в сентябре 2013 года. Представьте моё удивление, когда я увидела стоимость автомобиля в договоре с банком - 687000 рублей! 167000 рублей была страховка, о которой мне никто и ничего не сказал перед заключением договора! Спасибо лично Кириллу и юридической фирме "Безкредитофф" за то, что не только вернули деньги за страховку, но и заставили банк выплатить мне компенсацию в размере 290 000 рублей!</q>
            </div>
          </div>
          <div class="item">
            <div class="review-content">
              <img src="dist/img/review/4.jpg" class="ava" alt="">
              <div class="title">Александр Шабашев, повар ресторана "Meat Head"</div>
              <q>Взял потребительский кредит в банке“Русский Стандарт”. Возникли проблемы с деньгами, попросил банк отсрочку. Вместо понимания я сразу стал получать звонки от коллекторов из компании “Morgan&Stout”. Спасибо за то, что избавили от звонков. В итоге кредит я закрыл в удобном для меня порядке.</q>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel2-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel2-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>

    </div>
  </div>
  


  <!-- Как мы работаем -->
  <div class="promo8" id="works">
    <div class="container-theme">
      <h2>Как мы работаем</h2>

      <!-- план работы -->
      <ul class="howWeWork">
        <li class="step1">
          <div class="attr">
            <div class="num">1</div>
            <div class="icon"><img src="dist/img/img0019.png" alt=""></div>
          </div>
          <div class="title">Вы оставляете заявку</div>          
        </li>
        <li class="step2">
          <div class="attr">
            <div class="num">2</div>
            <div class="icon"><img src="dist/img/img0021.png" alt=""></div>
          </div>
          <div class="title">Мы бесплатно проводим анализ и составляем план действий по вашему делу</div>          
        </li>
        <li class="step3">
          <div class="attr">
            <div class="num">3</div>
            <div class="icon"><img src="dist/img/img0023.png" alt=""></div>
          </div>
          <div class="title">Подготовка всех необходимых юридических документов</div>          
        </li>
        <li class="step4">
          <div class="attr">
            <div class="num">4</div>
            <div class="icon"><img src="dist/img/img0022.png" alt=""></div>
          </div>
          <div class="title">Вы заключаете с нами договор</div>          
        </li>
        <li class="step5">
          <div class="attr">
            <div class="num">5</div>
            <div class="icon red"><img src="dist/img/img0018.png" alt=""></div>
          </div>
          <div class="title">Вы забываете про проблемы с кредитами, мы берем их на себя!</div>          
        </li>
      </ul>


      <!-- Форма -->
      <div class="feedback3" id="feedback3">
        <p class="line1">Запишитесь на БЕСПЛАТНУЮ консультацию прямо сейчас</p>
        <form action="mail.php" class="form-inline form-feedback" role="form">
          <input type="hidden" name="feedback" value="Нижняя форма">
          <input type="hidden" name="url" value="<?php echo $_SERVER[SERVER_NAME].$_SERVER[REQUEST_URI]; ?>">
          <div class="form-group">
            <label class="sr-only" for="inputName">Ваше имя</label>
            <input type="name" name="name" class="form-control" id="inputName" placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputTel">Ваш телефон</label>
            <input type="tel" name="tel" class="form-control" id="inputTel" placeholder="Ваш телефон">
          </div>
          <button type="submit" class="btn btn-theme">Решить проблему</button>
          <p class="footnote">* Заявки, оставленные до 10:00 и после 20:00, обрабатываются в рабочее время.</p>
        </form>
      </div>



    </div>
  </div>



  <!-- Карта -->
  <div class="map-wrap" id="contact">
    <h2>НАШИ КОНТАКТЫ</h2>
    <div class="contacts">
      <p>Санкт-Петербург <br>БЦ&nbsp;"Резон"&nbsp;ул.Всеволода&nbsp;Вишневского&nbsp;12а</p>
      <p>График работы:<br> Пн-Пт, с 10:00 до 20:00</p>
      <p>Почта: info@bezkreditoff.ru <span class="tel ya-phone">8 (800) 333-58-34</span></p>
    </div>
    <div class="map" id="map"></div>
  </div>



  <!-- Подвал -->
  <footer class="footer">
    <div class="container-theme">
      <div class="row">
        <div class="col-sm-10">

          <div class="logo logo-footer">
            <img src="dist/img/logo3.png" alt="Безкредитофф. Антикредитные решения" class="img-logo-footer">
          </div>

        </div>
        <div class="col-sm-2">
          <a href="http://qwertylab.ru/" class="ql">
            <span class="ql__line1">QwertyLab</span>
            <span class="ql__line2">Веб студия</span>
          </a>
        </div>
      </div>
      

    </div>
  </footer>


  </div>
  <div id="modal"></div>

  <section class="snob" id="snob">
    <header class="snob_title" id="snob_title"></header>
    <div class="snob_body">
      <p class="snob_desc">
        Вы так же можете записаться на наш , БЕСПЛАТНЫЙ вебинар:<br>
      </p>
      <p class="snob_name">
        <b>&#171;5 простых шагов в решении проблем с кредитами&#187;</b>
      </p> 
      <p class="snob_link"><a href="http://webinar.bezkreditoff.ru/" title="КАК ВЫБРАТЬСЯ ИЗ КРЕДИТНЫХ ДОЛГОВ ЗАКОННЫМ СПОСОБОМ" id="web_link"  target="_blank">webinar.bezkreditoff.ru</a></p>
      <span class="glyphicon glyphicon-remove snob_close"></span>
    </div>
  </section>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="dist/js/bootstrap.min.js"></script>
  <script src="dist/js/skrollr.min.js"></script>
  <script src="dist/js/skrollr.stylesheets.min.js"></script>
  <script src="dist/js/jquery.smooth-scroll.js"></script>
  <script src="dist/js/jquery.validate.min.js"></script>
  <script src="dist/js/detectmobilebrowser.js"></script>
  <script src="dist/js/map.js"></script>    <!-- <<<<<< В этом файле настраиваем Google карту -->
  <script src="dist/js/fancybox/jquery.fancybox.pack.js"></script>
  


  <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
    (function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
    try {
    w.yaCounter248 = new Ya.Metrika({id:24894563,
    webvisor:true,
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true});
    } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/24894563" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->



  <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=Do*O2dOr92zTvB29EhxpI*C28Gda4Pn2D7Ra4WDRlEHO4HHq/7HFmDqnwFfcXbPOlGGOAIuEH9vjvqeIw*NQ4j4wKHrvKLZ/arjnaR8HHRFFoe9*Iifp7n1Zae2DTfd6l9zx0C/eCXDyC6p4ngMvAGV3DwP7jP9N9CXL9eAIxSI-';</script>



  <!-- BEGIN JIVOSITE CODE {literal} -->
  <script type='text/javascript'>
  (function(){ var widget_id = 'RmgoMY2elD';
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();
  </script>
  <!-- {/literal} END JIVOSITE CODE -->

  <script>

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55289128-1', 'auto');
      ga('send', 'pageview');

  </script>
  <script src="dist/player/flowplayer.min.js"></script>
  <script src="dist/js/main.js"></script> <!-- <<<<<< В этом файле происходит вызов всех функций -->
</body>