<?php

/*

  type: layout
  content_type: static
  name: Home Products
  position: 2
  description: Home Products

*/

?>
<?php include TEMPLATE_DIR. "header.php"; ?>



    <div class="edit" field="content" rel="content-home-products">
    <img src="<?php print template_url(); ?>img/home.png" class="element" alt="" />
    <br>
    <h2 class="text-center">Latest From the Shop</h2>
    <hr>
    <module type="shop/products" id="home-posts" data-description-length="100" limit="3" data-hide-paging="true">
    </div>

<?php include TEMPLATE_DIR. "footer.php"; ?>
