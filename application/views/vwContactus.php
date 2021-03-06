<?php
$this->load->view('vwHeader');
?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
 
<div class="page-header container">
  <h1><small>Contact Us</font></small></h1>
</div>


<div class="container">
  <div class="panel panel-default" style="width:100%;float:left;">
  <div class="panel-body">
    Ransalu Caters,
    342, Miriswatta Rd,
    Gampaha
  </div>
</div>


<div class="panel panel-default" style="width:90%;float:left;margin-left: 50px;background-image: url(<?php echo HTTP_IMAGES_PATH; ?>/contact-hotel.jpg);background-repeat: no-repeat;background-size: 100%;border-radius: 25px;">

<form method="post" action="http://localhost/RansaluWeb/contactus/insert_msgs" class="contact">
    <fieldset class="contact-inner">
      <p class="contact-input">
        <input type="text" name="name" placeholder="Your Name…" autofocus required>
      </p>

      <p class="contact-input">
        <input type="email" name="email" placeholder="Your Email…" autofocus required>
      </p>

      <p class="contact-input">
        <textarea name="message" placeholder="Your Message…" required></textarea>
      </p>

      <p class="contact-submit">
        <input type="submit" value="Send Message">
      </p>
    </fieldset>
  </form>
</div>





</div>
  <div id="map" style = "margin: 0; padding: 0; height: 400px ; width: 100%;" >

  </div>

  <script>
    function initialize() {
      var mapCanvas = document.getElementById('map');
      var mapOptions = {
        center: new google.maps.LatLng(7.074585, 80.014588),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(mapCanvas, mapOptions)

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(7.074685, 80.014288),
        map: map
      })
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>


     <hr>
<?php
$this->load->view('vwFooter');
?>