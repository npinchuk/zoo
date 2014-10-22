<div class="content">
  <div class="container"> 

    <!-- Middle Content Start -->

    <div class="vd_content-wrapper" >
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_register-page">
              <div class="heading clearfix">
                <div class="logo">
                  <h2 class="mgbt-xs-5"><img src="/fe/img/logo.png" alt="logo"></h2>
                </div>
                <h4 class="text-center font-semibold vd_grey">Регистрация</h4>
              </div>
              <div class="panel widget">
                <div class="panel-body">
<!--                  <div id="register-success" class="alert alert-success" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Registration confirmation has been sent to your email </div>
                  <div id="register-passerror" class="alert alert-danger" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Your password and Confirm password are not same </div>-->
                  <form class="form-horizontal"  action="/login/savereg" role="form" method="POST" id="register-form">
                    <div class="alert alert-danger 
                         <?php 
                         if ($error <> 1) {
                           echo "vd_hidden";
                         }
                         ?>
                         
                         
                         ">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                      <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Ошибка!</strong> Пользователь с таким адресом электронной почты уже существует</div>
                    <div class="alert alert-warning 
                         <?php 
                         if ($error <> 2) {
                           echo "vd_hidden";
                         }
                         ?>
                         ">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                      <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span>Пароли не совпадают </div>                    
                    <div class="alert alert-success vd_hidden">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                      <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span>Registration confirmation has been sent to your email. </div>                  
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Ваше имя <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="first-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="Имя" value="имя1" class="required" required name="name" id="name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Ваша фамилия <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="last-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="Фамилия" class="required" value='фамилия' required name="lastname" id="lastname">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Название компании (если вы юр лицо)<span class="vd_red"></span></label>
                        </div>
                        <div class="vd_input-wrapper" id="company-input-wrapper"> <span class="menu-icon"> <i class="fa fa-briefcase"></i> </span>
                          <input type="text" placeholder="ООО 'Собачка'" class="required" value='ооо капуста' required  name="company" id="company">
                        </div>
                      </div>
                    </div>
                    <div class="form-group ">
                     
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Телефон <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper no-icon" id="phone-input-wrapper">
                          <input type="number" placeholder="Phone Number" class="required" value='8282828' required  name="phone" id="phone">
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Email <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="email" placeholder="Email" class="required" value='nik@nik.su' required  name="email" id="email">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Пароль <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Пароль" class="required" value='123' required  name="pass" id="password">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Пароль еще раз <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="confirm-password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="подтверждение пароля" class="required" value='123' required  name="pass2" id="confirmpass">
                        </div>
                      </div>
                    </div>
                    <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
                    <div class="form-group">
                      <div class="col-md-12 mgbt-xs-10 mgtp-20">
                        <div class="vd_checkbox">
                          <input type="checkbox" id="checkbox-1" value="1">
                          <label for="checkbox-1"> Подписаться на обновления</label>
                        </div>
                        <div class="vd_checkbox">
                          <input type="checkbox" id="checkbox-2" value="1" required name="checkbox-2">
                          <label for="checkbox-2"> Я соглашаюсь с <a href="#">правилами</a> пользования сервиса Unipets.ru</label>
                        </div>
                      </div>
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-register" name="submit-register">Регистрация</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
              <div class="register-panel text-center font-semibold"> Уже есть аккаунт? <br/>
                <a href="/login/login">Войти<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
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