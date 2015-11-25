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
            <h1>Rooms <small>Add Room</small></h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="icon-dashboard"></i> Rooms</a></li>
              <li class="active"><i class="icon-file-alt"></i> Rooms</li> 
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



  
  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/halls/register_hall">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Room No:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="r_no" name="rh_name" placeholder="Enter Room No" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Room Type:</label>
      <div class="col-sm-10">
        <select class="form-control" id="roomtype"  name="type">
        <option value='0' selected="selected">Select Option</option>
        <option value='Wedding'>Super Luxury</option>
        <option value='Home Comming'>Regular</option>

      </select>
      </div>
    </div>
    
     <div class="form-group">
     <label class="control-label col-sm-2" for="email">Room Size:</label>
     <div class="col-sm-10">
          <select class="form-control" id="roomtype"  name="size">
          
        <option value='0' selected="selected">Select Size</option>
        <option value='Wedding'>Single Bed</option>
        <option value='Home Comming'>Double Bed</option>
        <option value='Home Comming'>Family</option>

      </select>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Price(Rs):</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="text" name="price_per_hour" placeholder="Enter Price" required>
      </div>
    </div>
    
    
   

    
   
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Submit</button>
        <button type="reset" class="btn btn-default" >Reset</button>
      </div>
    </div>

  </form>

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>