<?php

/*

type: layout

name: Fixed

description: List Navigation

*/

?>

<?php
    $params['ul_class'] = 'nav nav-pills nav-stacked';
	$params['ul_class_deep'] = 'nav nav-pills nav-stacked';
    $rand = rand();
?>


<script>mw.require("<?php print $config['url_to_module'] ?>templates/templates.css", true);</script>
<script>

$(document).ready(function(){
    $(window).bind('load scroll resize', function(){
       var nav = mw.$("#pages-nav-<?php print $rand; ?>"),
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

</script>

<div id="pages-nav-<?php print $rand; ?>" class="pages-nav-fixed-holder">
  <div class="pages-nav pages-nav-fixed">
  	<?php pages_tree($params);  ?>
  </div>
</div>
