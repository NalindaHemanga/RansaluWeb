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
            <h1>Banqueting Halls <small>Manage Banqueting Halls</small></h1>
            <ol class="breadcrumb">
              <li><a href="Halls"><i class="icon-dashboard"></i> Halls</a></li>
              <li class="active"><i class="icon-file-alt"></i> Halls</li>
              
              
              <button class="btn btn-primary" type="button" style="float:right;" onclick="window.location='<?php echo base_url(); ?>admin/halls/add_hall'"><i class="fa fa-plus-square"></i> Add New Hall</button>
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->

        
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">Hall Name <i class="fa fa-sort"></i></th>
                    <th class="header">Max Seating <i class="fa fa-sort"></i></th>
                    <th class="header">Price per Hour(Rs) <i class="fa fa-sort"></i></th>
                    <th class="header"></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 

                  foreach ($halldata as $key => $value) {



                   
                    
                    echo "<tr>";
                    echo "<td>".$value['rh_name']."</td>";
                    echo "<td>".$value['max_capacity']."</td>";
                    echo "<td>".$value['price_per_hour']."</td>";
                     echo "<td><button class='btn btn-primary btn-xs' type='button' onclick=\"window.location=' ".base_url()."admin/halls/indexUpdate/".$value['rh_id']."'\"><i class='fa fa-pencil-square-o'></i> Edit  </button> <button class='btn btn-danger btn-xs' type='button'  onclick=\"window.location=' ".base_url()."admin/halls/delete_hall/".$value['rh_id']."'\"><i class='fa fa-times'></i> Remove</button/></td>";
                     //echo "<button class='btn btn-danger btn-xs' type='button' onclick=\"window.location=' ".base_url()."admin/halls/delete_hall/".$value['rh_id']."'\"><i class='fa fa-times'></i> Remove  </button></td>";


                    echo "</tr>";

                  }
                 



                  ?>
                </tbody>
              </table>
            </div>
        
       
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>