
<div class="row finder">
  <div class="col-md-12">
    <div class="widget widget-green">
      <div class="widget-title">
        <div class="widget-controls">
          
<!--          <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="icon-remove-sign"></i></a>-->
        </div>
        <h3><i class="icon-ok-sign"></i> Поиск</h3>
      </div>
      <div class="widget-content">
        <?php include Kohana::find_file('views', 'layouts/search') ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="span-7">
    <?php include Kohana::find_file('views', 'layouts/result'); ?>
  </div>
</div>

