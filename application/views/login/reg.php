
<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_pie_chart" data-toggle="tab"><i class="icon-user"></i> Частое лицо</a></li>
      <li><a href="#tab_bar_chart" data-toggle="tab"><i class="icon-briefcase"></i> Компания</a></li>
    </ul>
    <div class="tab-content bottom-margin">
      <div class="tab-pane active" id="tab_pie_chart">
        <div class="widget widget-blue">

          <div class="widget-content">
            <?php
            if ($error == 1) {
              // такой пользователь уже есть
              echo "<div class='alert alert-danger alert-dismissable'>
              <i class='icon-remove-sign'></i> <strong>Внимание!</strong> Пользователь с таким адресом электронной почты уже существует. <strong><a href='/login/recovery'>Забыли пароль?</a></strong>
            </div>";
            }
            ?>
            <form action="/login/savereg"  method="POST" role="form">
              <div class="form-group relative-w  ">
                <input type="text" class="form-control regname" name="manager" required placeholder="Контактное лицо" />
                <i class="icon-user input-abs-icon"></i>
                <p class="help-block regnamealert">Ваше имя</p>
              </div>
              <div class="form-group relative-w  ">
                <input type="text" class="form-control regphone"  name="phone" required placeholder="Ваш телефон" />
                <i class="icon-phone input-abs-icon"></i>
                <p class="help-block regphonealert ">Укажите номер телефона </p>
              </div>
              <br>
              <div class="form-group relative-w">
                <input type="email" class="form-control regemail" name="email" required placeholder="Ваш Email" />
                <i class="icon-envelope-alt input-abs-icon"></i>
                <p class="help-block has-error regemailalert">Ваш адрес элекронной почты</p>
              </div>
              <div class="form-group relative-w">
                <input type="password" class="form-control regpass"  name="pass"  required placeholder="Пароль" />
                <i class="icon-lock input-abs-icon"></i>
                <p class="help-block has-error regpassalert">Ваш пароль</p>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" checked> Я согласен с <a href="#">правилами</a> и  <a href="#">условиями политики безопасности</a>.
                  </label>
                </div>
              </div>
              <input type="submit" value="Зарегистрироваться" class="btn btn-success btn-rounded regsave"/>
              <div class="no-account-yet">
                У Вас уже есть аккаунт? <a href="/login/login">Войти</a>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tab_bar_chart">
        <div class="widget widget-blue">
          <div class="widget-content">
            <?php
            if ($error == 1) {
              // такой пользователь уже есть
              echo "<div class='alert alert-danger alert-dismissable'>
              <i class='icon-remove-sign'></i> <strong>Внимание!</strong> Пользователь с таким адресом электронной почты уже существует. <strong><a href='/login/recovery'>Забыли пароль?</a></strong>
            </div>";
            }
            ?>
            <form action="/login/savereg"  method="POST" role="form">
              <div class="form-group relative-w">
                <input type="text" class="form-control" name="title" required placeholder="Название компании" />
                <i class="icon-user input-abs-icon"></i>
              </div>
              <div class="form-group relative-w">
                <input type="text" class="form-control" name="manager" required placeholder="Контактное лицо" />
                <i class="icon-user input-abs-icon"></i>
              </div>
              <div class="input-group">
                <span class="input-group-addon">+7</span>
                <input type="text" class="form-control"  name="phone" required placeholder="Ваш телефон" />
                <i class="icon-phone input-abs-icon"></i>
              </div>
              <br>
              <div class="form-group relative-w">
                <input type="email" class="form-control" name="email" required placeholder="Ваш Email" />
                <i class="icon-envelope-alt input-abs-icon"></i>
              </div>
              <div class="form-group relative-w">
                <input type="password" class="form-control"  name="pass"  required placeholder="Пароль" />
                <i class="icon-lock input-abs-icon"></i>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Я согласен с <a href="#">правилами</a> и  <a href="#">условиями политики безопасности</a>.
                  </label>
                </div>
              </div>
              <input type="submit" value="Зарегистрироваться" class="btn btn-success btn-rounded"/>
              <div class="no-account-yet">
                У Вас уже есть аккаунт? <a href="/login/login">Войти</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/fe/js/login.js" type="text/javascript"></script>

