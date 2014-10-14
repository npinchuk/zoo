       
<ol class="breadcrumb">
  <li><a href="#">Гланвая</a></li>
  <li><a href="#">Поиск</a></li>
  <li><a href="#">Результаты поиска</a></li>
  <li class="active"><?php echo $ad->summary;?></li>
</ol>

<div class="row finder">
  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <div class="widget-controls">
          <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Обновить результаты поиска"><i class="icon-refresh"></i></a>
          <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="icon-minus-sign"></i></a>
<!--          <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="icon-remove-sign"></i></a>-->
        </div>
        <h3><i class="icon-ok-sign"></i> <?php echo $ad->summary; ?></h3>
      </div>
      <div class="widget-content itembody">
        <div class="row ">
          <?php
          if (isset($photos[0])) {
            ?>
            <div class="col-md-5 " >
              <div id="wowslider-container1">
                <div class="ws_images">
                  <ul>
                    <?php
                    $i = 0;
                    $j = 1;
                    foreach ($photos as $value) {
                      echo "<li><img src='" . $value->src . "' alt='" . $j . "' title='" . $j . "'  id='wows1_" . $i . "'/></li>";
                      $i++;
                      $j++;
                    }
                    ?>
                  </ul>
                </div>
                <div class="ws_thumbs">
                  <div>
                    <?php
                    $i = 0;
                    $j = 1;
                    foreach ($photos as $value) {
                      echo "<a href='#' title='" . $j . "'><img src='" . $value->src . "' alt='" . $j . "'/>" . $j . "</a>";
                      $i++;
                      $j++;
                    }
                    ?>
                  </div>
                </div>
                <div class="ws_shadow"></div>
              </div>	
            </div>

            <?php
          }
          ?>


          <div class="col-md-12 " >
            <?php
            echo "<div class='col-md-6 ' >";
            echo "<h1>" . $ad->summary . "</h1> Цена: <span class='itemprice'>" . $ad->price . " руб</span><hr>";
            echo "<p class='itemcat'>Категория: <a href='#'>" . $ad->type->title . "</a> | <a href=''>" . $ad->pettype->title . "</a></p><hr>";
            echo "<span class='gray'>Описание: </span><h3>" . $ad->body . "</h3><hr>";
            echo "<p><span class='gray'>Контактное лицо: </span> <a href='#'>" . $ad->author_name . "</a></p>";
            echo "<span class='gray'>Телефон: </span><span class='btn btn-success shownumber'>Показать номер</span>";
            echo "<br><br><br><br><p class='gray'>Номер объявления: " . $ad->id . "</p>";
            echo "</div>";
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox({
      openEffect: 'none',
      closeEffect: 'none'
    });
  });
</script>