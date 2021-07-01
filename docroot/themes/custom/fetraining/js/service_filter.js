/**
 * @file
 * Code to show Adchoices image as link.
 */

(function serviceFilter($, Drupal) {
  Drupal.behaviors.serviceFilter = {
    attach(context) {
      $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        $(".filter-active").removeClass("filter-active");
        $(this).addClass("filter-active");
        if(value == "all") {
          $('.check-service-card').closest('li[class=grid]').show('1000');
        }
        else
        {
          $(".check-service-card").not(value).closest('li[class=grid]').hide('3000');
          $('.check-service-card').filter(value).closest('li[class=grid]').show('3000');

        }
      });
    },
  };
})(jQuery, Drupal);
