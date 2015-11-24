<?php
$this->load->view('vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>jumbotron.css" rel="stylesheet">
<div style="height: 60px; width: 100%; float: left; background-color: #ffffff" ></div>
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/f.jpg" alt="f" title="" id="wows1_0"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/g.jpg" alt="g" title="" id="wows1_1"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/h.jpg" alt="h" title="" id="wows1_2"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/w.jpg" alt="w" title="" id="wows1_5"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/e.jpg" alt="e" title="" id="wows1_6"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/r.jpg" alt="r" title="" id="wows1_7"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/u.jpg" alt="u" title="" id="wows1_10"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/i.jpg" alt="i" title="" id="wows1_11"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/o.jpg" alt="o" title="" id="wows1_12"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/p.jpg" alt="p" title="" id="wows1_13"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/a.jpg" alt="a" title="" id="wows1_14"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/s.jpg" alt="bootstrap slider" title="" id="wows1_15"/></a></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/d.jpg" alt="d" title="" id="wows1_16"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title="f"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/f.jpg" alt="f"/>1</span></a>
                <a href="#" title="g"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/g.jpg" alt="g"/>2</span></a>
                <a href="#" title="h"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/h.jpg" alt="h"/>3</span></a>
                <a href="#" title="w"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/w.jpg" alt="w"/>6</span></a>
                <a href="#" title="e"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/e.jpg" alt="e"/>7</span></a>
                <a href="#" title="r"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/r.jpg" alt="r"/>8</span></a>
                <a href="#" title="u"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/u.jpg" alt="u"/>11</span></a>
                <a href="#" title="i"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/i.jpg" alt="i"/>12</span></a>
                <a href="#" title="o"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/o.jpg" alt="o"/>13</span></a>
                <a href="#" title="p"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/p.jpg" alt="p"/>14</span></a>
                <a href="#" title="a"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/a.jpg" alt="a"/>15</span></a>
                <a href="#" title="s"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/s.jpg" alt="s"/>16</span></a>
                <a href="#" title="d"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/d.jpg" alt="d"/>17</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery carousel</a> by WOWSlider.com v8.6</div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>wowslider.js"></script>
    <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>script.js"></script>
    <!-- End WOWSlider.com BODY section -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div>
      <div class="container">
        <h1>Welcome to Ransalu Receptions & Catering</h1>
        <p>We accomodate wedding receptions, business luncheons and other special occasions. Once you enter our doors you'll experience the best in luxury accomodation, complemented by the highest levels of service designed to cater to your discerning taste.</p>

      </div>
    </div>



    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
            <h2>Luxury Rooms</h2>
            <img src="<?php echo HTTP_IMAGES_PATH; ?>room.jpg">
          <p>Stylishly decorated luxury rooms we offer at an affordable range of prices will match your mid-week getaway or that special weekend you've planned with your loved ones perfectly.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Banquet Halls</h2>
            <img src="<?php echo HTTP_IMAGES_PATH; ?>hall.jpg">
          <p>With the ability to offer three separate locations to host your special event, and a variety of menus we are capable of creating the perfect setting for your special occasion.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
            <h2>Location</h2>
            <img src="<?php echo HTTP_IMAGES_PATH; ?>location.jpg">
          <p>Situated at the edge of Gampaha city, Ransalu Receptions & Catering offers the perfect environment to host your special event. It is ideal for you to take a break from the busy life in the city.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
<?php
$this->load->view('vwFooter');
?>