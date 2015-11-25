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
            <h1>Feedbacks <small>Reply</small></h1>
            <ol class="breadcrumb">
              <li><a href="Users"><i class="icon-dashboard"></i> Feedbacks</a></li>
              <li class="active"><i class="icon-file-alt"></i> Feedbacks</li> 
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



  
  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/users/register_user">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <label class="control-label col-sm-2" for="name"><?php echo $feedbackdata[0]['name'] ?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <label class="control-label col-sm-2" for="email"><?php echo $feedbackdata[0]['email'] ?></label>
      </div>
    </div>
     
    
   

    <div class="form-group">
      <label class="control-label col-sm-2" for="cpwd">Message Body:</label>
      <div class="col-sm-10">          
        <textarea class="form-control" rows="10" id="comment" name="message" placeholder="Type you message here"></textarea>
      </div>
    </div>
   
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Send mail</button>

      </div>
    </div>
  </form>

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>