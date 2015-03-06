<?php include TEMPLATE_DIR. "header.php"; ?>


    <div id="blog-content-<?php print CONTENT_ID; ?>" data-mw="main">

          <h2 class="main-title edit" field="title" rel="content">Page Title</h2>
          <div class="edit post-content" field="content" rel="content">
            <module data-type="pictures" data-template="slider"  rel="content"  />
            <div class="edit" field="content_body" rel="content">
              <div class="element">
                <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative, Make Web.</p>
              </div>
            </div>
          </div>
          <div class="edit" field="post-social-bar" rel="global">
            <div class="blog-socials-bar">
                <module data-type="sharer" data-content-id="<?php print CONTENT_ID; ?>"  />
            </div>
          </div>
          <div class="edit" rel="content" field="comments">
            <module data-type="comments" data-template="default" data-content-id="<?php print CONTENT_ID; ?>"  />
          </div>

    </div>

<?php include   TEMPLATE_DIR.  "footer.php"; ?>
