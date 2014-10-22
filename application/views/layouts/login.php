<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->
  <!-- Specific Page Data -->
  <!-- End of Data -->
  <head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="Venmond">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/fe/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/fe/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/fe/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/fe/img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/fe/img/ico/favicon.png">
    <!-- CSS -->
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="/fe/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/fe/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="/fe/css/font-awesome-ie7.min.css"><![endif]-->
    <link href="/fe/css/font-entypo.css" rel="stylesheet" type="text/css">    
    <!-- Fonts CSS -->
    <link href="/fe/css/fonts.css"  rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="/fe/plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="/fe/plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="/fe/plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="/fe/plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
    <link href="/fe/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 
    <link href="/fe/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="/fe/plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="/fe/plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="/fe/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="/fe/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="/fe/plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">            
    <!-- Specific CSS -->
    <!-- Theme CSS -->
    <link href="/fe/css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="/fe/css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="/fe/css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    
    <!-- Responsive CSS -->
    <link href="/fe/css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 
    <!-- for specific page in style css -->
    <!-- for specific page responsive in style css -->
    <!-- Custom CSS -->
    <link href="/fe/custom/custom.css" rel="stylesheet" type="text/css">
    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="/fe/js/modernizr.js"></script> 
    <script type="text/javascript" src="/fe/js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="/fe/js/mobile-detect-modernizr.js"></script> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/fe/js/html5shiv.js"></script>
      <script type="text/javascript" src="/fe/js/respond.min.js"></script>     
    <![endif]-->
  </head>    
  <body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">     
    <div class="vd_body">
      <!-- Header Start -->
      <!-- Header Ends --> 
      <?php
      echo $content;
      ?>

      <!-- Footer Start -->
      <footer class="footer-2"  id="footer">      
        <div class="vd_bottom ">
          <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright text-center">
                  Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
          </div><!-- container -->
        </div>
      </footer>
      <!-- Footer END -->

    </div>

    <!-- .vd_body END  -->
    <a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
    <!--
    <a class="back-top" href="/fe/#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

    <!-- Javascript =============================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script type="text/javascript" src="/fe/js/jquery.js"></script> 
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/fe/js/excanvas.js"></script>      
    <![endif]-->
    <script type="text/javascript" src="/fe/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
    <script type="text/javascript" src="/fe/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <script type="text/javascript" src="/fe/js/caroufredsel.js"></script> 
    <script type="text/javascript" src="/fe/js/plugins.js"></script>

    <script type="text/javascript" src="/fe/plugins/breakpoints/breakpoints.js"></script>
    <script type="text/javascript" src="/fe/plugins/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/fe/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

    <script type="text/javascript" src="/fe/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="/fe/plugins/tagsInput/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="/fe/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="/fe/plugins/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="/fe/plugins/pnotify/js/jquery.pnotify.min.js"></script>

    <script type="text/javascript" src="/fe/js/theme.js"></script>
    <script type="text/javascript" src="/fe/custom/custom.js"></script>

  </body>
</html>