
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
            <div class="pull-left" style="display:flex; align-items:center; gap:10px;">
              <label style="margin:0; font-weight:600;">Filter by Type:</label>
              <select id="termsTypeFilter" class="form-control" style="width:auto; display:inline-block; border-radius:4px;">
                <option value="">All Categories</option>
                <option value="p_cat">Service Category (p_cat)</option>
                <option value="s_cat">Sub Category (s_cat)</option>
                <option value="v_status">Vertical Status (v_status)</option>
                <option value="lead_cat">Lead Category (lead_cat)</option>
                <option value="source">Lead Source (source)</option>
              </select>
            </div>
            <div class="pull-right">
              <a href="<?php echo base_url(); ?>manager/terms/add" class="btn btn-success"> Add New</a>
            </div>
          </div>

        </div>
        </div>
        </div>
        
          <div class="box">
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
          </div>
        </div>
      </div>
      </section>
     </div>
<script>
$(document).ready(function() {
  $('#termsTypeFilter').on('change', function() {
    var sel = $(this).val().toLowerCase().trim();
    $('#example1 tbody tr').each(function() {
      if (!sel) {
        $(this).show();
      } else {
        var rowType = $(this).find('td:nth-child(2)').text().toLowerCase().trim();
        if (rowType === sel || rowType.indexOf(sel) !== -1) {
          $(this).show();
        } else {
          $(this).hide();
        }
      }
    });
  });
});

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