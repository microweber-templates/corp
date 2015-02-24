<?php

/*

  type: layout
  content_type: static
  name: Services
  position: 2
  description: Services

*/

?>
<?php include TEMPLATE_DIR. "header.php"; ?>



      <div data-mw="main">

                  <h2 class="main-title edit" field="title" rel="content">Title</h2>
                  <div class="richtext edit" field="content" rel="content">
                    <p class="element"> Vivamus id turpis nulla. Donec molestie egestas dolor, at suscipit ex dapibus sed. Fusce eu libero ac odio euismod porta. Duis est elit, dapibus sit amet pharetra sit amet, dapibus eget tortor. Aenean viverra a eros quis ultricies. </p>
                  </div>
                 <div class="edit services-footer" field="services-footer-2" rel="global">
                    <div class="mw-row">
                        <div class="mw-col services-footer-contact-form-col" style="width: 60%;">
                            <div class="mw-col-container"><module type="contact_form" id="services-footer-contact-form"></div>
                        </div>
                        <div class="mw-col" style="width: 40%;">
                            <div class="mw-col-container richtext">
                            <h3>Contact Us</h3>
                            <h4>Phone numbers:</h4>
                            <ul>
                              <li>(UK) +1 234 5678</li>
                              <li>(US) +8 765 4321</li>
                            </ul>


                            <h3>Office address: </h3>
                            <p>Country: United Kingdom  <br>
                            City: London <br>
                            Street Address: LSE Houghton Street London, Entrance B, Floor 2, Ap. 19 <br>
                            Post Code: 1234</p>

                            </div>
                        </div>
                    </div>
                 </div>
      </div>


<?php include TEMPLATE_DIR. "footer.php"; ?>
