<ol class="breadcrumb">
  <li><a href="#">Личный кабинет</a></li>
  <li  class="active">Мои объявления</li>
</ol>

<div class="row finder">
  <br>
  <a href="/ads/new" class="btn btn-primary btn-lg">Подать объявление</a>
  <div class="col-md-12">
    <div class="box">
      <h3 class="section-title more-margin"><i class="icon-tasks"></i>  Объявления</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_table1" data-toggle="tab"><i class="icon-pushpin"></i> Активные <span class="label label-success"><?php echo $adactivecount; ?></span></a></li>
         <li><a href="#tab_table2" data-toggle="tab"><i class=" icon-check"></i> Завершенные <span class="label label-warning"><?php echo $adendcount; ?></span> </a></li>
        <li><a href="#tab_table3" data-toggle="tab"><i class="icon-eye-close"></i> Блокированные <span class="label label-danger"><?php echo $adblockcount; ?></span> </a></li>
      </ul>
      <div class="tab-content bottom-margin">
        <div class="tab-pane active" id="tab_table1">
          <div class="shadowed-bottom">
            <div class="row">
              <div class="col-sm-3 bordered">
                <div class="value-block padded-left text-center">
                  <div class="value-self">520</div>
                  <div class="value-sub">Всего просмотров</div>
                </div>
              </div>
              <div class="col-sm-3 bordered">
                <div class="value-block text-center">
                  <div class="value-self">1,120</div>
                  <div class="value-sub">Total Visitors</div>
                </div>
              </div>
              <div class="widget-content">

              </div>
            </div>
          </div>
          <div class="padded">
            <div class="table-responsive">
              <table class="table table-bordered table-hover datatable">
                <thead>
                  <tr>
                    <th>
                <div class="checkbox"><input type="checkbox"></div>
                </th>
                <th>фото</th>
                <th>Заголовок</th>
                <th>Тематика</th>
                <th>Цена</th>
                <th>Активно</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($activeads as $value) {
                    // готовим проценты
                    $check_time = time() - strtotime($value->created);
                    $days = floor($check_time / 86400);
                    $daysleft = 30 - $days;
                    $percents = round($daysleft * 100 / 30);
                    if ($percents > 30) {
                      $green = $percents - 30;
                      $orange = 20;
                      $red = 10;
                    } elseif (($percents > 10) and ( $percents < 31)) {
                      $green = 0;
                      $orange = $percents - 10;
                      $red = 10;
                    } elseif ($percents < 11) {
                      $green = 0;
                      $orange = 0;
                      $red = $percents;
                    }

                    // фотки
                    $photo = ORM::factory('photos')->where('ad_id', '=', $value->id)->find();
                    echo "<tr>";
                    echo " <td><div class='checkbox'><input type='checkbox'></div></td>";
                    echo "<td>";
                    if ($photo->id > 0) {
                      echo "<img src='" . $photo->src . "'  width='50' style='-webkit-transform: rotate(" . $photo->angle . "deg); -webkit-transform-origin: 50% 50%;'/>";
                    } else {
                      echo "<a href='/ads/edit/" . $value->id . "'>Добавить фото</a> ";
                    }
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='/ads/edit/".$value->id."'>".$value->summary."</a>";
                    echo "</td>";
                    echo "<td>";
                    echo $value->type->title . " / " . $value->pettype->title . "<br>" . $value->breed->title;
                    echo "</td>";
                    echo "<td>";
                    echo $value->price . " руб.";
                    echo "</td>";
                    echo "<td width='200'>";
                    echo "<div class='progress'>
                      <div class='progress-bar progress-bar-danger' style='width: " . $red . "%'></div>
                      <div class='progress-bar progress-bar-warning progress-bar-striped' style='width: " . $orange . "%'></div>
                      <div class='progress-bar progress-bar-success' style='width: " . $green . "%'></div>
                    </div>";
                    echo "</td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab_table2">
          <div class="shadowed-bottom">
            <div class="row">
              <div class="col-sm-3 bordered">
                <div class="value-block padded-left text-center">
                  <div class="value-self">520</div>
                  <div class="value-sub">Всего просмотров</div>
                </div>
              </div>
              <div class="col-sm-3 bordered">
                <div class="value-block text-center">
                  <div class="value-self">1,120</div>
                  <div class="value-sub">Total Visitors</div>
                </div>
              </div>
              <div class="widget-content">

              </div>
            </div>
          </div>
          <div class="padded">
            <div class="table-responsive">
              <table class="table table-bordered table-hover datatable">
                <thead>
                  <tr>
                    <th>
                <div class="checkbox"><input type="checkbox"></div>
                </th>
                <th>фото</th>
                <th>Заголовок</th>
                <th>Тематика</th>
                <th>Цена</th>
                <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($endads as $value) {
                    // готовим проценты
                    $check_time = time() - strtotime($value->created);
                    $days = floor($check_time / 86400);
                    $daysleft = 30 - $days;
                    $percents = round($daysleft * 100 / 30);
                    if ($percents > 30) {
                      $green = $percents - 30;
                      $orange = 20;
                      $red = 10;
                    } elseif (($percents > 10) and ( $percents < 31)) {
                      $green = 0;
                      $orange = $percents - 10;
                      $red = 10;
                    } elseif ($percents < 11) {
                      $green = 0;
                      $orange = 0;
                      $red = $percents;
                    }

                    // фотки
                    $photo = ORM::factory('photos')->where('ad_id', '=', $value->id)->find();
                    echo "<tr>";
                    echo " <td><div class='checkbox'><input type='checkbox'></div></td>";
                    echo "<td>";
                    if ($photo->id > 0) {
                      echo "<img src='" . $photo->src . "'  width='50' style='-webkit-transform: rotate(" . $photo->angle . "deg); -webkit-transform-origin: 50% 50%;'/>";
                    } else {
                      echo "<a href='/ads/edit/" . $value->id . "'>Добавить фото</a> ";
                    }
                    echo "</td>";
                    echo "<td>";
                    echo $value->summary;
                    echo "</td>";
                    echo "<td>";
                    echo $value->type->title . " / " . $value->pettype->title . "<br>" . $value->breed->title;
                    echo "</td>";
                    echo "<td>";
                    echo $value->price . " руб.";
                    echo "</td>";
                    echo "<td width='200'>";
                    echo "<a href='/ads/activate/".$value->id."'>Активировать</a>";
                    echo "</td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="tab_table3">
          <div class="shadowed-bottom">
            <div class="row">
              <div class="col-sm-3 bordered">
                <div class="value-block padded-left text-center">
                  <div class="value-self">520</div>
                  <div class="value-sub">Всего просмотров</div>
                </div>
              </div>
              <div class="col-sm-3 bordered">
                <div class="value-block text-center">
                  <div class="value-self">1,120</div>
                  <div class="value-sub">Total Visitors</div>
                </div>
              </div>
              <div class="widget-content">
              </div>
            </div>
          </div>
          <div class="padded">
            <div class="table-responsive">
              <table class="table table-bordered table-hover datatable">
                <thead>
                  <tr>
                    <th>
                <div class="checkbox"><input type="checkbox"></div>
                </th>
                <th>фото</th>
                <th>Заголовок</th>
                <th>Тематика</th>
                <th>Цена</th>
                <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($blockads as $value) {
                    // готовим проценты
                    $check_time = time() - strtotime($value->created);
                    $days = floor($check_time / 86400);
                    $daysleft = 30 - $days;
                    $percents = round($daysleft * 100 / 30);
                    if ($percents > 30) {
                      $green = $percents - 30;
                      $orange = 20;
                      $red = 10;
                    } elseif (($percents > 10) and ( $percents < 31)) {
                      $green = 0;
                      $orange = $percents - 10;
                      $red = 10;
                    } elseif ($percents < 11) {
                      $green = 0;
                      $orange = 0;
                      $red = $percents;
                    }

                    // фотки
                    $photo = ORM::factory('photos')->where('ad_id', '=', $value->id)->find();
                    echo "<tr>";
                    echo " <td><div class='checkbox'><input type='checkbox'></div></td>";
                    echo "<td>";
                    if ($photo->id > 0) {
                      echo "<img src='" . $photo->src . "'  width='50' style='-webkit-transform: rotate(" . $photo->angle . "deg); -webkit-transform-origin: 50% 50%;'/>";
                    } else {
                      echo "<a href='/ads/edit/" . $value->id . "'>Добавить фото</a> ";
                    }
                    echo "</td>";
                    echo "<td>";
                    echo $value->summary;
                    echo "</td>";
                    echo "<td>";
                    echo $value->type->title . " / " . $value->pettype->title . "<br>" . $value->breed->title;
                    echo "</td>";
                    echo "<td>";
                    echo $value->price . " руб.";
                    echo "</td>";
                    echo "<td width='200'>";
                    echo "<div class='progress'>
                      <div class='progress-bar progress-bar-danger' style='width: " . $red . "%'></div>
                      <div class='progress-bar progress-bar-warning progress-bar-striped' style='width: " . $orange . "%'></div>
                      <div class='progress-bar progress-bar-success' style='width: " . $green . "%'></div>
                    </div>";
                    echo "</td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--<script type="text/javascript" src='/fe/jsfile3.js'></script>-->

<!--<div class="row">
    <div id="map" class="col-md-12" style='height: 200px;' ><br><br></div>
</div>-->
