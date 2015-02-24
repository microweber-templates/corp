<?php

/*

type: layout

name: Fixed

description: List Navigation

*/

?>

<?php
    $params['ul_class'] = '';
	$params['ul_class_deep'] = '';
    $rand = rand();
?>


<script>

$(document).ready(function(){
    $(window).bind('load scroll resize', function(){
      mw.$(".pages-nav-fixed-holder")
        .each(function(){
           var nav = $(this),
               window_st = $(this).scrollTop(),
               nav_ot = nav.offset().top,
               header_height = mw.$("#header-master").height();
           if(nav.height() < ($(this).height() - nav_ot)){
               if((window_st + nav_ot) > nav_ot){
                    nav.addClass('fixed-active');
                    $(".pages-nav-fixed", nav).css("top",nav.offset().top).width(nav.width());
               }
               else{
                 nav.removeClass("fixed-active");
               }
           }
           else{
               nav.removeClass("fixed-active");
           }
        });

    });
});

</script>

<div id="pages-nav-<?php print $rand; ?>" class="pages-nav-fixed-holder">
  <div class="pages-nav pages-nav-fixed">
  	<?php
      $mt =  menu_tree($menu_filter);
      if($mt != false){
        print ($mt);
      }
      else {
        print lnotif("There are no items in the menu <b>".$params['menu-name']. '</b>');
      }
      ?>
  </div>
</div>

