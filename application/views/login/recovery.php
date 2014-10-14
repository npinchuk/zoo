<div class="widget widget-blue">
  <div class="widget-title">
    <h3 class="text-center"><i class="icon-lock"></i> Восстановление пароля</h3>
  </div>
  <div class="widget-content">
    <form action="/login/resend" role="form" method="POST" id="login-form-2">
      
      <div class="lined-separator">Введите ваш email</div>
      <div class="form-group relative-w">
        <input type="text" class="form-control" name="email" placeholder="Введите email">
        <i class="icon-user input-abs-icon"></i>
      </div>
      <input type="submit" value="Восстановить пароль" class="btn btn-success btn-rounded"/>
      <div class="no-account-yet">
        У вас еще нет аккаунта? <a href="/login/reg">Зарегистрироваться сейчас</a>
      </div>
      <div class="no-account-yet">
        <a href="/login/login">Вход</a>
      </div>
     
    </form>
  </div>
</div>
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
