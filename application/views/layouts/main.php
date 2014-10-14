<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='stylesheet' href='/fe/style1.css'>
    <link rel='stylesheet' href='/fe/css/style.css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300|Roboto:100,300,400,700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    <link href="/fe/assets/favicon.ico" rel="shortcut icon">
    <link href="/fe/assets/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/engine1/style.css" />
    <script src="/fe/js/yandexapi.js" type="text/javascript"></script>
    <script src="/fe/js/googleapis.js"></script>

    <script type="text/javascript">
      ymaps.ready(init);

      function init() {
        var geolocation = ymaps.geolocation,
                myMap = new ymaps.Map('map', {
                  center: [55, 34],
                  zoom: 10
                });

        // Сравним положение, вычисленное по ip пользователя и
        // положение, вычисленное средствами браузера.
        geolocation.get({
          provider: 'yandex',
          mapStateAutoApply: true
        }).then(function (result) {
          // Красным цветом пометим положение, вычисленное через ip.
          result.geoObjects.options.set('preset', 'islands#redCircleIcon');
          myMap.geoObjects.add(result.geoObjects);
        });

        geolocation.get({
          provider: 'browser',
          mapStateAutoApply: true
        }).then(function (result) {
          // Синим цветом пометим положение, полученное через браузер.
          // Если браузер не поддерживает эту функциональность, метка не будет добавлена на карту.
          result.geoObjects.options.set('preset', 'islands#blueCircleIcon');
          myMap.geoObjects.add(result.geoObjects);
        });
      }
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      @javascript html5shiv respond.min
    <![endif]-->
    <title><?php echo $pagetitle; ?></title>
  </head>
  <body>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
          try {
            w.yaCounter25789262 = new Ya.Metrika({id: 25789262,
              webvisor: true,
              clickmap: true,
              trackLinks: true,
              accurateTrackBounce: true});
          } catch (e) {
          }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                  n.parentNode.insertBefore(s, n);
                };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
          d.addEventListener("DOMContentLoaded", f, false);
        } else {
          f();
        }
      })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/25789262" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <div class="all-wrapper fixed-header left-menu">
      <div class="page-header">
        <div class="header-links hidden-xs">
          <!--        <div class="top-search-w pull-right">
                    <input type="text" class="top-search" placeholder="Search"/>
                  </div>-->
          <div class="dropdown hidden-sm hidden-xs">
            <a href="/ads/new" class="header-link "><span class="btn btn-danger ">Подать объявление</a></a>
          </div>
          <?php
          if ($usid > 0) {
            ?>
            <div class="dropdown hidden-sm hidden-xs">
              <a href="#" data-toggle="dropdown" class="header-link"><i class="icon-inbox"></i> Сообщения <span class="badge alert-animated">5</span></a>
            </div>
            <div class="dropdown hidden-sm hidden-xs">
              <a href="#" data-toggle="dropdown" class="header-link"><i class="icon-cog"></i> Уведомления </a>
            </div>
            <?php
          }
          ?>

          <div class="dropdown">
            <?php
            if ($usid > 0) {
              ?>
              <a href="#" class="header-link clearfix" data-toggle="dropdown">
                <div class="avatar">
                  <img src="/fe/assets/images/avatar-small.jpg" alt="">
                </div>
                <div class="user-name-w">
                  Профиль <i class="icon-caret-down"></i>
                </div>
              </a>
              <ul class="dropdown-menu">
                <li><a href="/user/profile">Профиль</a></li>
                <li><a href="/ads/list">Мои объявления</a></li>
                <li><a href="/ads/new">Подать объявление</a></li>
                <li><a href="/login/logout">Выход</a></li>
              </ul>
              <?php
            } else {
              ?>
              <a href="#" class="header-link clearfix" data-toggle="dropdown">
                <div class="avatar">
                  <img src="/fe/assets/images/avatar-small.jpg" alt="">
                </div>
                <div class="user-name-w">
                  Войти <i class="icon-caret-down"></i>
                </div>
              </a>
              <ul class="dropdown-menu">
                <li><a href="/login/login">Вход</a></li>
                <li><a href="/login/reg">Регистрация</a></li>
              </ul>
              <?php
            }
            ?>
          </div>
        </div>
        <img src="/images/small.png" class="logotip" />
<!--        <a class="menu-toggler" href="#"><i class="icon-reorder"></i></a>-->
        <h1><?php //echo $pagetitle;     ?></h1>
      </div>       
      <?php
      echo $nav;
      ?>
      <div class="main-content">

        <?php
        // чтобы была только одна ошибка и не грузила сделаем проверку
        $errorscount = 0;
        if ($phoneactive == '0') {
          // не активирован телефон
          echo "<div class='alert alert-warning alert-dismissable bottom-margin'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
          <i class='icon-exclamation-sign'></i> <strong>Не подтвержден телефон</strong> К сожалению, указанный вами номер телефона еще не подтвержден. Поэтому вы не можете добавить объявления. <a href='#'>Нажмите сюда чтобы подтвердить свой номер</a>
        </div>";
          $errorscount++;
        }
        if ($errorscount == 0) {
          if ($emailactive == '0') {
            // не активирован телефон
            echo "<div class='alert alert-warning alert-dismissable bottom-margin'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
          <i class='icon-exclamation-sign'></i> <strong>Не подтвержден адрес электронной почты</strong> К сожалению, указанный вами адрес элекронной почты еще не подтвержден. Поэтому вы не можете добавить объявления. <a href='#'>Нажмите сюда чтобы подтвердить свой номер</a>
        </div>";
             $errorscount++;
          }
        }
        
        
        
        ?>
        <?php echo $content; ?>
      </div>
      <div class="page-footer">
        UNIPETS.RU ©  2014 
      </div>
    </div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/engine1/wowslider.js"></script>
    <script type="text/javascript" src="/engine1/script.js"></script>
    <script type="text/javascript" src="/fe/js/jQueryRotate.js"></script>
    <script type="text/javascript" src="/fe/js/jQueryRotateCompressed.js"></script>
    <script type="text/javascript" src='/fe/jsfile1.js'></script>
    <script type="text/javascript" src='/fe/jsfile4.js'></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!--<script type="text/javascript" src='/fe/jsfile2.js'></script>-->
    <script type="text/javascript" src='/fe/js/ajax.js'></script>
    <!--<script type="text/javascript" src='/fe/js/dropzone.js'></script>-->
    <!--<script type="text/javascript" src='/fe/js/xmltojson.js'></script>-->

  </body>

</html>