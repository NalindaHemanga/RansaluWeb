<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Event <small>Add Event</small></h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="icon-dashboard"></i> Events</a></li>
              <li class="active"><i class="icon-file-alt"></i> Events</li> 
            </ol>
          </div>





        </div><!-- /.row -->

         <div class="row">
          <div class="col-lg-12">
           
  <?php
        if(isset($message) && $message_type =='success')
        {
            ?>
        <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo $message; ?></div>
        <?php
        }
        ?>

         <?php
        if(isset($message) && $message_type =='error')
        {
            ?>
         <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo $message; ?></div>
        <?php
        }
        ?>



  
 <form class="form-horizontal" role="form" id="eventaddform" onsubmit="return addEvent();">
 
<div class="panel panel-default">
<div class="panel-heading">Basic Details</div>
<div class="panel-body">
  <div class="form-group">
    <label class="control-label col-sm-2" for="eventname">Event Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="eventname" placeholder="Enter Event Name" required name="event_name">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="eventtype">Event Type</label>
    <div class="col-sm-10"> 
      <select class="form-control" id="eventtype" placeholder="Enter Event Type" name="event_type">
        <option value='0' selected="selected">Select Option</option>
        <option value='Wedding'>Wedding</option>
        <option value='Home Comming'>Home Comming</option>
        <option value='Birthday Party'>Birthday Party</option>
        <option value='Other'>Other</option>

      <select>
    </div>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Guest Details</div>
  <div class="panel-body">
  <div class="form-group">
    <label class="control-label col-sm-2" for="guestnic">Guest's NIC No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="guestnic" placeholder="Enter NIC No" required name="guest_nic">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="guestcount">Guest Count</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="guestcount" placeholder="Enter Guest Count" required name="guest_count">
    </div>
  </div>
  
  </div>
  </div>

  <div class="panel panel-default">
  <div class="panel-heading">Event Calendar</div>
  <div class="panel-body">

    <div class="form-group">
    <label class="control-label col-sm-2" for="eventdate">Event Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="eventdate" required name="event_date">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="event_time">Event Time</label>
    <div class="col-sm-10">
      <div class="radio">
         <label><input type="radio" name="event_time" checked="checked" value="8.00 a.m. - 4 p.m.">From morning (8.00 a.m. - 4 p.m.)</label>
      </div>
      
      <div class="radio">
          <label><input type="radio" name="event_time" value="6.00 p.m. - 11 p.m.">From evening (6.00 p.m. - 11 p.m.)</label>
    </div>

     <div class="radio">
          <label><input type="radio" name="event_time" value="8.00 a.m. - 11 p.m.">Full day (8.00 a.m. - 11 p.m.)</label>
    </div>

     </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="event_venue">Event Venue</label>
    <div class="col-sm-10">
      <div class="radio">
         <label><input type="radio" name="event_venue" checked="checked" value="Main Reception Hall"> Main Reception Hall</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="event_venue" value="Silicon Ballroom">Silicon Ballroom</label>
      </div>
     </div>
  </div>




  </div>
</div>





  
 
  
  
  <div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default pull-right">Submit</button>
    </div>
  </div>

  



</form>

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>