<?php require_once(APPPATH."views/manager/elements/header.php"); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
 
  <!-- Content Header (Page header) -->
  
  <section class="content-header">
    <h1> <?php echo $info['page_heading']; ?> </h1>
  </section>
  
  <!-- Main content -->
  
  <section class="content"> 
  <div class="container">

    <div class="row"> 
    <div class="col-md-12">
<form name="player_report_form" action="<?php echo base_url(); ?>manager/users/report" method="get" enctype="multipart/form-data" >
 <div class="box">
            <div class="box-header">
             
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          
             <div class="col-sm-6">
        <label> Join Date </label>
        <div class="input-daterange input-group" id="datepicker" style="width: 100%;" >
    <input type="text" class="input-md form-control" name="d1" placeholder="From Date" value="<?php if(isset($_GET['d1'])&&(!empty($_GET['d1']))){ echo $_GET['d1'];}?>" autocomplete="off"/>
    <span class="input-group-addon">To</span>
    <input type="text" class="input-md form-control" name="d2" placeholder="To Date" value="<?php if(isset($_GET['d2'])&&(!empty($_GET['d2']))){ echo $_GET['d2'];}?>" autocomplete="off"/>

      </div>
     </div>   
        
        
        
        <div class="form-group col-sm-3">
  
            <label>Role</label>

            <select class="form-control" name="role" style="width: 100%;">
			  <option value="">All</option>
            <?php if(isset($r_list) && !empty($r_list))

			{ 

				foreach($r_list as $li){

			?>

              <option value="<?php echo $li['id']; ?>"  <?php if(!empty($_GET['role']) && ($_GET['role']==$li['id'])) { echo "selected"; } ?>><?php echo $li['title']; ?></option>

          

              <?php } } ?>

            </select>

          </div>
		<div class="form-group col-sm-3">
  
            <label>Manager</label>

            <select class="form-control" name="manager" style="width: 100%;">
        <option value="">All</option>
            <?php if(isset($u_list) && !empty($u_list))

      { 

        foreach($u_list as $li){

      ?>

              <option value="<?php echo $li['id']; ?>"  <?php if(!empty($_GET['manager']) && ($_GET['manager']==$li['id'])) { echo "selected"; } ?>><?php echo $li['name']; ?></option>

          

              <?php } } ?>

            </select>

          </div>
         <div class="col-sm-3">
         <div class="form-group">
			 <label>Status</label>
			 <select class="form-control" name="status" style="width: 100%;">
				  <option value="">All</option>
                <option value="1" <?php if(!empty($_GET['status']) && ($_GET['status']==1)) { echo "selected"; } ?>>Active</option>
                  <option value="0" <?php if(isset($_GET['status']) && ($_GET['status']==0)) { echo "selected"; } ?>>Not Active </option>
                </select>
              </div>
			</div>
             <div class="col-sm-3">
         <div class="form-group">
       <label>Department</label>
      <select class="form-control" style="width: 100%;" name="department">
        <option value="">All</option>
                  <option  <?php if(!empty($_GET['department']) && ($_GET['department']=="Board of Director")) { echo "selected"; } ?> value="Board of Director">Board of Director</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="Administration")) { echo "selected"; } ?>value="Administration">Administration</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="Operations")) { echo "selected"; } ?> value="Operations">Operations</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="IT")) { echo "selected"; } ?> value="IT">IT</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="Human Resource")) { echo "selected"; } ?> value="Human Resource">Human Resource</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="Back Office")) { echo "selected"; } ?> value="Back Office">Back Office</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="Sales")) { echo "selected"; } ?> value="Sales">Sales</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="Business Development")) { echo "selected"; } ?> value="Business Development">Business Development</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="Field Staff")) { echo "selected"; } ?> value="Field Staff">Field Staff</option>
                  <option <?php if(!empty($_GET['department']) && ($_GET['department']=="Other")) { echo "selected"; } ?> value="Other">Other</option>
                </select>
              </div>
      </div>
            <div class="col-sm-3">
         <div class="form-group">
			 <label>Location/office</label>
			<select class="form-control" style="width: 100%;" name="office">
        <option value="">All</option>
                  <option <?php if(!empty($_GET['office']) && ($_GET['office']=='01 - UAE-Dubai-SZR')){ echo "selected"; } ?> value="01 - UAE-Dubai-SZR">01 - UAE-Dubai-SZR</option>
                  <option <?php if(!empty($_GET['office']) && ($_GET['office']=='07 - UAE-WFH')){ echo "selected"; } ?> value="07 - UAE-WFH">07 - UAE-WFH</option>
                  <option <?php if(!empty($_GET['office']) && ($_GET['office']=='08 - UAE-Remote')){ echo "selected"; } ?> value="08 - UAE-Remote">08 - UAE-Remote</option>
                  <option <?php if(!empty($_GET['office']) && ($_GET['office']=='09 - UAE-Other')){ echo "selected"; } ?> value="09 - UAE-Other">09 - UAE-Other</option>
                   <option <?php if(!empty($_GET['office']) && ($_GET['office']=='11 - IN-Jaipur')){ echo "selected"; } ?> value="11 - IN-Jaipur">11 - IN-Jaipur</option>
                    <option <?php if(!empty($_GET['office']) && ($_GET['office']=='12 - IN - Delhi')){ echo "selected"; } ?> value="12 - IN - Delhi">12 - IN - Delhi</option>
                     <option <?php if(!empty($_GET['office']) && ($_GET['office']=='13 - IN-Indore')){ echo "selected"; } ?> value="13 - IN-Indore">13 - IN-Indore</option>
                      <option <?php if(!empty($_GET['office']) && ($_GET['office']=='17 - IN-WFH')){ echo "selected"; } ?> value="17 - IN-WFH">17 - IN-WFH</option>
                       <option <?php if(!empty($_GET['office']) && ($_GET['office']=='18 - IN-Remote')){ echo "selected"; } ?> value="18 - IN-Remote">18 - IN-Remote</option>
                       <option <?php if(!empty($_GET['office']) && ($_GET['office']=='19 - IN-Other')){ echo "selected"; } ?> value="19 - IN-Other">19 - IN-Other</option>
                </select>
              </div>
			</div>
          
       </div>
        <div class="box-footer"> <div class="form-group col-md-12">

            <button type="submit" class="btn btn-md btn-primary" name="search" value="report">Submit</button>

            <button type="reset" class="btn btn-md btn-danger">Reset</button>

           </div>

         </div>
        </div>
  </form> 
 </div>
        <div class="col-md-12"> 
          <div class="box">
            <div class="box-header">
             <h4><?php echo $info['page_heading']; ?></h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
        <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> 
		  <?php echo get_message($this->session->flashdata('message'),'message'); ?>
        
          <?php if(isset($list) && !empty($list))
				{?>
           <div class="table-responsive" style="padding:0px 15px">
            <table class="table table-hover table-bordered">
              <thead>
        		 <tr>                 
                 <th>Name</th>
                 <th>Username</th>
                 <th>Category</th>
                 <th>Gender</th>
                 <th>Depart</th>
                 <th>Location</th>
                 <th>Manager</th>
               
                </tr>
              </thead>
              <tbody>
                <?php 
				
				foreach($list as $k=>$li){ ?>
				
                <tr>
                <td><?php echo $li['name']; ?></td>
              <td><?php echo $li['c_username']; ?></td>
               <td><?php echo $li['role_name']; ?></td>
               <td><?php echo $li['gender']; ?></td>
                 <td><?php echo $li['department']; ?></td>
                  <td><?php echo $li['office']; ?></td>
                   <td><?php echo $li['manager_name']; ?></td>
            
               
         </tr>
                <?php
					}
				?>
                  
         
              </tbody>
            </table>
           
          </div>
          <?php }
			else
			{
			  ?>
              <div class="alert alert-info">
          No Result Found
          </div>
<?php
			}?>
          
          <!-- /.box-body --> 
          
        </div>
       
    </div>
        </div>
    </div>
    </div>
  </section>
</div>
<script>

				
$(function(){
$('.input-daterange').datepicker({
    autoclose: true
});
}); 
 
$("table").tableExport({
	formats: ["xlsx","xls", "csv", "txt"], 
	fileName: "SRJ-User-report-<?php echo date('d-m-Y'); ?>",
	bootstrap: true,                   // (Boolean), style buttons using bootstrap
    position: "top" ,                // (top, bottom), position of the caption element relative to tabl
    trimWhitespace: false 
   });
 
</script>

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
