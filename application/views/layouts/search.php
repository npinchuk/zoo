<form action="/" method="GET">
  <input type="hidden" name="help" id="help" value="<?php
  if (isset($help)) {
    echo $help;
  } else {
    echo "3";
  }
  ?>" />
  <div class="row">
    <div class="col-lg-3 ">
      <div class="form-group">
        <!--<label>Поиск</label>-->
        <input type="text" class="form-control" name="q" value="<?php
        if (isset($q)) {
          echo $q;
        }
        ?>" placeholder="Поиск">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group">
        <!--<label>Действие</label>-->
        <select class="form-control"  name="type_id">
          <?php
          foreach ($types as $value) {
            if (isset($typecurr)) {
              if ($typecurr == $value->id) {
                echo "<option selected  value='" . $value->id . "'>" . $value->title . "</option>";
              } else {
                echo "<option  value='" . $value->id . "'>" . $value->title . "</option>";
              }
            } else {
              echo "<option  value='" . $value->id . "'>" . $value->title . "</option>";
            }
          }
          ?>
        </select>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="form-group">
        <!--<label>Вид</label>-->
        <select class="form-control"  id='pettype_id' name="pettype_id">
          <?php
          foreach ($pettypes as $value) {
            if (isset($pettypecurr)) {
              if ($pettypecurr == $value->id) {
                echo "<option selected  value='" . $value->id . "'>" . $value->title . "</option>";
              } else {
                echo "<option  value='" . $value->id . "'>" . $value->title . "</option>";
              }
            } else {
              echo "<option  value='" . $value->id . "'>" . $value->title . "</option>";
            }
          }
          ?>
        </select>
      </div>
    </div>
    <div class="col-lg-2 ">
      <div class="form-group">
        <!--<label>Регион</label>-->
        <select class="form-control" id='cityid' name="city_id">
          <?php
          echo "<option value='0'>По всей России</option>";
          if (isset($region)) {
            echo "<option value='" . $region->id . "' selected >" . $region->title . "</option>";
          }
          foreach ($citys as $value) {
            if (isset($citycurr)) {
              if ($citycurr == $value->id) {
                echo "<option selected  value='" . $value->id . "'>" . $value->title . "</option>";
              } else {
                echo "<option  value='" . $value->id . "'>" . $value->title . "</option>";
              }
            } else {
              echo "<option  value='" . $value->id . "'>" . $value->title . "</option>";
            }
          }

          echo "<option value='-1'>Выбрать другой...</option>";
          ?>

        </select>
      </div>
    </div>
    <div class="col-lg-1 ">
      <div class="form-group">
        <!--<label>Поиск</label>-->
        <input type="submit" class="btn btn-success" value="Найти" >
      </div>
    </div>
    <div class="col-lg-3  ">
      <div  class="form-group ">
        <input type="checkbox" name="match" value="1" /> Искать только в названиях<br>
        <!--<input type="checkbox" name="photo" value="1" /> С фото-->
      </div>
    </div>
    <div class="col-lg-3 ">
      <div class="form-group ">
        <!--<label>Пол</label><br>-->
        <label class="checkbox-inline">
          <input type="checkbox" name="male"  checked value="1"> Самец
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="female" checked value="1"> Самка
        </label>
      </div>
    </div>
    <div class="col-lg-2  ">
      <div id='breedid' class="form-group ">
        <?php
        if (isset($pettypecurr)) {
          // не выбрано ничего нужно убрать....
          $breeds = ORM::factory('breeds')->where('pettype_id', '=', $pettypecurr)->find_all();
          echo "<select class='form-control'  name='breed_id'>";
          echo "<option value='0' selected>Все породы</option>";
          foreach ($breeds as $value) {
           
            if ((isset($breed_id)) and ($value->id == $breed_id)) {
               echo "<option selected value='$value->id'>$value->title</option>";
            } else {
               echo "<option value='$value->id'>$value->title</option>";
            }
          }
          echo "</select>";
        }
        ?>
      </div>
    </div>
    <div class="col-lg-2 ">
      <div id='districtid' class="form-group ">
        <!--<label>Район</label>-->
      </div>
    </div>
  </div>
</form>
<div class="col-md-4">
  <div class="modal fade" id="modalFormStyle1" tabindex="-1" role="dialog" aria-labelledby="modalFormStyle1Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="widget widget-blue">
          <div class="widget-title">
            <div class="widget-controls">
              <a class="widget-control" data-dismiss="modal" data-placement="top" ><i class="icon-remove-sign"></i></a>
            </div>
            <h3><i class="icon-ok-sign"></i> Выбор города</h3>
          </div>
          <div class="widget-content">
            <div class="modal-body">

              <div class="form-group region">
                <label>Регион</label>
                <select class="form-control"  id='region' >
                  <option value='0'  selected >-- Вся Россия --</option>
                  <?php
                  foreach ($regions as $value) {
                    echo "<option value='" . $value->id . "'>" . $value->title . "</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="form-group city hidden">
                <label>Город</label>
                <select class="form-control"  id='city'>

                </select>
              </div>
              <button type="button" class="savecity btn btn-primary">Ок</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>