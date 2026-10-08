<?php require_once(APPPATH."views/manager/elements/header.php"); ?>
<!-- Main content -->
<div class="content-wrapper"> 
  
  <!-- Content Header (Page header) -->
  
  <section class="content-header">
    <h1> Admin Profile </h1>
  </section>
  
  <!-- Main content -->
  
  <section class="content">
    
     
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary w-60" style="padding:2px;">
          <div class="box-header with-border">
            <h3 class="box-title">Reset Password</h3>
          </div>
          
          <!-- /.box-header --> 
          
          <!-- form start --> 
          <?php echo get_message($this->session->flashdata('perror_message'),'error_message'); ?> <?php echo get_message($this->session->flashdata('pmessage'),'message'); ?>
          <form class="form-horizontal" method="post" action="<?php echo base_url();?>manager/password" name="update_password">
            <div class="box-body">
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Change&nbsp;Password</label>
                <div class="col-sm-6">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Confirm&nbsp;Password</label>
                <div class="col-sm-6">
                  <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" required="required">
                </div>
              </div>
            </div>
            
            <!-- /.box-body -->
            
            <div class="box-footer text-center">
              <button type="submit" class="btn btn-primary" id="btn_password_save">Submit</button>
            </div>
            
            <!-- /.box-footer -->
            
          </form>
        </div>
      </div>
    </div>
</div>
  </section>
  
  <!-- /.content --> 
  
</div>
<!-- /.content --> 
<script>
       
		
		
$('.only_number').keyup(function () { 
    this.value = this.value.replace(/[^0-9.]/g,'');
});
$('.alpha_space').keyup(function () {
   
     this.value = this.value.replace(/[^A-Za-z\s]/g, "");
    
});
$('.only_alpha').keyup(function () {
   
     this.value = this.value.replace(/[^A-Za-z]/g, "");
    
});


$(document).ready(function(){
	 
	 $(document).on("click", "#save_profile", function () {
	 $('form[name=profile_form]').validate({			
		rules: {
				name: {				
				required: true		
				},
				email: {				
				required: true,
				email:true		
				},
				mobile: {				
				required: true,
				number:true		
				},
				pin_code: {				
				required: true,
				number:true			
				},
				
		        paytm_key: {				
				required: true				
				},
				razorpay_key: {				
				required: true				
				},
				razorpay_secret_key: {				
				required: true				
				}
		},		
		messages: {
		},
  submitHandler: function(form) {	
      form.submit();
    }
  });
  
	 }); });

 $(document).ready(function (e) { 
	$(document).on("click", "#btn_password_save", function () {
		
	 $('form[name=update_password]').validate({
		 			
		rules: {
			password: {				
				required: true,
				 minlength: 5
				
				
							
  			},
			confirm_password: {				
				required: true,
				 minlength: 5,
				 equalTo: "#password"
				
							
  			},
			
		},		
		
		messages: {
			
		},
  submitHandler: function(form) {
      form.submit();
    }
  });
});

});

     </script>
<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
