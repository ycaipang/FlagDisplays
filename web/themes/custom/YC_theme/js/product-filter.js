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

        // show hide submenu on main filter
        $( "#edit-fd-type--2 ul li a, #edit-fd-type--2 ul ul li a, #edit-fd-type--3 ul li a, #edit-fd-type--3 ul ul li a" ).each(function() {
          if ($(this).hasClass('bef-link--selected')) {
            $(this).next().addClass('show');
            $(this).parents().eq(1).addClass('show');
          } else {
            $(this).next().removeClass('show');
          }
        });

        if ($(".view-products .view-empty")[0]) {
            $("#content .section > div:nth-child(-n+6)").show();
            $("#block-exposedformproductspage-1-2").hide();
        } else {
            $("#content .section > div:nth-child(-n+6)").hide();
            $("#block-exposedformproductspage-1-2").show();
        };


        // add class to indentify flag category
        $(".view-products .view-content .views-row .views-field .field-content > div").each(function() {
          var flagclass = $( this ).attr("class").toLowerCase();
          var flagid = $( this ).attr("name");
          $( this ).parents().eq(2).addClass(''+flagclass+'-flags').attr("size-name", flagid);
        });

        var queryString = window.location.search;
        var urlParam = new URLSearchParams(queryString);
        var prod_type = urlParam.get('fd_type');
        var flagobj = {};
        var flagattobj = {};

        if (prod_type < 10 ) {
          $('#block-exposedformproductspage-1-2').hide();
        }

        $(".view-products .view-content .views-row").each(function() {
          flagattobj[$(this).attr('size-name')] = true; 
        });
        var atttresult = new Array();
        for(var i in flagattobj) {
          atttresult.push(i);
        }
        
        for (var g = 0; g < atttresult.length; g++) {
          if (prod_type != 1 && $('.column-'+atttresult[g]+'').length == 0 ) {
          // $('.view-products .view-content .views-row[size-name="'+atttresult[g]+'"]').wrapAll('<div class="column-'+atttresult[g]+' row" />');
          // $('<h4>'+atttresult[g]+'</h4>').insertBefore('.column-'+atttresult[g]+'');
          }
        }

        // get the flag classes
        $(".view-products .view-content > div").each(function() {
          $.each(( this.className || '' ).split(/\s+/), function (i, v) {
            flagobj[v] = true;
          })
        })
        var flagclasses = $.map(flagobj, function (val, key) {
          return key == '' ? undefined : key;
        })
        
        var newflagclasses = flagclasses.filter(function(value) {
          return value.indexOf('col') < 0 && value.indexOf('views') < 0 && value.indexOf('more-btn') < 0;
        })

        for (var i = 0; i < newflagclasses.length; i++) {
          if (prod_type == 1 && $('div.'+newflagclasses[i]+'').length > 0 && $('#btn-'+newflagclasses[i]+'').length == 0) {
            $('div.'+newflagclasses[i]+':gt(8)').hide();
            if ( $('#btn-'+newflagclasses[i]+'').length == 0 ) {
              var textsplit = newflagclasses[i].split('-')[0];
              var splitCap = textsplit.substr(0,1).toUpperCase()+textsplit.substr(1);
              var filterlink = $('#block-exposedformproductspage-1 #edit-fd-type--2 ul ul li a:contains("'+splitCap+'")').attr("href");
              var filtername = $('#block-exposedformproductspage-1 #edit-fd-type--2 ul ul li a:contains("'+splitCap+'")').attr('name');
              var filterid = $('#block-exposedformproductspage-1 #edit-fd-type--2 ul ul li a:contains("'+splitCap+'")').attr('id');

              $('div.'+newflagclasses[i]+':visible:last').replaceWith('<div id="btn-'+newflagclasses[i]+'" class="more-btn"><a href="'+filterlink+'" id="'+filterid+'" name="'+filtername+'">View more</a></div>');
              
            }
          }
        }
      }
    };
  
  })(jQuery, Drupal);
  
  