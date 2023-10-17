/**
 * @file
 * Contains slider
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
  Drupal.behaviors.slider = {
    attach: function(context, settings) {
      $('.view-frontpage-slider-main .view-content').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        dots: true,
        infinite: true,
        arrows: false,
        autoplay: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
    
    $( "#block-views-block-frontpage-slider-main-block-1 .content .view-frontpage-slider-main .view-content ul.slick-dots li button" ).each(function() {
      var slidebtn = $( this ).attr("aria-controls");
      $( ".views-row.slick-slide:not(.slick-cloned)" ).each(function() {
        var slide = $( this ).attr("id");
        var slidetxt = $( this ).text();

        if (slide == slidebtn) {
          $("#block-views-block-frontpage-slider-main-block-1 .content .view-frontpage-slider-main .view-content ul.slick-dots li button[aria-controls="+slidebtn+"]").text(slidetxt);
        };
  
      });
    });

    }
  };

})(jQuery, Drupal);

