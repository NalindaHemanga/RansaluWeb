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
            <h1>Banqueting Halls<small>Banqueting Halls</small></h1>
            <ol class="breadcrumb">
              <li><a href="halls"><i class="icon-dashboard"></i> Halls</a></li>
              <li class="active"><i class="icon-file-alt"></i> Halls</li> 
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

                
       foreach ($halldata as $key => $value) {

        $rh_id=$value['rh_id'];
         $rh_name = $value['rh_name'];
        $max_capacity = $value['max_capacity'];
        $price_per_hour = $value['price_per_hour'];
        
                 
       }
    ?>
  
  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/halls/update_hall/<?php echo $rh_id; ?> "> 
 <div class="form-group">
      <label class="control-label col-sm-2" for="name">Reception Hall Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="rh_name" placeholder="Enter Hall Name" required value ="<?php echo $rh_name ; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Max Seating:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="email" name="max_capacity" placeholder="Enter Max Seating" required value ="<?php echo $max_capacity ; ?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Price per Hour (Rs):</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="text" name="price_per_hour" placeholder="Enter Price" required value ="<?php echo $price_per_hour ; ?>">
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