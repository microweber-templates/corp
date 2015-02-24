<?php

/*

type: layout
content_type: static
name: Contact Us

description: Contact us layout
position: 7
*/


?>
<?php include TEMPLATE_DIR. "header.php"; ?>

<div id="content">
<div class="container">

    <div class="text-center"><h2 class="edit main-title-2" field="title" rel="content" align="center">Page Title</h2></div>

    <p align="center" class="element muted">
      Contact us and share with us you thoughts.
      We will respond as soon as we can.
      Thank you!
    </p>
    <hr>

    <module type="google_maps" id="google_maps" />
	<div class="container">
	<div class="box-container">

		<div class="edit" field="content" rel="content">
          <div class="well contacts-info text-center">
          <div class="edit" field="content_body" rel="content">
            <h3 class="main-title">Address</h3>
            <div class="contacts-icons">
            <p>
                Sofia 1700, Bulgaria, My place #10 str. , bl. B, fl. 3
            </p>
            <p>
            +1 234-567-890
            </p>
            </div>
          </div>
          </div>
            <p><br></p>
            <div style="max-width: 500px;margin: auto"><module type="contact_form" id="contact-form" /></div>
            <p class="element"><br></p>
		</div>
	</div>
	</div>
</div>
</div>
<?php include TEMPLATE_DIR. "footer.php"; ?>
