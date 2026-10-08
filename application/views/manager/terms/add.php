<?php require_once(APPPATH."views/manager/elements/header.php"); ?>
<div class="content-wrapper">
  <section class="content-header">
   <h1>Add Category </h1>
 </section>
 <section class="content">
   <div class="container">
    <div class="row">
   <div class="col-xs-12">
      <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> 
        <?php echo get_message($this->session->flashdata('message'),'message'); ?>
       
     <div class="box">
    <div class="box-body"> 
        
        <form action="<?php echo base_url(); ?>manager/terms/add" method ="post" enctype="multipart/form-data">
        <div class="col-lg-4 col-sm-6 form-group">
        <label>Name</label>
        <input type="text" name="cat_name" class="form-control" placeholder="Enter Name" required="required" maxlength="80" />
        </div>
        
        <div class="col-lg-4 col-sm-6 form-group">
        <label>Choose Parent</label>
        <select class="form-control select2" style="width: 100%;" name="parent_id" required>
        <option value="0">Root</option>
       <?php if(isset($category_list) && !empty($category_list)){
         foreach($category_list as $cli){
           ?>
					<option value="<?php echo $cli['id']; ?>"><?php echo $cli['title']; ?> (<?php echo $cli['cat_type']; ?>)</option>
        <?php } } ?>
        </select>
        </div>

        
        <div class="col-lg-4 col-sm-6 form-group">
        <label>Type</label>
        <select class="form-control" name="cat_type" required>        
        <option value="v_cat">Verticals Category</option>
        <option value="v_status">Verticals Status</option>
        <option value="p_cat">Product Category</option> 
        <option value="lead_cat">Lead Category</option>     
        </select>
        </div>
        
        <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
        
        </form>
        
        </div>
        </div>
</div>
</div>
</div>
</section> <!-- /.content -->

  </div>

  <script>

	$('.only_alpha').keyup(function () {

      this.value = this.value.replace(/[^A-Za-z0-9 .-]/g, "");

    });

</script>

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>