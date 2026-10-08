<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper px-4"> <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo $info['page_heading']; ?> </h1>
  </section>
  <!-- Main content -->
  <section class="content"> <!-- /.row -->
    <div class="row"> <!-- form close-->
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <div class="pull-right">
              <?php /*  <form class="form-inline" method="get">
                <select class="form-control" name="order_by">
                  <option <?php if(isset($_GET['order_by']) && $_GET['order_by']=='A.created'){ echo 'selected'; } ?> value="A.created">Date</option>
                  <option <?php if(isset($_GET['order_by']) && $_GET['order_by']=='A.name'){ echo 'selected'; } ?> value="A.name">Name</option>
                  <option <?php if(isset($_GET['order_by']) && $_GET['order_by']=='A.status'){ echo 'selected'; } ?> value="A.status">Status</option>
                  <option <?php if(isset($_GET['order_by']) && $_GET['order_by']=='A.user_type'){ echo 'selected'; } ?> value="A.user_type">Role</option>
                   <option <?php if(isset($_GET['order_by']) && $_GET['order_by']=='A.user_level'){ echo 'selected'; } ?> value="A.user_level">Level</option>
                  
                </select>
                <select class="form-control" name="sort_by">
                  <option <?php if(isset($_GET['sort_by']) && $_GET['sort_by']=='DESC'){ echo 'selected'; } ?> value="DESC">DESC</option>
                  <option <?php if(isset($_GET['sort_by']) && $_GET['sort_by']=='ASC'){ echo 'selected'; } ?> value="ASC">ASC</option>
                </select>
                <input type="text" class="form-control" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" />
                <button type="submit" class="btn btn-success">Search</button>
                <a href="<?php echo base_url(); ?>manager/users" class="btn btn-danger"> Reset</a>
                
              </form> */ ?>
            </div>
          </div>
          <div class="box-body"> <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> <?php echo get_message($this->session->flashdata('message'),'message'); ?>
            <?php if(isset($product_list) && !empty($product_list))				{?>
            <div>
              <table id="example_user" class="table table-hover table-bordered table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Upline</th>
                    <th>Designation</th>   
                 	  <th>Department</th>          
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Manager</th>           
                    <th>Action</th>           
                   
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($product_list as $k=>$li){ ?>
                  <tr>
                    <td><?php echo ($k+1); ?></td>
                    <td style="text-transform:capitalize;"><?php echo $li['name']; ?> </td>
                    <td></td>                   
                    <td><?php echo $li['role']; ?></td>
                     <td><?php echo $li['department']; ?></td>
                      <td><?php echo $li['mobile']; ?></td>
                       <td><?php echo $li['email']; ?></td>
                        <td><?php echo $li['office']; ?></td>
                        <td><?php echo $li['manager_name']; ?></td>
                        <td><a href="<?php echo base_url(); ?>manager/team/members/details/<?php echo $li['id']; ?>" type="button" class="btn btn-xs btn-info">Members</a></td>
                  </tr>
                  <?php	} ?>
                </tbody>
              </table>
              <?php if (isset($links)) {  echo $links; } ?>
            </div>
            <?php }	else{	 ?>
            
            <div class="alert alert-info"> No Data Found </div>
            <?php }?>
            <!-- /.box-body --> </div>
        </div>
        <!-- /.box --> </div>
    </div>
  </section>
</div>
<script>
function do_confirm(){    
job=confirm("Are you sure to delete this record... ");    
if(job!=true)    {        
return false;    
}}</script>
 <script type="text/javascript">       

 
  $(document).ready(function(){

    $("#example_user").DataTable({
      "pageLength": 50,     
      rowReorder: {
            selector: 'td:nth-child(2)'
        },
      responsive: true
    });


  $(document).on("click","#btn_block", function(){ 
	    
   var id = $(this).data("id");
   var admin_status = $(this).data("admin_status");
	
	if (confirm("Are you sure to unblock User?")) {
	
	  $.ajax({
        type: "POST",
       url: '<?php  echo base_url(); ?>ci_admin_user/ajax_edit_status',
      data:"admin_status="+admin_status+"&id="+id, // as you are getting in php $_POST['action1'] 
       
        }).done(function(msg){
           
            if (msg == 'success') 
			{
             location.reload();
            }
			else
			{
			   alert("Error : Not update Confirm status")
			}
		});
	}
   });

 }); 
 
  $(document).ready(function(){
  $(document).on("click","#btn_unblock", function(){ 
	    
   var id = $(this).data("id");
   var admin_status = $(this).data("admin_status");
	
	if (confirm("Are you sure to block User?")) {
	
	  $.ajax({
        type: "POST",
       url: '<?php  echo base_url(); ?>ci_admin_user/ajax_edit_status',
       data:"admin_status="+admin_status+"&id="+id, // as you are getting in php $_POST['action1'] 
       
        }).done(function(msg){
           
            if (msg == 'success') 
			{
             location.reload();
            }
			else
			{
			   alert("Error : Not update Confirm status")
			}
		});
	}
   });

 }); 
	 
 
  </script>

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>

 