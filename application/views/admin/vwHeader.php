<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="abhishek@devzone.co.in">

     <title>Ransalu Hotel and catering service</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <!-- Add custom CSS here -->
    <link href="<?php echo HTTP_CSS_PATH; ?>arkadmin.css" rel="stylesheet">
      <!-- JavaScript -->
    <script src="<?php echo HTTP_JS_PATH; ?>jquery-1.10.2.js"></script>
    <script src="<?php echo HTTP_JS_PATH; ?>bootstrap.js"></script>
    <script src="<?php echo HTTP_JS_PATH; ?>das.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
    <!--  

Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>admin">Ransalu Admin panel</a>
        </div>
 <?php 
// Define a default Page
  $pg = isset($page) && $page != '' ?  $page :'dash'  ;    
?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li <?php echo  $pg =='dash' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li <?php echo  $pg =='user' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/users"><i class="fa fa-user"></i> Users</a></li>              
            <li <?php echo  $pg =='room' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/rooms"><i class="fa fa-home"></i> Rooms</a></li>
            <li <?php echo  $pg =='hall' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/halls"><i class="fa fa-university"></i> Banqueting Halls</a></li>
            <li <?php echo  $pg =='products' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/products"><i class="fa fa-newspaper-o"></i> Menus</a></li>
            <li <?php echo  $pg =='event' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/events"><i class="fa fa-calendar"></i> Events</a></li>
            <li <?php echo  $pg =='feedback' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/feedbacks"><i class="fa fa-quote-left"></i> Feedback</a></li>
            
        
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username') ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
      
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>admin/home/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
