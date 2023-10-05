/**
 * @file
 * product filter additional functionality
 */
(function ($, Drupal) {
    'use strict';
  
    /**
    * Attaches select options behavior.
    *
    * @type {Drupal~behavior}
    * 
    * @prop {Drupal~behaviorAttach} attach
    *   Chosen options behavior.
    */
    Drupal.behaviors.product_filter = {
      attach: function(context, settings) {

        $("#edit-fd-type--2 ul li a.bef-link--selected").next().show(300);
        $("#edit-fd-type--2 ul li a.bef-link--selected").parents().eq(1).show();
        // var fd_class = $('.view-products .view-content .views-row .views-field span > div').attr("class");
        // fd_class = fd_class.replace(/\s/g , ".");


        $('div.Feather.Flags').hide().slice(0, 12).show();
        var more_btn = $( "<div id='object1'></div>" )
        $('div.Feather.Flags:visible:last').parents().eq(2).append("<div id='object1'>View more...</div>");

        if ($(".view-products .view-empty")[0]) {
            $("#content .section > div:nth-child(-n+6)").show();
            $("#block-exposedformproductspage-1-2").hide();
        } else {
            $("#content .section > div:nth-child(-n+6)").hide();
            $("#block-exposedformproductspage-1-2").show();
        };


        // $( "#edit-fd-type--2 ul li" ).on( "click", function() {
        //     $( "#edit-tid--2 ul li a" ).each(function() {
        //     });
        // });

      }
    };
  
  })(jQuery, Drupal);
  
  