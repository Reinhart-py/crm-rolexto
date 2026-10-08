
<?php require_once(APPPATH."views/manager/elements/header.php"); ?>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper px-4">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Category</h1>
    </section>    
      <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
      <!-- form close-->
        <div class="col-xs-12">

        <div class="box  p-4">
        <div class="x_row">
        <div class="x_col">  
          <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> 
          <?php echo get_message($this->session->flashdata('message'),'message'); ?>

          <div class="x_col-sm-auto  text-center pt-4 pt-md-0">
            <div class="pull-right">
              <a href="<?php echo base_url(); ?>manager/terms/add" class="btn btn-success"> Add New</a>
            </div>
          </div>

        </div>
        </div>
        </div>
        
          <div class="box">
            <!-- /.box-header -->        
          <div class="box-body table-responsive" > 
          <table id="example1" class="table table-hover table-bordered">  
                <thead> 
                <tr>
                    <th>S.NO.</th>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Parent</th>              	  
              	    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($category) && !empty($category))
				              {
                        foreach($category as $k=>$li){ ?>
                      <tr>
                       <td><?php echo $k+1; ?></td>
                       <td><?php echo $li['cat_type']; ?></td>
              			    <td><?php echo $li['title']; ?></td>
                        <td>
                        <?php if($li['parent_id']==0){?>
				                  <span class="label label-danger">No Parent</span>
				                <?php }?>              
                        <?php echo $li['parent_title']; ?>
                      </td>                     
                      <td>
                      <a href="<?php echo base_url(); ?>manager/terms/edit/<?php echo base64_encode($li['id']); ?>" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                      </td>
                   </tr>
                 <?php	} } ?>
               </tbody>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </section>
     </div>
<script>
function do_confirm()
{
    job=confirm("Before this action...redirect you to Confirm Delete page... ");
    if(job!=true)
    {
        return false;
    }
}
</script>
<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>