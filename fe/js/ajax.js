jQuery(document).ready(function() {
    jQuery("#pettype_id").change(function() {
        jQuery.ajax({
            type: "POST",
            url: "/ajax/getbreeds",
            dataType: "text",
            data: {pettype_id: jQuery("#pettype_id").val()},
            success: function(html) {
                jQuery("#breedid").html(html);
            },
            error: function() {
                alert("error");
            }
        });
    });

    jQuery("#cityid").change(function() {
//        alert(jQuery("#cityid").val());
        if (jQuery("#cityid").val() == -1) {
            jQuery('#modalFormStyle1').modal('show');
        }
        //russia
        if (jQuery("#cityid").val() == 0) {
            jQuery("#help").val(3);
            if (jQuery("#cityid :last").val() != -1) {
                jQuery("#cityid :last").remove();
            }
        }
        if (jQuery("#cityid").val() > 0) {
            jQuery("#help").val(1);
            if (jQuery("#cityid :last").val() != -1) {
                jQuery("#cityid :last").remove();
            }
        }

//        alert(jQuery("#cityid").val());
//        jQuery.ajax({
//            type: "POST",
//            url: "/ajax/getdistrict",
//            dataType: "text",
//            data: {city_id: jQuery("#cityid").val()},
//            success: function(html) {
//                jQuery("#districtid").html(html);
//            },
//            error: function() {
//                alert("error");
//            }
//        });
    });

    jQuery(".savecity").click(function() {
        if (jQuery("#city option:selected").val() == 0) {
            // когда выбрали регион
            jQuery('#cityid').append(jQuery('<option>', {
                value: jQuery("#region option:selected").val(),
                text: jQuery("#region option:selected").text(),
                selected: jQuery("#city option:selected").val()
            }));
            jQuery("#help").val(2);
        }
        if (jQuery("#city option:selected").val() == undefined) {
            // по всей россии
            $('#cityid option')[0].selected = true;
            jQuery("#help").val(3);
        }
        if (jQuery("#city option:selected").val() > 0) {
            // по городу
            jQuery('#cityid').append(jQuery('<option>', {
                value: jQuery("#city option:selected").val(),
                text: jQuery("#city option:selected").text(),
                selected: jQuery("#city option:selected").val()
            }));
            jQuery("#help").val(1);
        }
        jQuery('#modalFormStyle1').modal('hide');
    });

    // создание объявления
    jQuery("#type").change(function() {
        // раздел про животных, показываем подтипы
        jQuery(".pettype").removeClass('hidden');
    });

    jQuery("#pettype").change(function() {
        jQuery(".breed").removeClass('hidden');
        jQuery.ajax({
            type: "POST",
            url: "/ajax/getbreeds",
            dataType: "text",
            data: {pettype_id: jQuery("#pettype").val()},
            success: function(html) {
                jQuery("#breed").html(html);
            },
            error: function() {
                alert("error");
            }
        });
    });
    
    

    jQuery("#region").change(function() {
        if (jQuery("#region").val() == 0) {
            jQuery(".city").addClass('hidden');
        } else {
            jQuery(".city").removeClass('hidden');
            jQuery.ajax({
                type: "POST",
                url: "/ajax/getcitys",
                dataType: "text",
                data: {region_id: jQuery("#region").val()},
                success: function(html) {
                    jQuery("#city").html(html);
                },
                error: function() {
                    alert("error");
                }
            });
        }
    });

    jQuery(".savead").click(function() {
        var flag = 1;
        var summary = 0;
        var body = 0;
        if (jQuery("#summary").val() == '') {
            flag = 0;
            summary = 1;
        }
        if (jQuery("#body").val() == '') {
            flag = 0;
            body = 1;
        }
        if (jQuery("#price").val() == '') {
            flag = 0;
            body = 1;
        }

        if (flag == 1) {
            jQuery.ajax({
                type: "POST",
                url: "/ajax/updatead",
                dataType: "text",
                data: {ad_id: jQuery("#ad").val(), author_name: jQuery("#author_name").val(), phone: jQuery("#phone").val(), region_id: jQuery("#region").val(), city_id: jQuery("#city").val(), type_id: jQuery("#type").val(), pettype_id: jQuery("#pettype").val(), breed_id: jQuery("#breed").val(), summary: jQuery("#summary").val(), body: jQuery("#body").val(), price: jQuery("#price").val()},
                success: function(html) {
//                jQuery(".savead").addClass('hidden');
                    jQuery(".saved").removeClass('hidden');
                    jQuery(".error").addClass('hidden');
                },
                error: function() {
                    alert("error");
                }
            });
        } else {
            jQuery(".error").removeClass('hidden');
        }

    });

    jQuery(".finder").on("click", ".cross", function() {
//        alert(jQuery(this).prev().prev().attr('src'));
//        alert(jQuery("#ad").val());
        jQuery.ajax({
            type: "POST",
            url: "/ajax/removeph",
            dataType: "text",
            data: {src: jQuery(this).prev().prev().attr('src'), ad_id: jQuery("#ad").val()},
            success: function() {
//                jQuery(".savead").addClass('hidden');
//                jQuery(".saved").removeClass('hidden');
            },
            error: function() {
                alert("error");
            }
        });
        jQuery(this).prev().hide();
        jQuery(this).prev().prev().hide();
        jQuery(this).hide();
    });

    var angle = 0;
    jQuery(".finder").on("click", ".turn", function() {
        angle += 90;
        jQuery(this).prev().rotate(angle);

        jQuery.ajax({
            type: "POST",
            url: "/ajax/turnph",
            dataType: "text",
            data: {src: jQuery(this).prev().attr('src'), angle: angle},
            success: function() {
//                jQuery(".savead").addClass('hidden');
//                jQuery(".saved").removeClass('hidden');
            },
            error: function() {
                alert("error");
            }
        });

    });

    // поворачиваем фотки в списке объявлений
    jQuery(".photomain").click(function() {
        // находим следующую фотку
        jQuery()
    });
    
    
 
});




