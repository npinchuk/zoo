<ol class="breadcrumb">
  <li><a href="#">Личный кабинет</a></li>
  <li><a href='/ads/list/'>Мои объявления</a></li>
  <li  class="active">Новое объявление</li>
</ol>

<div class="row finder">
  <div class="col-md-6">
    <div class="widget widget-blue">
      <div class="widget-title">
        <h3><i class="icon-ok-sign"></i> Новое объявление</h3>
      </div>
      <div class="widget-content">

        <input id="ad" type="hidden"  value="<?php echo $ad->id; ?>" />
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Контактное лицо</label>
              <input type="text" id="author_name" class="form-control" value="<?php echo $ustitle; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Номер телефона</label>
              <input type="text" id="phone" class="form-control" value="<?php echo $userinfo->phone ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group region">

              <label>Регион</label>
              <select class="form-control"  id='region'>
                <option value='0'  selected >-- Вся Россия --</option>
                <?php
                foreach ($regions as $value) {
                  echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group city hidden">
              <label>Город</label>
              <select class="form-control"  id='city'>

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
                    echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
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
                  echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
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
                echo "<option value='0'> -- Любая порода --</option>";
                foreach ($breeds as $value) {
                  echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
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
              <input type="text" class="form-control" id="summary" placeholder="Заголовок объявляения">
            </div>
            <div class="form-group">
              <label>Описание объявления</label>
              <textarea id="body" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
          <label>Цена</label>
          <input type="text" class="form-control"  id="price" placeholder="Цена">
        </div>
          </div>
        </div>
        
        <br>
        <div id="results"></div>
        <form enctype="multipart/form-data" action="/ajax/fileupload" method="POST" id="mainForm">
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
