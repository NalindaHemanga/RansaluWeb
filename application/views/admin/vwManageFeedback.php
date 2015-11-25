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
            <h1>Feedbacks <small>Reply for Feedbacks</small></h1>
            <ol class="breadcrumb">
              <li><a href="Halls"><i class="icon-dashboard"></i> Feedbacks</a></li>
              <li class="active"><i class="icon-file-alt"></i> Feedbacks</li>
    
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->

        
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">From <i class="fa fa-sort"></i></th>
                    <th class="header">E-mail <i class="fa fa-sort"></i></th>
                    <th class="header">Feedback <i class="fa fa-sort"></i></th>
                    <th class="header">date <i class="fa fa-sort"></i></th>
                    <th class="header"></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 

                  foreach ($feedbackdata as $key => $value) {
                    ?>


                   
                    
                    <tr>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['message'] ?></td>
                    <td><?php echo $value['f_date'] ?></td>
                     <td><button class='btn btn-primary btn-xs' type='button' onclick="window.location='<?php echo base_url(); ?>admin/feedbacks/reply/<?php echo $value['f_id'] ?>'" ><i class='fa fa-reply'></i> Reply  </button></td>
            


                   </tr>
                    <?php
                  }
                 



                  ?>
                </tbody>
              </table>
            </div>
        
       
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>