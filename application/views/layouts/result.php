<?php
if ($countall == 0) {
  //  ничего не пришло
  ?>
  <div class="col-lg-12">
    <div class="alert alert-info ">
      <i class="icon-search"></i> <strong>Упс..</strong> К сожалению, по Вашему критерию поиска ничего не найдено.

    </div>
  </div>
  <?php
} else {
  ?>
  <div class="col-lg-9">
    <table class="table  table-hover">
      <tbody>
        <?php
        foreach ($result as $value) {
          $photo = ORM::factory('photos')->where('ad_id', '=', $value['id'])->find();
          $photocount = ORM::factory('photos')->where('ad_id', '=', $value['id'])->count_all();
          echo "<tr>";
          echo "<td width='10%'>";
          echo "сегодня <br>21:20";
          echo "</td>";
          echo "<td align='center'  width='20%'>";
          echo "<a href='/ads/item/" . $value['id'] . "_" . $value['lat'] . "'>";
          if ($photocount > 1) {
            echo "<i class='iphoto' >" . $photocount . "</i>";
          }
          echo "<img src='" . $photo->src . "'  width='150' style='-webkit-transform: rotate(" . $photo->angle . "deg); -webkit-transform-origin: 50% 50%;'/></a>";
          echo "</td>";
          echo "<td>";
          echo "<h1><a href='/ads/item/" . $value['id'] . "_" . $value['lat'] . "'>" . $value['summary'] . "</a></h1>";
          echo "<h3>" . $value['price'] . " руб.</h3>";
//          echo "<h5>" . $value->type->title . " | " . $value->pettype->title . "</h5>";
//          echo " ( " . $value->region->title . " | " . $value->city->title . " ) ";
          echo "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>


    <?php
    if ($countall > 0) {
      // ничего не нашли
      echo "Показана " . $limit . " записей из " . $countall;
      $prev = $p - 1;
      $prevprev = $p - 2;
      $prevprevprev = $p - 3;
      $next = $p + 1; // 3
      $nextnext = $p + 2; // 4
      $nextnextnext = $p + 3; //5
      $tochki = $p + 4; //6
      $prev = $p - 1; // есть всегда
      $changeLangUrl = (strpos($_SERVER["REQUEST_URI"], '?')) ? $_SERVER["REQUEST_URI"] . "&" : $_SERVER["REQUEST_URI"] . "?";
//          echo $changeLangUrl;
      // режим не поиска
      echo "<div class = ''>";

      if ($prev >= 0) {
        echo "<a class='btn btn-default' href='" . $changeLangUrl . "p=" . $prev . "'>Сюда</a>";
      } else {
        echo "<a  class='btn btn-default' href='#'>Сюда</a>";
      }

      if ($prevprevprev >= 0) {
        echo "<a class='btn btn-default' href='" . $changeLangUrl . "p=" . $prevprevprev . "'>" . $prevprevprev . "</a>";
      }
      if ($prevprev >= 0) {
        echo "<a class='btn btn-default' href='" . $changeLangUrl . "p=" . $prevprev . "'>" . $prevprev . "</a>";
      }
      if ($prev >= 0) {
        echo "<a class='btn btn-default' href='" . $changeLangUrl . "p=" . $prev . "'>" . $prev . "</a>";
      }
      echo "<a class='btn btn-default active' href='#'>" . $p . "</a></li>";
      if ($pages > $next) {
        // следующая страница есть
        echo "<a class='btn btn-default'  href='" . $changeLangUrl . "p=" . $next . "'>" . $next . "</a>";
      }
      if ($pages > $nextnext) {
        // следующая страница есть
        echo "<a class='btn btn-default'  href='" . $changeLangUrl . "p=" . $nextnext . "'>" . $nextnext . "</a>";
      }
      if ($pages > $nextnextnext) {
        // следующая страница есть
        echo "<a class='btn btn-default'  href='" . $changeLangUrl . "p=" . $nextnextnext . "'>" . $nextnextnext . "</a>";
      }
      if ($pages > $tochki) {
        // следующая страница есть
        echo "<a class='btn btn-default'  href='" . $changeLangUrl . "'>...</a>";
      }
      if ($pages == $p) {
        // эта последняя страница
        echo "<a  class='btn btn-default' href='" . $changeLangUrl . "'>Туда</a>";
      } else {
        echo "<a  class='btn btn-default' href='" . $changeLangUrl . "p=" . $pages . "'>" . $pages . "</a>";
        echo "<a  class='btn btn-default' href='" . $changeLangUrl . "p=" . $next . "'>Туда</a>";
      }
      echo "</div>";
    }
    ?>
    <br><br>
  </div>
  <div class="col-lg-3">

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
          <div class="btn-toolbar">
            <div class="btn-group">
              <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                Large button <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
          </div>
          <div class="btn-toolbar">
            <div class="btn-group">
              <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                Small button <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
          </div>
          <div class="btn-toolbar">
            <div class="btn-group">
              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                Extra small button <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php
}
?>


