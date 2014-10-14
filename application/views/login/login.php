<div class="widget widget-blue">
  <div class="widget-title">
    <h3 class="text-center"><i class="icon-lock"></i> Вход в Unipets.ru</h3>
  </div>
  <div class="widget-content">
    <form action="/login/testreg" role="form" method="POST" id="login-form-2">
      <?php 
          if ($error == 1 ){
            // ошибка
            echo "<div class='alert alert-danger alert-dismissable'>
              <i class='icon-remove-sign'></i> <strong>Внимание!</strong> Пользователь с такой комбинацией логина и пароля не найден.
            </div>";
          }
          if ($error == 2 ){
            // ошибка
            echo "<div class='alert alert-danger alert-dismissable'>
              <i class='icon-remove-sign'></i> <strong>Внимание!</strong> Адрес который вы указали не найден.
            </div>";
          }
          if ($error == 3 ){
            // ошибка
            echo "<div class='alert alert-danger alert-dismissable'>
              <i class='icon-remove-sign'></i> <strong>Внимание!</strong> Ключ для восстановление пароля не верен.
            </div>";
          }
           if ($error == 4 ){
            // ошибка
            echo "<div class='alert alert-warning alert-dismissable'>
              <i class='icon-remove-sign'></i> <strong>Внимание!</strong> Для продолжения восстанолвения пароля - проверьте почту.
            </div>";
          }
          ?>
      <div class="lined-separator">Введите логин/пароль</div>
      <div class="form-group relative-w">
        <input type="email" class="form-control" name="email" placeholder="Введите email">
        <i class="icon-envelope-alt input-abs-icon"></i>
      </div>
      <div class="form-group relative-w">
        <input type="password" class="form-control" name="pass"  placeholder="Пароль">
        <i class="icon-lock input-abs-icon"></i>
      </div>
      <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Запомнить меня
          </label>
        </div>
      </div>
       <input type="submit" value="Вход" class="btn btn-success btn-rounded"/>
      <div class="no-account-yet">
        У вас еще нет аккаунта? <a href="/login/reg">Зарегистрироваться сейчас</a>
      </div>
       <div class="no-account-yet">
         <a href="/login/recovery">Забыли пароль?</a>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
