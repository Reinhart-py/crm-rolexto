<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper"> 
  
  <!-- Content Header (Page header) -->
  
  <section class="content-header">
    <h1> <i class="fa fa-users"></i> Users <small></small> </h1>
  </section>
  
  <!-- Main content -->
  
  <section class="content"> 
    
    <!-- /.row -->
    
    <div class="row"> 
      
      <!-- form close-->
      
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> </h3>
          </div>
          <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> <?php echo get_message($this->session->flashdata('message'),'message'); ?>
          <?php if((isset($user_list)) && (!empty($user_list)))

				{?>
          <div class="box-body table-responsive" style="padding:0px 15px">
            <table id="example1" class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th style="width:10px">S.No.</th>
                  
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th style="width:10px"> Status</th>
                 
                  <th>Created</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

					foreach($user_list as $k=>$li)

					{

						?>
                <tr>
                  <td><?php echo $k+1; ?></td>
              
                  <td><?php echo $li['name'];?></td>
                  
                  <td><?php 

				  if($li['role']==1)

				  { ?>
                    <span class="label label-warning">Super Admin</span>
                    <?php

                   } 

				   else

					{ ?>
                    <span class="label label-info">Sub Admin</span>
                    <?php

					}?></td>
                    
                  <td><?php echo $li['email']; ?></td>
                  <td><?php echo $li['mobile']; ?></td>
                  <td><?php 

				  if($li['status']==0)

				  { ?>
                    <span class="label label-warning">Blocked</span>
                    <?php

                   } 

				   elseif($li['status']==1)

					{ ?>
                    <span class="label label-info">Active</span>
                    <?php

					}?></td>
                  
                  <td><?php echo date('d-M-Y',strtotime($li['created'])); ?></td>
                 <td class="center hidden-phone">
                                            <a  href="<?php echo base_url();?>manager/user/edit/<?php echo $this->encrypt->encode($li['id']); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                            
                                               <a  href="<?php echo base_url();?>manager/user/delete/<?php echo $this->encrypt->encode($li['id']); ?>" onclick="return do_confirm();" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-remove"></span></a>
                                            
                                            </td>
                </tr>
               
             
            <?php } ?>
            
             </tbody>
            </table>
            <?php			

				}

				else

				{?>
              <div class="alert alert-info">No Product Found</div>

				<?php  }

				?> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content --> 
  
</div>

<!-- /.content-wrapper --> 

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
