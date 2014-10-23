<div class="content">
  <div class="container"> 
    <!-- Middle Content Start -->
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_login-page">
              <div class="heading clearfix">
                <div class="logo">
                  <h2 class="mgbt-xs-5"><img src="/fe/img/logo.png" alt="logo"></h2>
                </div>
                <h4 class="text-center font-semibold vd_grey">Авторизация в Unipets</h4>
              </div>
              <div class="panel widget">
                <div class="panel-body">
                  <div class="login-icon entypo-icon"> <i class="icon-key"></i> </div>
                  <form class="form-horizontal" id="login-form" action="/login/testreg" role="form" method="POST">
                    <div class="alert alert-danger 
                         <?php 
                         if ($error == 0) {
                           echo "vd_hidden";
                         }
                         ?>
                        
                         
                         ">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                      <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Ошибка!</strong> Войти не удалось</div>
                    
                    <div class="form-group  mgbt-xs-20">
                      <div class="col-md-12">
                        <div class="label-wrapper sr-only">
                          <label class="control-label" for="email">Email</label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="email" placeholder="Email" id="email" name="email" class="required" required>
                        </div>
                        <div class="label-wrapper">
                          <label class="control-label sr-only" for="password">Пароль</label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper" > <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Пароль" id="password" name="password" class="required" required>
                        </div>
                      </div>
                    </div>
                    <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Пожлауйста заполните все поля</div>
                    <div class="form-group">
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="login-submit">Войти</button>
                      </div>
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-xs-6">
                            <div class="vd_checkbox">
                              <input type="checkbox" id="checkbox-1" value="1">
                              <label for="checkbox-1"> Запомнить</label>
                            </div>
                          </div>
                          <div class="col-xs-6 text-right">
                            <div class=""> <a href="/login/recovery">Забыли пароль? </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
              <div class="register-panel text-center font-semibold"> <a href="/login/reg">Создать аккаунт<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
            </div>
            <!-- vd_login-page --> 

          </div>
          <!-- .vd_content-section --> 

        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 

    <!-- Middle Content End --> 

  </div>
  <!-- .container --> 
</div>
<!-- .content -->
