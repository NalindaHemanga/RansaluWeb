<?php
$this->load->view('vwHeader');
?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
<link href="<?php echo HTTP_CSS_PATH; ?>jumbotron.css" rel="stylesheet">


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>

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



    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
<?php
$this->load->view('vwFooter');
?>