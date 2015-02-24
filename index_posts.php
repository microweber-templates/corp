<?php

/*

  type: layout
  content_type: static
  name: Home Posts
  position: 2
  description: Home Post

*/

?>
<?php include TEMPLATE_DIR. "header.php"; ?>



                  <div class="edit" field="content" rel="content-home-posts-2">
                    <img src="<?php print template_url(); ?>img/home.png" class="element" alt="" />
                    <h2 class="text-center">Latest Posts</h2>
                    <hr style="margin-top: 0;">
                    <module type="posts" id="home-posts" data-show="thumbnail,title,description">
                </div>

<?php include TEMPLATE_DIR. "footer.php"; ?>
