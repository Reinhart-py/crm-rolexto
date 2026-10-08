<?php require_once(APPPATH."views/manager/elements/header.php"); ?>
<div class="content-wrapper"> 
  
  <!-- Content Header (Page header) -->
  
  <section class="content-header">
    <h1> Edit Term </h1>
  </section>
  
  <!-- Main content -->
  
  <section class="content">
    <div class="container">
    <div class="box">
      <div class="box-body">
        <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> 
		  <?php echo get_message($this->session->flashdata('message'),'message'); ?>
       
    
        
        <form role="form" action="<?php echo base_url(); ?>manager/terms/edit/<?php echo base64_encode($list['id']); ?>" method ="post" enctype="multipart/form-data">
          <div class="col-lg-4 col-sm-6 form-group">
            <label> Category Name</label>
            <input type="text" class="form-control" placeholder="Enter Name"  name="cat_name" value="<?php echo $list['title']; ?>" required="required">
          </div>
          <div class="col-lg-4 col-sm-6 form-group">
            <label>Choose Parent</label>
            <select class="form-control select2" style="width: 100%;" name="parent_id" required>
            <option value="0">Root</option>             
              <?php if(isset($category_list) && !empty($category_list))
				      {
                foreach($category_list as $cli){

						?>
              <option value="<?php echo $cli['id']; ?>" <?php if(isset($list['parent_id']) && $list['parent_id']==$cli['id']){echo "selected";}?> >
              <?php echo $cli['title']; ?></option>
              <?php

					

					}

				}

				?>
            </select>
          </div>

           <div class="col-lg-4 col-sm-6 form-group">
            <label>Status</label>
            <select class="form-control" name="cat_type" style="width: 100%;">
              <option value="v_cat" <?php if(isset($list['cat_type']) && $list['cat_type']=='v_cat'){echo "selected";}?>>Verticals Category</option>
              <option value="v_status" <?php if(isset($list['cat_type']) && $list['cat_type']=='v_status'){echo "selected";}?>>Verticals Status</option>
              <option value="p_cat" <?php if(isset($list['cat_type']) && $list['cat_type']=='p_cat'){echo "selected";}?>>Product Category</option>
              <option value="lead_cat" <?php if(isset($list['cat_type']) && $list['cat_type']=='lead_cat'){echo "selected";}?>>Lead Category</option>
            </select>
          </div>
         
          <div class="col-lg-4 col-sm-6 form-group">
            <label>Status</label>
            <select class="form-control" name="status" style="width: 100%;">
              <option value="1" <?php if(isset($list['status']) && $list['status']==1){echo "selected";}?>>Enable</option>
              <option value="0" <?php if(isset($list['status']) && $list['status']==0){echo "selected";}?>>Disable</option>
            </select>
          </div>
          
        
          
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo base_url(); ?>manager/terms" class="btn btn-default">Cancel</a> </div>
            </div>
          </div>
        </form>
      </div>
    </div>
      </div>
  </section>
  <!-- /.content --> 
  
</div>

<!-- /.content-wrapper --> 

<script>

	$('.only_alpha').keyup(function () {

      this.value = this.value.replace(/[^A-Za-z0-9 .-]/g, "");

    });

</script>
<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
