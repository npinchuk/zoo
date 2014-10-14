<div class="widget widget-blue">
  <div class="widget-title">
    <h3 class="text-center"><i class="icon-lock"></i> Введите новый пароль</h3>
  </div>
  <div class="widget-content">
    <form action="/login/savepass" role="form" method="POST" id="login-form-2">
      
      <div class="lined-separator">Новый пароль для учетной записи с почтой <?php echo $email;?></div>
      <div class="form-group relative-w">
        <input type="hidden" class="form-control" name="email"  value="<?php echo $email;?>">
        <input type="hidden" class="form-control" name="recovery"  value="<?php echo $recovery;?>">
        
        <i class="icon-user input-abs-icon"></i>
      </div>
      <div class="form-group relative-w">
        <input type="text" class="form-control"  placeholder="Введите новый пароль" name="pass" >
        
        <i class="icon-user input-abs-icon"></i>
      </div>
      <input type="submit" value="Восстановить пароль" class="btn btn-success btn-rounded"/>
      <div class="no-account-yet">
        <a href="/login/login">Войти с новым паролем</a>
      </div>
     
    </form>
  </div>
</div>
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
