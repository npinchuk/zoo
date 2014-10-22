<!--
<div class="row finder">
  <div class="col-md-12">
    <div class="widget widget-green">
      <div class="widget-title">
        <div class="widget-controls">
          
          <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="icon-remove-sign"></i></a>
        </div>
        <h3><i class="icon-ok-sign"></i> Поиск</h3>
      </div>
      <div class="widget-content">
<?php // include Kohana::find_file('views', 'layouts/search') ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="span-7">
<?php // include Kohana::find_file('views', 'layouts/result'); ?>
  </div>
</div>
-->





<div class="vd_content-wrapper">
  <div class="vd_container">
    <div class="vd_content clearfix">
      <div class="vd_head-section clearfix">
        <div class="vd_panel-header">
          <ul class="breadcrumb">
            <li><a href="/fe/index.html">Home</a> </li>
            <li class="active">Default Dashboard</li>
          </ul>
          <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
            <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
            <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
            <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>

          </div>

        </div>
      </div>
      <!-- vd_head-section -->

      <div class="vd_title-section clearfix">
        <div class="vd_panel-header">
          <h1>Dashboard</h1>
          <small class="subtitle">Default dashboard for multipurpose demonstration</small>
          <div class="vd_panel-menu  hidden-xs">
            <div class="menu no-bg vd_red" data-original-title="Start Layout Tour Guide" data-toggle="tooltip" data-placement="bottom" onClick="javascript:introJs().setOption('showBullets', false).start();"> <span class="menu-icon font-md"><i class="fa fa-question-circle"></i></span> </div>
            <!-- menu -->

            <div class="menu">
              <div data-action="click-trigger"> <span class="menu-icon mgr-10"><i class="fa fa-filter"></i></span>Filter <i class="fa fa-angle-down"></i> </div>
              <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target">
                <div class="child-menu">
                  <div class="content-list content-menu">
                    <ul class="list-wrapper pd-lr-10">
                      <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Filter User</div> </a> </li>
                      <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-calendar"></i></div> <div class="menu-text">Filter Date</div> </a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- menu --> 
          </div>
          <!-- vd_panel-menu --> 
        </div>
        <!-- vd_panel-header --> 
      </div>
      <!-- vd_title-section -->

      <div class="vd_content-section clearfix">
        <div class="row">
          <div class="col-md-7 mgbt-md-20 mgbt-lg-0">
            <div class="panel vd_interactive-widget light-widget widget">
              <div class="panel-body-list">
                <div class="vd_panel-menu">
                  <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                  <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                    <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                    <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                      <div class="child-menu">
                        <div class="content-list content-menu">
                          <ul class="list-wrapper pd-lr-10">
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                </div>
                <!-- vd_panel-menu --> 


                <div class="pd-20">
                  <h5 class="mgbt-xs-20 mgtp-20"><span class="menu-icon append-icon"><i class="icon-graph"></i></span> <strong>Revenue Vs Cost Graph</strong> (November) </h5>
                  <div id="revenue-line-chart" style="height:255px; "></div>
                </div>
                <div class="row mgbt-xs-0">
                  <div class="col-sm-4 mgbt-xs-15 mgbt-sm-0">
                    <div class="item-left pd-15">
                      <div id="revenue-donut-chart" style="height:100px;"></div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="item-right pd-15">
                      <div id="revenue-bar-chart" style="height: 100px;" > </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Panel Widget -->               </div>
          <!--col-md-7 -->
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-12">
                <div class="vd_status-widget vd_bg-green widget">
                  <div class="vd_panel-menu">
                    <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                  </div>
                  <!-- vd_panel-menu --> 

                  <a class="panel-body" href="#">
                    <div class="clearfix">
                      <span class="menu-icon">
                        <i class="icon-network"></i>
                      </span>
                      <span class="menu-value">
                        1,256,134
                      </span>  
                    </div>   
                    <div class="menu-text clearfix">
                      Total Visitors
                    </div>                                                               
                  </a>        
                </div>                    </div>
              <!--col-md-12 --> 
            </div>
            <!-- .row -->
            <div class="row">
              <div class="col-xs-6">
                <div class="vd_status-widget vd_bg-red  widget">
                  <div class="vd_panel-menu">
                    <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                  </div>
                  <!-- vd_panel-menu --> 

                  <a class="panel-body" href="#">                                
                    <div class="clearfix">
                      <span class="menu-icon">
                        <i class="icon-bars"></i>
                      </span>
                      <span class="menu-value">
                        24
                      </span>  
                    </div>   
                    <div class="menu-text clearfix">
                      New Orders
                    </div>  
                  </a>                                                                
                </div>                    </div>
              <!--col-xs-6 -->
              <div class="col-xs-6">
                <div class="vd_status-widget vd_bg-blue widget">
                  <div class="vd_panel-menu">
                    <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                  </div>
                  <!-- vd_panel-menu --> 

                  <a class="panel-body"  href="#">                                  
                    <div class="clearfix">
                      <span class="menu-icon">
                        <i class="fa fa-comments"></i>
                      </span>
                      <span class="menu-value">
                        14
                      </span>  
                    </div>   
                    <div class="menu-text clearfix">
                      New Reviews
                    </div>
                  </a>                                                                  
                </div>                   </div>
              <!--col-xs-6 --> 
            </div>
            <!-- .row -->
            <div class="row">
              <div class="col-xs-6">
                <div class="vd_status-widget vd_bg-yellow widget">
                  <div class="vd_panel-menu">
                    <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                  </div>
                  <!-- vd_panel-menu --> 

                  <a class="panel-body"  href="#">                                
                    <div class="clearfix">
                      <span class="menu-icon">
                        <i class="icon-users"></i>
                      </span>
                      <span class="menu-value">
                        250
                      </span>  
                    </div>   
                    <div class="menu-text clearfix">
                      New Users
                    </div>  
                  </a>                                                                
                </div>                    </div>
              <!--col-xs-6 -->
              <div class="col-xs-6">
                <div class="vd_status-widget vd_bg-grey widget">
                  <div class="vd_panel-menu">
                    <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                  </div>
                  <!-- vd_panel-menu --> 

                  <a class="panel-body"  href="#">                                  
                    <div class="clearfix">
                      <span class="menu-icon">
                        <i class="fa fa-tasks"></i>
                      </span>
                      <span class="menu-value">
                        3
                      </span>  
                    </div>   
                    <div class="menu-text clearfix">
                      New Tasks
                    </div>
                  </a>                                                                  
                </div>                   </div>
              <!--col-md-xs-6 --> 
            </div>
            <!-- .row --> 

          </div>
          <!-- .col-md-5 --> 
        </div>
        <div class="row">
          <div class="col-md-5">

            <div class="panel vd_map-widget widget">
              <div class="panel-heading vd_bg-yellow">
                <h3 class="panel-title"> <span class="menu-icon"> <i class="glyphicon glyphicon-map-marker"></i> </span> <span class="menu-text">Visitor Map</span> </h3>
                <div class="vd_panel-menu">
                  <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-minus3"></i> </div>
                  <div data-action="refresh"  data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                  <div data-original-title="Config" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                    <div class="menu-trigger" data-action="click-trigger"> <i class="icon-cog"></i> </div>
                    <div data-action="click-target" class="vd_mega-menu-content  width-xs-2  left-xs">
                      <div class="child-menu">
                        <div class="content-list content-menu">
                          <ul class="list-wrapper pd-lr-10">
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">User Menu</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Other Menu</div> </a> </li>
                            <li class="line"></li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Tasks</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Privacy</div> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-cross"></i> </div>
                </div>
                <!-- vd_panel-menu --> 
              </div>
              <div class="panel-body-list">
                <div id="map1" style="height: 348px;"></div>
                <div class="vd_info br" >
                  <h5 class="text-right font-semibold"><strong>TOTAL VISITS</strong></h5>
                  <h3 class="text-right  vd_red"><span class="append-icon"><i class="fa fa-map-marker"></i></span>3,546,456</h3>
                </div>
              </div>
            </div>
            <!-- Panel Widget -->               </div>
          <!--col-md-5-->
          <div class="col-md-4">

            <div class="panel widget vd_realtime-chart-widget">
              <div class="panel-heading vd_bg-blue">
                <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-graph"></i> </span> Server Load </h3>
                <div class="vd_panel-menu">
                  <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-minus3"></i> </div>
                  <div data-action="refresh"  data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                  <div data-original-title="Config" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                    <div class="menu-trigger" data-action="click-trigger"> <i class="icon-cog"></i> </div>
                    <div data-action="click-target" class="vd_mega-menu-content  width-xs-2  left-xs">
                      <div class="child-menu">
                        <div class="content-list content-menu">
                          <ul class="list-wrapper pd-lr-10">
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">User Menu</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Other Menu</div> </a> </li>
                            <li class="line"></li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Tasks</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Privacy</div> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-cross"></i> </div>
                </div>
                <!-- vd_panel-menu --> 

              </div>
              <div class="panel-body-list pd-15">
                <div id="realtime-chart" class="realtime-chart" style="height:318px;"></div>
              </div>
            </div>
            <!-- Panel Widget -->               </div>
          <!--col-md-4-->
          <div class="col-md-3">

            <div class="panel widget vd_pie-chart-widget">
              <div class="panel-heading vd_bg-red">
                <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-pie"></i> </span> Pie Chart </h3>
                <div class="vd_panel-menu">
                  <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-minus3"></i> </div>
                  <div data-action="refresh"  data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                  <div data-original-title="Config" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                    <div class="menu-trigger" data-action="click-trigger"> <i class="icon-cog"></i> </div>
                    <div data-action="click-target" class="vd_mega-menu-content  width-xs-2  left-xs">
                      <div class="child-menu">
                        <div class="content-list content-menu">
                          <ul class="list-wrapper pd-lr-10">
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">User Menu</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Other Menu</div> </a> </li>
                            <li class="line"></li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Tasks</div> </a> </li>
                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Privacy</div> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-cross"></i> </div>
                </div>
                <!-- vd_panel-menu --> 

              </div>
              <div class="panel-body-list pd-15">
                <div id="pie-chart" class="pie-chart" style="height:318px;"></div>
              </div>
            </div>
          </div>
          <!-- col-md-3 --> 
        </div>
        <div class="row">
          <div class="col-md-6  mgbt-xs-20 mgbt-md-0">

            <div class="panel widget light-widget panel-bd-top">
              <div class="panel-body">
                <div id="calendar" class="mgtp-10"> </div>
              </div>
            </div>
            <!-- Panel Widget -->              </div>
          <!-- col-md-6 -->

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <div class="tabs widget">
                  <ul class="nav nav-tabs widget">
                    <li class="active">
                      <a data-toggle="tab" href="#home-tab">
                        <span class="menu-icon"><i class="fa fa-comments"></i></span>
                        Recent Reviews 
                        <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                      </a></li>
                    <li>
                      <a data-toggle="tab" href="#posts-tab">
                        <span class="menu-icon"><i class="fa fa-rocket"></i></span>
                        Activities
                        <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                      </a></li>
                    <li>
                      <a data-toggle="tab" href="#list-tab">
                        <span class="menu-icon"><i class="fa fa-user"></i></span>
                        New Users
                        <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                      </a></li>
                  </ul>
                  <div class="tab-content">
                    <div id="home-tab" class="tab-pane active">                                         
                      <div class="content-list content-image menu-action-right">
                        <div  data-rel="scroll" data-scrollheight="550">
                          <ul class="list-wrapper pd-lr-15">
                            <li>  
                              <div class="menu-icon"><a href="#"><img alt="example image" src="/fe/img/avatar/avatar.jpg"></a></div> 
                              <div class="menu-text"> 
                                This product is so good that i manage to buy it 1 for me and 3 for my families. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco laboris nisi ut aliquip ex tris. 
                              </div>                                               
                              <div class="menu-text">
                                <div class="menu-info">
                                  in <a href="#">Samsung Galaxy S4</a> - 

                                  <span class="menu-date">12 Minutes Ago </span> - 
                                  <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>

                                </div>
                              </div>
                              <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                  <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                  <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                              </div>                                                	  
                            </li>
                            <li>                                            
                              <div class="menu-icon"><img alt="example image" src="/fe/img/avatar/avatar-2.jpg"></div>  
                              <div class="menu-text"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. 
                              </div>                                               
                              <div class="menu-text">
                                <div class="menu-info">
                                  in <a href="#">LG G2</a> - 

                                  <span class="menu-date">12 Minutes Ago </span> - 
                                  <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>

                                </div>
                              </div>
                              <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                  <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                  <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                              </div>  
                            </li>    
                            <li>  
                              <div class="menu-icon"><img alt="example image" src="/fe/img/avatar/avatar-3.jpg"></div> 
                              <div class="menu-text"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco.
                              </div>                                               
                              <div class="menu-text">
                                <div class="menu-info">
                                  in <a href="#">Sony Experia Z10</a> - 

                                  <span class="menu-date">12 Minutes Ago </span> - 
                                  <span class="menu-rating vd_yellow"><i class="icon-star"></i></span>

                                </div>
                              </div>
                              <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                  <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                  <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                              </div>  
                            </li>                                     
                            <li>  
                              <div class="menu-icon"><img alt="example image" src="/fe/img/avatar/avatar-4.jpg"></div> 
                              <div class="menu-text"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Ipsum dolor sit amet, consectetur adipisicing elit !!!
                              </div>                                               
                              <div class="menu-text">
                                <div class="menu-info">
                                  in <a href="#">Nokia Lumia</a> - 

                                  <span class="menu-date">12 Minutes Ago </span> - 
                                  <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>

                                </div>
                              </div>
                              <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                  <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                  <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                              </div>
                            </li> 
                            <li> 
                              <div class="menu-icon"><img alt="example image" src="/fe/img/avatar/avatar-5.jpg"></div>  
                              <div class="menu-text"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                              </div>                                               
                              <div class="menu-text">
                                <div class="menu-info">
                                  in <a href="#">Samsung Galaxy Note 8</a> - 

                                  <span class="menu-date">12 Minutes Ago </span> - 
                                  <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span>

                                </div>
                              </div>
                              <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                  <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                  <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                              </div>
                            </li>
                            <li>  
                              <div class="menu-icon"><img alt="example image" src="/fe/img/avatar/avatar-6.jpg"></div> 
                              <div class="menu-text"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              </div>                                               
                              <div class="menu-text">
                                <div class="menu-info">
                                  in <a href="#">LG L3</a> - 

                                  <span class="menu-date">12 Minutes Ago </span> - 
                                  <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span>

                                </div>
                              </div>
                              <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                  <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                  <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                              </div>
                            </li>                                     
                            <li> 
                              <div class="menu-icon"><img alt="example image" src="/fe/img/avatar/avatar-7.jpg"></div> 
                              <div class="menu-text"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit xorem ipsum dolor sit amet, consectetur adipisicing elit.
                              </div>                                               
                              <div class="menu-text">
                                <div class="menu-info">
                                  in <a href="#">Motorola Moto-X</a> - 

                                  <span class="menu-date">12 Minutes Ago </span> - 
                                  <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span>

                                </div>
                              </div>
                              <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                  <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                  <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                              </div> 
                            </li> 
                            <li>  
                              <div class="menu-icon"><img alt="example image" src="/fe/img/avatar/avatar-8.jpg"></div> 
                              <div class="menu-text"> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit xorem ipsum dolor sit amet, consectetur adipisicing elit.
                              </div>                                               
                              <div class="menu-text">
                                <div class="menu-info">
                                  in <a href="#">Monitor Asus</a> - 

                                  <span class="menu-date">12 Minutes Ago </span> - 
                                  <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>

                                </div>
                              </div>
                              <div class="menu-action">  
                                <div class="menu-action-icon vd_green"  data-original-title="Approve" data-rel="tooltip-bottom">
                                  <i class="fa fa-check"></i>
                                </div>                                                            
                                <div class="menu-action-icon vd_red"   data-original-title="Reject" data-rel="tooltip-bottom">
                                  <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                              </div>
                            </li>     
                          </ul>
                        </div>
                        <div class="closing text-center">
                          <a href="#">See All Recent Reviews <i class="fa fa-angle-double-right"></i></a>
                        </div>                                                                                                            
                      </div>                              

                    </div>
                    <div id="posts-tab" class="tab-pane sidebar-widget">
                      <div class="content-list">	
                        <div data-rel="scroll">
                          <ul  class="list-wrapper pd-lr-15">
                            <li> <a href="#"> 
                                <div class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></div> 
                                <div class="menu-text"> Someone has give you a surprise 
                                  <div class="menu-info"><span class="menu-date"> ~ 12 Minutes Ago</span></div>
                                </div> 
                              </a> </li>
                            <li> <a href="#"> 
                                <div class="menu-icon vd_blue"><i class=" fa fa-user"></i></div> 
                                <div class="menu-text">  Change your user profile details
                                  <div class="menu-info"><span class="menu-date"> ~ 1 Hour 20 Minutes Ago</span></div>
                                </div> 
                              </a> </li>    
                            <li> <a href="#"> 
                                <div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                                <div class="menu-text">  Your setting is updated
                                  <div class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></div>                            
                                </div> 
                              </a> </li>                                     
                            <li> <a href="#"> 
                                <div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                                <div class="menu-text">  Added new article
                                  <div class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></div>                              
                                </div> 
                              </a> </li> 
                            <li> <a href="#"> 
                                <div class="menu-icon vd_green"><img alt="example image" src="/fe/img/avatar/avatar.jpg"></div> 
                                <div class="menu-text">  Change Profile Pic
                                  <div class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></div>                              
                                </div> 
                              </a> </li>
                            <li> <a href="#"> 
                                <div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                                <div class="menu-text">  Your setting is updated
                                  <div class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></div>                            
                                </div> 
                              </a> </li>                                     
                            <li> <a href="#"> 
                                <div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                                <div class="menu-text">  Added new article
                                  <div class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></div>                              
                                </div> 
                              </a> </li> 
                            <li> <a href="#"> 
                                <div class="menu-icon vd_green"><img alt="example image" src="/fe/img/avatar/avatar.jpg"></div> 
                                <div class="menu-text">  Change Profile Pic
                                  <div class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></div>                              
                                </div> 
                              </a> </li>                                                                                

                          </ul>
                        </div>
                        <div class="closing text-center" style="">
                          <a href="#">See All Activities <i class="fa fa-angle-double-right"></i></a>
                        </div>                                                                       
                      </div>                              
                    </div>
                    <div id="list-tab" class="tab-pane">
                      <div class="content-grid column-xs-2 column-sm-6 height-xs-3">	
                        <div data-rel="scroll" >
                          <ul class="list-wrapper">
                            <li> <a href="#"> 
                                <div class="menu-icon width-50"><img alt="example image" src="/fe/img/avatar/avatar.jpg"></div> 
                              </a>
                              <div class="menu-text"> Gabriella Montagna
                                <div class="menu-info">
                                  <div class="menu-date">San Diego</div>                                                                         
                                  <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-times"></i>
                                    </span>                                                                                                                   
                                  </div>                                
                                </div>
                              </div> 
                            </li>
                            <li> 
                              <a href="#"> 
                                <div class="menu-icon width-50"><img alt="example image" src="/fe/img/avatar/avatar-2.jpg"></div>  
                              </a>                            
                              <div class="menu-text">  Jonathan Fuzzy
                                <div class="menu-info">
                                  <div class="menu-date">Seattle</div>                                                                         
                                  <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-times"></i>
                                    </span>                                                                            
                                  </div>                                
                                </div>                            
                              </div> 
                            </li>    
                            <li> <a href="#"> 
                                <div class="menu-icon width-50"><img alt="example image" src="/fe/img/avatar/avatar-3.jpg"></div> 
                              </a>    
                              <div class="menu-text">  Sakura Hinata
                                <div class="menu-info">
                                  <div class="menu-date">Hawaii</div>                                                                         
                                  <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-times"></i>
                                    </span>                                                                             
                                  </div>                                
                                </div>                                                     
                              </div> 
                            </li>                                     
                            <li> <a href="#"> 
                                <div class="menu-icon width-50"><img alt="example image" src="/fe/img/avatar/avatar-4.jpg"></div> 
                              </a>    
                              <div class="menu-text">  Rikudou Sennin
                                <div class="menu-info">
                                  <div class="menu-date">Las Vegas</div>                                                                         
                                  <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-times"></i>
                                    </span>                                                                              
                                  </div>                                
                                </div>                                                        
                              </div> 
                            </li> 
                            <li> <a href="#"> 
                                <div class="menu-icon width-50"><img alt="example image" src="/fe/img/avatar/avatar-5.jpg"></div>  
                              </a>   
                              <div class="menu-text">  Kim Kardiosun
                                <div class="menu-info">
                                  <div class="menu-date">New York</div>                                                                         
                                  <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-times"></i>
                                    </span>                                                                              
                                  </div>                                
                                </div>                                                          
                              </div> 
                            </li>
                            <li> <a href="#"> 
                                <div class="menu-icon width-50"><img alt="example image" src="/fe/img/avatar/avatar-6.jpg"></div>
                              </a>    
                              <div class="menu-text">   Brad Pita
                                <div class="menu-info">
                                  <div class="menu-date">Seattle</div>                                                                         
                                  <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-times"></i>
                                    </span>                                                                              
                                  </div>                                
                                </div>                             
                              </div> 
                            </li>                                     
                            <li> <a href="#"> 
                                <div class="menu-icon width-50"><img alt="example image" src="/fe/img/avatar/avatar-7.jpg"></div> 
                              </a>   
                              <div class="menu-text">  Celline Dior
                                <div class="menu-info">
                                  <div class="menu-date">Los Angeles</div>                                                                         
                                  <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-times"></i>
                                    </span>                                                                             
                                  </div>                                
                                </div>                              
                              </div> 
                            </li> 
                            <li> <a href="#"> 
                                <div class="menu-icon width-50"><img alt="example image" src="/fe/img/avatar/avatar-8.jpg"></div>
                              </a>    
                              <div class="menu-text">  Goerge Bruno Marz
                                <div class="menu-info">
                                  <div class="menu-date">Las Vegas</div>                                                                         
                                  <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                      <i class="fa fa-times"></i>
                                    </span>                                                                              
                                  </div>                                
                                </div>                              
                              </div> 
                            </li>                                                                                                   

                          </ul>
                        </div>
                        <div class="closing text-center">
                          <a href="#">See All New Users <i class="fa fa-angle-double-right"></i></a>
                        </div>                                                                       
                      </div>      
                    </div>
                  </div>
                </div> <!-- tabs-widget -->                  </div>
              <!-- col-md-12 --> 
            </div>
            <!-- row --> 
          </div>
        </div>
        <!-- .row -->
        <div class="row">
          <div class="col-md-4">

            <div class="panel widget vd_weather-widget">
              <div class="panel-heading no-title vd_bg-yellow">
                <div class="vd_panel-menu">
                  <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                  <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                    <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                    <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                      <div class="child-menu">
                        <div class="content-list content-menu">
                          <ul class="list-wrapper pd-lr-10">
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                </div>
                <!-- vd_panel-menu --> 

              </div>
              <div class="panel-body vd_bg-yellow vd_white">
                <h1 class="weather-degree">25&deg;</h1>
                <h4 class="weather-description mgbt-xs-5">Sunny Day</h4>
                <h4 class="weather-degree-2">15&deg; / 20&deg;</h4>
                <div class="weather-icon">
                  <canvas id="clear-day" width="80" height="80"> </canvas>
                </div>
              </div>
              <div class="panel-body-list weather-info">
                <div class="col-xs-6 bdr-soft-grey">
                  <h1 class="font-semibold vd_yellow weather-subinfo humid value" ><span>
                      <canvas id="rain" width="36" height="36"></canvas>
                    </span> 46%</h1>
                </div>
                <div class="col-xs-6">
                  <h1 class="vd_yellow weather-subinfo" ><span class="append-icon">
                      <canvas id="wind" width="36" height="36"></canvas>
                    </span><span class="font-semibold prepend-icon wind-value">1</span><span class="wind-text">m/s</span></h1>
                </div>
              </div>
            </div>
            <!-- Panel Widget -->               </div>
          <!-- col-md-4 -->
          <div class="col-md-4">

            <div class="panel widget panel-bd-top vd_todo-widget light-widget">
              <div class="panel-heading no-title ">
                <div class="vd_panel-menu">
                  <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                  <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                    <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                    <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                      <div class="child-menu">
                        <div class="content-list content-menu">
                          <ul class="list-wrapper pd-lr-10">
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                </div>
                <!-- vd_panel-menu --> 

              </div>
              <div class="panel-body">
                <h2 class="mgbt-xs-20"> <span class="append-icon"> <i class="fa fa-check-circle-o vd_green"></i> </span> Todo List</h2>
                <div class="input-group mgbt-xs-15">
                  <input type="text">
                  <div class="input-group-btn">
                    <button data-toggle="dropdown" class="btn dropdown-toggle vd_bg-green vd_white" type="button"><i class="fa fa-plus fa-fw"></i></button>
                  </div>
                  <!-- /btn-group --> 
                </div>
                <div class="controls">
                  <div class="vd_checkbox checkbox-done">
                    <input type="checkbox" id="checkbox-1" value="1">
                    <label for="checkbox-1"> Basketball time </label>
                  </div>
                  <div class="vd_checkbox  checkbox-done">
                    <input type="checkbox" id="checkbox-2" value="1">
                    <label for="checkbox-2"> Design Logo for customer</label>
                  </div>
                  <div class="vd_checkbox  checkbox-done">
                    <input type="checkbox" id="checkbox-3" value="1">
                    <label for="checkbox-3"> Cooking delicious meal</label>
                  </div>
                  <div class="vd_checkbox  checkbox-done">
                    <input type="checkbox" id="checkbox-4" value="1">
                    <label for="checkbox-4"> Sleeping with my pillow</label>
                  </div>
                  <div class="row mgtp-15 mgbt-xs-0">
                    <div class="col-xs-6"> <a role="button" href="#" class="btn vd_btn vd_bg-green">Save</a> </div>
                    <div class="col-xs-6 text-right"> <a role="button" href="#" class="btn vd_btn vd_bg-grey"><i class="icon-trash"></i></a> </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Panel Widget -->               </div>
          <!-- col-md-4 -->
          <div class="col-md-4" >

            <div class="panel widget vd_news-widget">
              <div class="panel-body-list">
                <div class="vd_panel-menu">
                  <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                  <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                    <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                    <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                      <div class="child-menu">
                        <div class="content-list content-menu">
                          <ul class="list-wrapper pd-lr-10">
                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                </div>
                <!-- vd_panel-menu --> 

                <div class="vd_carousel-control"> <a href="#"> <i class="fa fa-chevron-left"></i></a> <a href="#"><i class="fa fa-chevron-right"></i></a> </div>
                <div class="vd_carousel">
                  <div class="vd_carousel-column" style="background:url(img/photos/news-blur.jpg);">
                    <div class="news-list pd-20 vd_white font-light"> <br />
                      <br />
                      <br />
                      <br />
                      <h2 class="mgbt-xs-5"><a class="vd_white" href="#">Minimalist <span class="font-semibold">News Widget</span> is a <span class="font-semibold">Massively</span> Popular Widget.</a></h2>
                      <p> <span class="mgr-10"><span class="append-icon"><i class="fa fa-thumbs-up"></i></span>95k</span> <span class="append-icon"><i class="fa fa-comments"></i></span>138 </p>
                    </div>
                    <div class="comment-list pd-20 vd_bg-white">
                      <div class="content-list content-image ">
                        <div class="list-wrapper">
                          <div class="comment-content">
                            <div class="menu-icon"><a href="#"><img src="/fe/img/avatar/avatar.jpg" alt="example image"></a></div>
                            <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed... Unbelievable !!</div>
                            <div class="menu-text">
                              <div class="menu-info"> by <a href="#">Lindsay Louhin</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                            </div>
                          </div>
                        </div>
                        <!-- list-wrapper --> 
                      </div>
                      <!-- content-list --> 
                    </div>
                    <!-- comment-list --> 

                  </div>
                  <!-- carousel-column -->

                  <div class="vd_carousel-column" style="background:url(img/photos/news-blur-02.jpg);">
                    <div class="news-list pd-20 vd_white  font-light"> <br />
                      <br />
                      <br />
                      <br />
                      <h2 class="mgbt-xs-5"><a class="vd_white" href="#">Sliding<span class="font-semibold"> News List</span> is <span class="font-semibold">Totally</span> Awesome.</a></h2>
                      <p> <span class="mgr-10"><span class="append-icon"><i class="fa fa-thumbs-up"></i></span>15k</span> <span class="append-icon"><i class="fa fa-comments"></i></span>40 </p>
                    </div>
                    <div class="comment-list pd-20 vd_bg-white">
                      <div class="content-list content-image ">
                        <div class="list-wrapper">
                          <div class="comment-content">
                            <div class="menu-icon"><a href="#"><img src="/fe/img/avatar/avatar-2.jpg" alt="example image"></a></div>
                            <div class="menu-text"> Consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Awesome ! </div>
                            <div class="menu-text">
                              <div class="menu-info"> by <a href="#">Gregory Theo</a> - <span class="menu-date">18 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                            </div>
                          </div>
                        </div>
                        <!-- list-wrapper --> 
                      </div>
                      <!-- content-list --> 
                    </div>
                    <!-- comment-list --> 

                  </div>
                  <!-- carousel-column -->

                  <div class="vd_carousel-column" style="background:url(img/photos/news-blur-03.jpg);">
                    <div class="news-list pd-20 vd_white font-light"> <br />
                      <br />
                      <br />
                      <br />
                      <h2 class="mgbt-xs-5"><a class="vd_white" href="#">More than <span class="font-semibold"> 3 News List</span> or more <span class="font-semibold">With</span> This Widget.</a></h2>
                      <p> <span class="mgr-10"><span class="append-icon"><i class="fa fa-thumbs-up"></i></span>23k</span> <span class="append-icon"><i class="fa fa-comments"></i></span>8 </p>
                    </div>
                    <div class="comment-list pd-20 vd_bg-white">
                      <div class="content-list content-image ">
                        <div class="list-wrapper">
                          <div class="comment-content">
                            <div class="menu-icon"><a href="#"><img src="/fe/img/avatar/avatar-3.jpg" alt="example image"></a></div>
                            <div class="menu-text"> Lorem ipsum dolor sit amet, sed do eiusmod tempor incidtation ullamco. </div>
                            <div class="menu-text">
                              <div class="menu-info"> by <a href="#">Maria Looney</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                            </div>
                          </div>
                        </div>
                        <!-- list-wrapper --> 
                      </div>
                      <!-- content-list --> 
                    </div>
                    <!-- comment-list --> 

                  </div>
                  <!-- carousel-column --> 
                </div>
                <!-- vd_carousel --> 

              </div>
              <!-- panel-body-list --> 

            </div>
            <!-- Panel Widget -->               </div>
          <!-- col-md-4 --> 

        </div>
        <!-- row --> 

      </div>
      <!-- .vd_content-section --> 

    </div>
    <!-- .vd_content --> 
  </div>
  <!-- .vd_container --> 
</div>
<!-- .vd_content-wrapper --> 
