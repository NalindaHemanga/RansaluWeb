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
            <h1>Users <small>Manage Users Module</small></h1>
            <ol class="breadcrumb">
              <li><a href="Users"><i class="icon-dashboard"></i> Users</a></li>
              <li class="active"><i class="icon-file-alt"></i> Users</li>
              
              
              <button class="btn btn-primary" type="button" style="float:right;" onclick="window.location='<?php echo base_url(); ?>admin/users/add_user'">Add New User</button>
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->

        
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">UserName <i class="fa fa-sort"></i></th>
                    <th class="header">Email <i class="fa fa-sort"></i></th>
                    <th class="header">NIC No <i class="fa fa-sort"></i></th>
                    <th class="header">Telephone<i class="fa fa-sort"></i></th>
                    <th class="header">User type<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                  foreach ($userdata as $key => $value) {



                    if($value['user_type']=='SA')
                      $usertype="Admin";
                    else
                      $usertype="User";
                    
                    echo "<tr>";
                    echo "<td>".$value['username']."</td>";
                    echo "<td>".$value['email']."</td>";
                    echo "<td>".$value['nic']."</td>";
                    echo "<td>".$value['telephone']."</td>";
                    echo "<td>".$usertype."</td>";


                    echo "</tr>";

                  }
                 



                  ?>
                </tbody>
              </table>
            </div>
        
        <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#"><<</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">>></a></li>
              </ul>
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>