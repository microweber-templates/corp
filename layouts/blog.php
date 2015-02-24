<?php

/*

  type: layout
  content_type: dynamic
  name: Blog
  position: 5
  description: Blog
  tag:Blog

*/

?>
<?php include TEMPLATE_DIR. "header.php"; ?>


          <module content-id="<?php print PAGE_ID; ?>" type="posts" template="clean" data-show="thumbnail,title,description" />


<?php include TEMPLATE_DIR. "footer.php"; ?>