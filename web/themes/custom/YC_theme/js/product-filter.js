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

        $( "#edit-tid--2 ul li" ).on( "click", function() {

            $( "#edit-tid--2 ul li a" ).each(function() {

                if ($(this).hasClass("bef-link--selected")) {
                    var filterList = $( this ).attr("name");
                    const filterPair = [
                        {
                            selected: "tid[6]", // accessories
                            shown: "js-form-item-tid-3"
                        },
                        // {
                        //     selected: "tid[2]", // banner stand and printed banners catalogue
                        //     shown: "js-form-item-tid-2"
                        // },
                        {
                            selected: "tid[3]", // banners
                            shown: "js-form-item-tid-2"
                        },
                        {
                            selected: "tid[4]", // bunting streamers
                            shown: "js-form-item-tid-4"
                        },
                        {
                            selected: "tid[5]", // display $ exhibition
                            shown: "js-form-item-tid-5"
                        },
                        {
                            selected: "tid[1]", // Flags
                            shown: "js-form-item-tid-1"
                        },
                    ];

                    for (let i = 0; i < filterPair.length; i++) {
                        console.log(filterPair[i].shown);
                        if (filterList == filterPair[i].selected) {
                            $("."+filterPair[i].shown).fadeIn( 800 );
                        } else {
                            $("."+filterPair[i].shown).fadeOut( 800 );
                        }
                    }
                }
            });
        });

        var queryString = window.location.search;
        var urlParam = new URLSearchParams(queryString);
        var prod_type = urlParam.get('type');
        var flag_type = urlParam.get('flag');
        // const professional = urlParam.get('professional');
        if (prod_type == 1) {
            // queryString = queryString.split('0')[0];
            // alert(queryString);
            flag_type = "All";
        }

      }
    };
  
  })(jQuery, Drupal);
  
  