<div class="sub-sidebar-wrapper">
  <ul class="nav">
    <?php
    if ($usid > 0) {
      echo "<li><a href='/'>Поиск</a></li>";
      echo "<li class='active'><a href='/ads/list'>Мои объявления</a></li>";
      echo "<li><a href='/login/logout'>Выход</a></li>";
      
    } else {
      echo "<li><a href='/login/login'>Вход</a></li>";
    }
    ?>

    
  </ul>
</div>