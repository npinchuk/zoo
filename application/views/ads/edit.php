<ol class="breadcrumb">
  <li><a href="#">Личный кабинет</a></li>
  <li><a href='/ads/list/'>Мои объявления</a></li>
  <li  class="active">Редактирования объявления</li>
</ol>

<div class="row finder">
  <div class="col-md-6">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h3><i class="icon-ok-sign"></i> Редактор объявления</h3>
      </div>
      <div class="widget-content">

        <input id="ad" type="hidden"  value="<?php echo $ad->id; ?>" />
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Контактное лицо</label>
              <input type="text" id="author_name" class="form-control" value="<?php echo $ad->author_name; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Номер телефона</label>
              <input type="text" id="phone" class="form-control" value="<?php echo $ad->phone ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group region">

              <label>Регион</label>
              <select class="form-control"  id='region'>
                <option value='0'   >-- Вся Россия --</option>
                <?php
                foreach ($regions as $value) {
                  if ($value->id == $ad->region_id) {
                    echo "<option selected value='" . $value->id . "'>" . $value->title . "</option>";
                  } else {
                    echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group city <?php
            if ($ad->region_id == 0) {
              echo "hidden";
            }
            ?>">
              <label>Город</label>
              <select class="form-control"  id='city'>
                <?php
                if ($ad->city_id <> 0) {
                  echo "<option value=0>-- Любой город --</option>";
                  foreach ($citys as $value) {
                    if ($value->id == $ad->city_id) {
                      echo "<option selected value='" . $value->id . "'>" . $value->title . "</option>";
                    } else {
                      echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
                    }
                  }
                } else {
                  // когда город нулевой - любой город 
                  // нужно проверить вся ли россия или уже есть регион
                  if ($ad->region_id == 0) {
                    // региона нет. так как форма будет загкрыта все таки данные туда надо какие нить засунуть
                    echo "<option value='0'>0</option>";
                  } else {
                    echo "<option selected value=0>-- Любой город --</option>";
                    foreach ($citys as $value) {
                      echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
                    }
                  }
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Категория</label>
              <select class="form-control"  id='type'>
                <?php
                foreach ($types as $value) {
                  if ($value->id <> 0) {
                    if ($value->id == $ad->type_id) {
                      echo "<option selected value='" . $value->id . "'>" . $value->title . "</option>";
                    } else {
                      echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
                    }
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class='col-md-6'>
            <div class="form-group  pettype " >
              <label>Категория питомца</label>
              <select class="form-control "  id='pettype'>
                <?php
                foreach ($pettypes as $value) {
                  if ($value->id == $ad->pettype_id) {
                    echo "<option selected value='" . $value->id . "'>" . $value->title . "</option>";
                  } else {
                    echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class='col-md-6'>
            <div class="form-group  breed " >
              <label>Порода</label>
              <select class="form-control " id='breed'>
                <?php
                if ($ad->breed_id == 0) {
                  echo "<option selected value='0'> -- Любая порода --</option>";
                } else {
                  echo "<option value='0'> -- Любая порода --</option>";
                }
                foreach ($breeds as $value) {
                  if ($value->id == $ad->breed_id) {
                    echo "<option selected value='" . $value->id . "'>" . $value->title . "</option>";
                  } else {
                    echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class='col-md-12'>
            <div class="form-group">
              <label>Заголовок</label>
              <input type="text" class="form-control" id="summary" placeholder="Заголовок объявляения" value="<?php echo $ad->summary ?>">
            </div>
            <div class="form-group">
              <label>Описание объявления</label>
              <textarea id="body" class="form-control" rows="3"><?php echo $ad->body ?></textarea>
            </div>
            <div class="form-group">
              <label>Цена</label>
              <input type="text" class="form-control"  id="price" placeholder="Цена" value="<?php echo $ad->price ?>">
            </div>
          </div>
        </div>

        <br>
        <div id="results"></div>
        <form enctype="multipart/form-data" action="/ajax/fileupload" method="POST" id="mainForm">
          <?php
          foreach ($photos as $value) {
           echo "<img  src='$value->src' class='smallpic'  /> <img src='/images/turn.png' class='turn' />
          <img src='/images/cross.png' class='cross' />";
          }
          ?>
          <input id="uploadImage" type="file" accept="image/*" name="image"/>
          <input id="usid" type="hidden" value="<?php echo $usid; ?>" /><br>
          <input id="button" type="submit" value="Загрузить" />
        </form>
        <br><br>


        <button class="btn btn-primary savead" >Сохранить</button>
        <br>
        <hr>
        <div class="alert alert-success alert-dismissable saved hidden">
          <i class="icon-check-sign"></i> <strong>Отлично!</strong> Ваше объявление сохранено и будет показано после модерации.  <a href="/ads/list" class="alert-link">Ваши объявления</a>.

        </div>
        <div class="alert alert-danger alert-dismissable error hidden">
          <i class="icon-remove-sign"></i> <strong>Ошибка!</strong> Ваше объявление не сохранено, так как не все поля заполнены.

        </div>

        <img style="display:none" id="loader" src="/images/loader.gif" alt="Загрузка...." title="Загрузка...." />
        <script>
          $("#mainForm").on('submit', function(event) {
            event.preventDefault();
            var data = new FormData($('#mainForm')[0]);
            $.ajax({
              type: "POST",
              url: "/ajax/fileupload",
              data: data,
              contentType: false,
              processData: false,
              beforeSend: function() {
                $('#loader').show();
              }
            }).done(function(html) {
              $("#results").append(html);
              $('#loader').hide();
              $('#mainForm')[0].reset();
              $("#results").append("<hr><h5>Добавить ещё одно фото:</h5>");
            });
          });
        </script>

      </div>
    </div>
  </div>
</div>


<!--<div class="row">
    <div id="map" class="col-md-12" style='height: 200px;' ><br><br></div>
</div>-->
