jQuery(document).ready(function () {
  jQuery(".regname").change(function () {
    if (jQuery(this).val().length < 3) {
      jQuery(".regnamealert").show();
      jQuery(this).parent().addClass("has-error");
      jQuery(this).parent().removeClass("has-success");
    } else {
      jQuery(".regnamealert").hide();
      jQuery(this).parent().removeClass("has-error");
      jQuery(this).parent().addClass("has-success");
    }
  });

  jQuery(".regphone").change(function () {
    if (jQuery(this).val().length < 10) {
      jQuery(".regphonealert").show();
      jQuery(this).parent().addClass("has-error");
      jQuery(this).parent().removeClass("has-success");
    } else {
      jQuery(".regphonealert").hide();
      jQuery(this).parent().removeClass("has-error");
      jQuery(this).parent().addClass("has-success");
    }
  });

  jQuery(".regemail").change(function () {
    if (jQuery(this).val().length < 3) {
      jQuery(".regemailalert").show();
      jQuery(this).parent().addClass("has-error");
      jQuery(this).parent().removeClass("has-success");
    } else {
      var regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if (regex.test($('.regemail').val())) {
        jQuery(".regemailalert").hide();
        jQuery(this).parent().removeClass("has-error");
        jQuery(this).parent().addClass("has-success");
      }
    }
  });

  jQuery(".regpass").change(function () {
    if (jQuery(this).val().length < 6) {
      jQuery(".regpassalert").show();
      jQuery(this).parent().addClass("has-error");
      jQuery(this).parent().removeClass("has-success");
    } else {
      jQuery(".regpassalert").hide();
      jQuery(this).parent().removeClass("has-error");
      jQuery(this).parent().addClass("has-success");
    }
  });
  jQuery(".regsave").mousemove(function () {    
    
  });
});




