<div class="sub-sidebar-wrapper">
  <ul class="nav">
    <?php
    if ($ustype_id == 1) {
      echo "<li><a href='/admin/removetmpads'>Удалить все верменные объявления</a></li>";
      echo "<li><a href='/admin/finishads'>Завершить объявления</a></li>";
      echo "<li><a href='/admin/adlist'>Все объявления</a></li>";
      echo "<li><a href='/admin/searchindex/1'>Прогнать скрипт для поиска</a></li>";
      echo "<li><a href='/'>Настройки</a></li>";
      
    } else {
      echo "<li><a href='/login/login'>Вход</a></li>";
    }
    ?>


  </ul>
</div>