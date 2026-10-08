<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="container">
<div class="content-wrapper"> 
  
  <!-- Content Header (Page header) -->
  
  <section class="content-header">
    <h1> Meetings </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li class="active">Meetings</li>
    </ol>
  </section>
  
  <!-- Main content -->
  
  <section class="content"> 
    
    <!-- SELECT2 EXAMPLE -->
    
   
     <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> <?php echo get_message($this->session->flashdata('message'),'message'); ?>
     
      <form role="form" action="<?php echo base_url(); ?>manager/meetings/edit/<?php echo base64_encode($list['id']); ?>" method="post" name="add_form">
      
       <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Initial Fields</h3>
      </div>
      
      <!-- /.box-header -->
      
      <div class="box-body" >
      
      <div class="row">
       
        
      <div class="col-md-6">
              <div class="form-group">
                <label>Lead ID<span>*</span></label>
                <input type="text" name="lead_id" class="form-control" required="" value="<?php echo $list['lead_id']; ?>" >
              </div>
            </div>
           
            

             <div class="col-md-6">
              <div class="form-group">
                <label>Meeting Attendee 1<span>*</span></label>
                <input type="text" required class="form-control" name="a1" value="<?php echo $list['a1']; ?>" required >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Meeting Attendee 2</label>
                <input type="text" class="form-control" name="a2" value="<?php echo $list['a2']; ?>" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Meeting Attendee 3</label>
                <input type="text" class="form-control" name="a3" value="<?php echo $list['a3']; ?>" >
              </div>
            </div>



             <div class="col-md-6">
              <div class="form-group">
                <label>Meeting Date</label>
                <input type="text" class="form-control datepicker" name="meeting_date" value="<?php echo $list['m_date']; ?>"  required >
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Meeting Time</label>               
                <div class="input-group bootstrap-timepicker timepicker">
                  <input  type="text" class="form-control input-small timepicker" name="meeting_time" value="<?php echo $list['m_time']; ?>" required>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                </div>
              </div>
            </div>


              <div class="col-md-6">
              <div class="form-group">
                <label>Meeting POC</label>
                <input type="text" class="form-control" name="poc" value="<?php echo $list['poc']; ?>"  >
              </div>
            </div> 


             <div class="col-md-6">
              <div class="form-group">
                <label>Meeting POC Contact Number</label>
                <input type="text" name="mobile" class="form-control" value="<?php echo $list['mobile']; ?>" />
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $list['address']; ?>" />
              </div>
            </div>

             <div class="col-md-12">
              <div class="form-group">
                <label>Remark</label>
                <textarea class="form-control" name="remark"><?php echo $list['remark']; ?></textarea>
              </div>
            </div>

          

        </div>
      </div>
    </div>


      
      <div class="box-footer text-center">
                <button id="add_btn" type="submit" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-default">Cancel</button>
              </div>
              
         
              
     </form>
  
    
    <!-- /.box --> 
    
  </section>
  
  <!-- /.content --> 
  
</div>
</div>
<!-- /.content-wrapper --> 

<script>
 $(document).ready(function () { 
  $(document).on("click", "#add_btn", function () {  

   $('form[name=add_form]').validate({
  submitHandler: function(form) {
      form.submit();
    }
  });
});
});
</script>
<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
