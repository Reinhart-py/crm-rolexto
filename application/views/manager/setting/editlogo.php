
<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
        <i class="fa fa-edit"></i> Edit Logo
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>ci_admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
         <li class="active">Edit Logo</li>
      </ol>
    </section>
    
      <!-- Main content -->
    <section class="content">
    
     
          <div class="box">
     <div class="box-body"> 
 <div class="row">
        <div class="col-xs-12">
       
<?php
               if($this->session->flashdata('success_message')){ ?>
 <div class="alert alert-success success1"> <?php
                  echo $this->session->flashdata('success_message');
  ?></div>
             <?php } ?>
             
               <form action="<?php echo base_url(); ?>ci_admin_setting/logo_edit/<?php echo $logo['id']; ?>" method ="post" enctype="multipart/form-data">
 					
                     <div class="col-md-12 form-group">
                  <label>Logo Title</label>
                  <input type="text" class="form-control" name="logo_title" value="<?php if(isset($logo['logo_title']) && (!empty($logo['logo_title']))){echo $logo['logo_title'];} else{ echo ""; }?>" >
				</div>
                    
                      <div class="col-md-12 form-group">
                  <label for="exampleInputFile">Add Logo Image </label>
                  <input type="file" id="exampleInputFile" name="logo_image" class="btn btn-primary" style="width:100%" />
				 
                  <p class="help-block">click browse to add image</p>
                
                     <?php if(isset($logo['logo_image']) && !empty($logo['logo_image']))
					 {
						 ?>
                     <img src="<?php echo base_url(); ?>uploads/logo/<?php echo $logo['logo_image']; ?>" width="100" height="100" />
                     
                     <?php
					 }else{
						 ?>
                       <img src="<?php echo base_url(); ?>" width="100" height="100" />   
                         <?php
					 }
					 ?>
                          </div> 
   					 
                     
                     <div class="col-md-12 form-group">
               <label>Status</label>
                <select class="form-control" name="status" style="width: 100%;">
                  <option value="1" <?php if(isset($logo['status']) && $logo['status']==1){echo "selected";}?>>Enable</option>
                     <option value="0" <?php if(isset($logo['status']) && $logo['status']==0){echo "selected";}?>>Disable</option>
                </select>
            
                    
               </div>
				<div class="row">
 						 <div class="col-md-12">
					 <button type="submit" class="btn btn-primary">Submit</button>
					   </div>
 					</div>
  			</form>
          </div>
          </div>
      </section> <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
