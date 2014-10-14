<div class="sub-sidebar-wrapper">
  <ul class="nav">
    <?php
    if ($usid > 0) {
      echo "<li class='active'><a href='/'>Поиск</a></li>";
      echo "<li><a href='/ads/list'>Мои объявления</a></li>";
      echo "<li><a href='/profile/view'>Моя страница</a></li>";
      echo "<li><a href='/login/logout'>Выход</a></li>";
    } else {
      echo "<li><a href='/login/login'>Вход</a></li>";
    }
    ?>

  
  </ul>
  <br>
  <div class="col-lg-12">
  <div class="widget widget-blue" id="widget_stats">
      <div class="widget-title">
        <div class="widget-controls">
          <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
            <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="icon-cog"></i></a>
            <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
              <li class="dropdown-header">Set Widget Color</li>
              <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
              <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
              <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
              <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
              <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
            </ul>
          </div>
          <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="icon-refresh"></i></a>
          <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="icon-minus-sign"></i></a>
          <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="icon-remove-sign"></i></a>
        </div>
        <h3><i class="icon-bar-chart"></i> Button Dropdowns</h3>
      </div>
      <div class="widget-content">
        <div class="bs-example">
          
          
          fdsfsda
        </div>
      </div>
    </div>
    </div>
</div>