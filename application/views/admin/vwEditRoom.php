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
            <h1>Rooms<small>Update Rooms</small></h1>
            <ol class="breadcrumb">
              <li><a href="Rooms"><i class="icon-dashboard"></i> Rooms</a></li>
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


    <?php /*    */

                
       foreach ($roomdata as $key => $value) {
         $r_id = $value['r_id'];
        $r_no = $value['r_no'];
        $type = $value['type'];
        $size = $value['size'];
        $price = $value['price']; 
                 
       }
    ?>
  
  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/rooms/update_room/<?php echo $r_id; ?> "> 
 <div class="form-group">
      <label class="control-label col-sm-2" for="name">Room No:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="r_no" name="r_no" placeholder="Enter Room No" value ="<?php echo $r_no ; ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="room_type" >Room Type:</label>
      <div class="col-sm-10">
        <select class="form-control" id="roomtype"  name="type"  >
        <option value ="<?php echo $type ; ?>" selected="selected" ><?php echo $type ; ?></option>
        <option >Super Luxury</option>
        <option >Regular</option>

      </select>
      </div>
    </div>
    
     <div class="form-group">
     <label class="control-label col-sm-2" for="email">Room Size:</label>
     <div class="col-sm-10">
          <select class="form-control" id="size"  name="size">
          
        <option value="<?php echo $size ; ?>" selected="selected" ><?php echo $size ; ?></option>
        <option >Single Bed</option>
        <option >Double Bed</option>
        <option >Family</option>

      </select>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Board Price(Rs):</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="text" name="price" placeholder="Enter Price" required value="<?php echo $price ; ?>">
      </div>
    </div>
    
    
   

    
   
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Save Changes</button>
      </div>
    </div>
  </form>
    
    

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>