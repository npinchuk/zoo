<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Common2 {

  public function action_login() {
    // находим вьюшку
    $content = View::factory('/login/login');
    // если прилетает ошибка 
    $id = $this->request->param('id');
    if (isset($id)) {
      // если ошибка есть отправляем ее во вьюху
      $content->error = $id;
    } else {
      $content->error = 0;
    }
    $this->template->content = $content;
    $this->template->title = "Вход в Unipets"; // название страницы
    $this->template->keywords = "Вход в Unipets"; // название страницы
  }

  public function action_recovery() {
    $content = View::factory('/login/recovery');
    $this->template->content = $content;
  }

  public function action_newpass() {
    $content = View::factory('/login/newpass');
    $id = $this->request->param('id');
    $find = ORM::factory('users')->where('recovery', '=', $id)->find();
    if ($find->id > 0) {
      $content->email = $find->email;
      $content->recovery = $find->recovery;
      $this->template->content = $content;
    } else {
      $content = View::factory('/login/login/3');
    }
  }

  public function action_savepass() {
    $session = Session::instance();
    $find = ORM::factory('users')->where('email', '=', $_POST['email'])->and_where('recovery', '=', $_POST['recovery'])->find();
    $find->pass = $_POST['pass'];
    $find->recovery = 0;
    $find->update();
    // отправляем на почту активацию
    $email_to = $_POST['email'];
    $email_from = 'nikitos_push@mail.ru';
    $email_subject = 'Пароль восстановлен ';
    $headers = 'From: nikitos_push@mail.ru' . "\r\n" .
            'Reply-To: nikitos_push@mail.ru' . "\r\n" .
            'Content-type: text/html; charset=utf-8' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
//      $headers = 'From: ' . $email_from . "\r\n" .
//              'Reply-To: ' . $email_from . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $email_message = "Здравствуйте!<br><p>Это письмо вы получили так был создан новый пароль для входа. Возможно это сделали вы. Если это не так, напишите нам на элеткронную почту. </p>";

    mail($email_to, $email_subject, $email_message, $headers);
    $session->set("usid", $find->id);
    $session->set("ustitle", $find->name);
    $session->set("ustype_id", $find->ustype_id);
    Controller::redirect('/');
  }

  public function action_resend() {
    $find = ORM::factory('users')->where('email', '=', $_POST['email'])->find();
    if ($find->id > 0) {
      // готовим рековери метку
      $megasave = $find->name . $find->email . $find->pass . "немного соли...";
      $megasave = md5(md5($megasave));
      $find->recovery = $megasave;
      $find->update();

      // отправляем на почту активацию
      $email_to = $_POST['email'];
      $email_from = 'nikitos_push@mail.ru';
      $email_subject = 'Восстановление пароля ';
      $headers = 'From: nikitos_push@mail.ru' . "\r\n" .
              'Reply-To: nikitos_push@mail.ru' . "\r\n" .
              'Content-type: text/html; charset=utf-8' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
//      $headers = 'From: ' . $email_from . "\r\n" .
//              'Reply-To: ' . $email_from . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

      $email_message = "Здравствуйте!<br><p>Это письмо вы получили так был сделан запрос на восстановление пароля. Возможно это сделали вы. Чтобы ввести новый пароль, перейдите по ссылке <a href='http://zoo.cannonman.ru/login/newpass/" . $megasave . "'>сюда</a></p>";

      mail($email_to, $email_subject, $email_message, $headers);
      Controller::redirect('/login/login/4');
    } else {
      // нет такого
      Controller::redirect('/login/login/2');
    }
  }

  public function action_reg() {
    $content = View::factory('/login/reg');
    $id = $this->request->param('id');
    
    if (isset($id)) {
      $content->error = $id;
    } else {
      $content->error = 0;
    }
    $this->template->content = $content;
    $this->template->title = "Вход в Unipets"; // название страницы
    $this->template->keywords = "Вход в Unipets"; // название страницы
  }

  public function action_savereg() {
    $content = View::factory('/login/reg');
    if ($_POST['pass'] <> $_POST['pass2']) {
      Controller::redirect('/login/reg/2');
    }
    $check = ORM::factory('users')->where('email', '=', $_POST['email'])->find();
    if ($check->id > 0) {
      // такой пользователь уже есть
      Controller::redirect('/login/reg/1');
    } else {
      
      $_POST['pass'] = md5($_POST['pass']);
      $_POST['created'] = date("Y-m-d H:i:s");
      if (isset($_POST['title'])) {
        // случай компании
        $_POST['ustype_id'] = 2;
      } else {
        $_POST['ustype_id'] = 1;
      }
      // готовим хэш для активации по почте
      $megasave = $_POST['name'] . $_POST['lastname'] . $_POST['email'];
      $megasave = md5($megasave);
      $_POST['megasave'] = $megasave;
      $save = ORM::factory('users')->values($_POST)->save();
      // отправляем на почту активацию
      $email_to = $_POST['email'];
      $email_from = 'nikitos_push@mail.ru';
      $email_subject = 'Регистрация на сайте Unipets.ru ';
      $headers = 'From: info@unipets.ru' . "\r\n" .
              'Reply-To: info@unipets.ru' . "\r\n" .
              'Content-type: text/html; charset=utf-8' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $email_message = "Здравствуйте, " . $_POST['name'] . "!<br><p>Это письмо вы получили при регистрации на сайте Unipets.ru. Чтобы активировать вашу запись, нажимте <a href='http://unipets.ru/login/check/" . $megasave . "'>сюда</a></p>";
      mail($email_to, $email_subject, $email_message, $headers);
      
      
      $session = Session::instance();
      $session->set('usid', $save->id);
      $session->set('ustitle', $save->name." ".$save->lastname);
      $session->set('ustype_id', $save->ustype_id);
      $session->set("ustype_id", $check->ustype_id);
      $session->set("activated", $check->activated);
      $session->set("email", $check->email);
      $session->set("region_id", $check->region_id);
      $session->set("city_id", $check->city_id);
      $session->set("emailactive", $check->emailactive);
      $session->set("phoneactive", $check->phoneactive);
      $session->set("ustype_id", $check->ustype_id);
      $session->set("phone", $check->phone);
      Controller::redirect('/');
    }
    $this->template->content = $content;
  }

  public function action_testreg() {
    $session = Session::instance();
    $_POST['pass'] = md5($_POST['password']);
    $check = ORM::factory('users')->where('email', '=', $_POST['email'])->where('pass', '=', $_POST['pass'])->find();
    if ($check->id > 0) {
      // OK. передаем данные в куку чтобы потом было легче жить.
      $session->set("usid", $check->id);
      $session->set("ustitle", $check->name." ".$check->lastname);
      $session->set("company", $check->company);
      $session->set("ustype_id", $check->ustype_id);
      $session->set("activated", $check->activated);
      $session->set("email", $check->email);
      $session->set("region_id", $check->region_id);
      $session->set("city_id", $check->city_id);
      $session->set("emailactive", $check->emailactive);
      $session->set("phoneactive", $check->phoneactive);
      $session->set("ustype_id", $check->ustype_id);
      $session->set("phone", $check->phone);
      Controller::redirect('/');
    } else {
      // такого нет
      Controller::redirect('/login/login/1');
    }
  }

  public function action_check() {
    $session = Session::instance();
    $id = $this->request->param('id');
    $check = ORM::factory('users')->where('megasave', '=', $id)->find();
    if ($check->id > 0) {
      // OK
      $content = View::factory('/login/check');
      $session->set("usid", $check->id);
      $session->set("ustitle", $check->name);
      $session->set("ustype_id", $check->ustype_id);
      $check->activated = 1;
      $check->emailactive = 1;
      $check->update();
      $content->check = $check;
      $this->template->content = $content;
    } else {
      // такого нет
      Controller::redirect('/login/login/1');
    }
  }

  public function action_logout() {
    // проверяем
    $session = Session::instance();
    $session->destroy();
    Controller::redirect('/');
  }

}

// End Page
