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
        $( "div.Feather.Flags" ).each(function() {
          $( this ).parents().eq(2).addClass('feather-flags');
        });

        var queryString = window.location.search;
        var urlParam = new URLSearchParams(queryString);
        var prod_type = urlParam.get('fd_type');

        if (prod_type == 1 && $(".view-products .view-content > div").hasClass('feather-flags')) {
          $('div.feather-flags:lt(9)').show();
          $('div.feather-flags:visible:last').html('<div id="more-btn"><a href="/products?fd_type=117&fd_industry=All&fd_hire=All&fd_events=All">View more...</a></div>');
        } else {
          $(".view-products .view-content > div").removeClass('feather-flags');
        }
        

      }
    };
  
  })(jQuery, Drupal);
  
  