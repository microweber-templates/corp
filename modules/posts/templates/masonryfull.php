<?php

/*

type: layout

name: masonryfull

description: masonryfull

*/
?>


<?php  $rand = uniqid(); ?>
<div class="clearfix module-posts-template-masonry module-posts-template-masonryfull" id="posts-<?php print $rand; ?>">

    <?php if (!empty($data)): ?>


<script>mw.require("<?php print MW_MODULES_URL; ?>posts/js/masonry.pkgd.min.js", true); </script>
<script>mw.moduleCSS("<?php print MW_MODULES_URL; ?>posts/css/style.css"); </script>
<script>
    mw._masons = mw._masons || [];
    $(document).ready(function(){
        var m = mw.$('#posts-<?php print $rand; ?>');
        m.masonry({
          "itemSelector": '.masonry-item',
          "gutter":0
        });
        mw._masons.push(m);
        if(typeof mw._masons_binded === 'undefined'){
            mw._masons_binded = true;
               setInterval(function(){

                 var l = mw._masons.length, i=0;
                 for( ; i<l; i++){
                   var _m = mw._masons[i];
                   if(mw.$(".masonry-item", _m[0]).length > 0){
                      mw.$(".masonry-item", _m[0]).height(mw.$(".masonry-item", _m[0]).eq(0).width())
                       _m.masonry({
                          "itemSelector": '.masonry-item',
                          "gutter":0
                       });
                   }
                 }
               }, 500);
        }

    });
</script>





    <?php
        $count = -1;
        foreach ($data as $item):
        $count++;
    ?>

    <div class="masonry-item">
        <?php if(!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
            <a class="bgimg" href="<?php print $item['link'] ?>" style="background-image: url(<?php print thumbnail($item['image'], 600, 600); ?>);">

            </a>
        <?php endif; ?>

        <?php if(count($show_fields) == 1 and $show_fields[0] == 'thumbnail'){ ?>

        <?php } else { ?>

        <div class="masonry-item-container">
        <div class="module-posts-head">
        <?php if(!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
            <h3><a class="lead" href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h3>
        <?php endif; ?>
        <?php if(!isset($show_fields) or $show_fields == false or in_array('created_on', $show_fields)): ?>
            <small class="muted"><?php _e("Posted on"); ?>: <?php print $item['created_on']; ?></small>
        <?php endif; ?>
        </div>
        <?php if(!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
            <p class="description"><?php print $item['description'] ?></p>
        <?php endif; ?>


      <?php if(!isset($show_fields) or $show_fields == false or in_array('read_more', $show_fields)): ?>
      <div class="blog-post-footer">
        <a href="<?php print $item['link'] ?>" class="btn btn-default pull-fleft">
        <?php $read_more_text ? print $read_more_text : print _e('Continue Reading', true); ?>
        </a>
      </div>
      <?php endif; ?>
      </div>

      <?php } ?>
    </div>
    <?php endforeach; ?>



    <?php endif; ?>


</div>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>