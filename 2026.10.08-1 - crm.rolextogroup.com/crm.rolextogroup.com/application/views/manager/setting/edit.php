<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<!-- Main content -->

<div class="content-wrapper"> 
  
  <!-- Content Header (Page header) -->
  
  <section class="content-header">
    <h1> Edit User</h1>
  </section>
  
  <!-- Main content -->
  
  <section class="content">
    <div class="row"> 
      
      <!-- /.col -->
      
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav" style="background-color:#69C">
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" style="padding: 8px;"> 
              
              <!-- The timeline -->
              
             
              <div class="form-group success_alert"> <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> 
			  <?php echo get_message($this->session->flashdata('message'),'message'); ?> </div>
        
              <form method="post" action="<?php echo base_url(); ?>manager/user/edit/<?php echo $this->encrypt->encode($user['id']); ?>">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Full Name<span class="required">*</span></label>
                      <input type="text" name="name" class="form-control alpha_space" placeholder="Full Name" value="<?php echo $user['name']; ?>"  required="required" />
                    </div>                  
                
                    <div class="form-group">
                      <label>Email<span class="required">*</span></label>
                      <input type="email" class="form-control" name="email"   placeholder="Email" value="<?php echo $user['email']; ?>" >
                    </div>
                 
                    <div class="form-group">
                      <label>Contact<span class="required">*</span></label>
                      <input type="text" class="form-control only_number" name="mobile"   placeholder="Mobile Number" value="<?php echo $user['mobile']; ?>" >
                    </div>
                    
                    <div class="form-group">
                      <label>Change Password (Leave blank if you don't want to change password)</label>
                      <input type="text" class="form-control" name="password"   placeholder="Password">
                    </div>
                 
                   
                  
                 
                  </div>
                  <div class="col-sm-6">
                  
                  <table class="table table-bordered">
  <tr>
    <th scope="row">Action</th>
    <th>View Mode</th>
    <th>Edit Mode</th>
  </tr>
  <tr>
    <th scope="row">Category</th>
    <td><input type="checkbox" name="cat_mode" value="1" <?php if($user['cat_mode']==1){ echo "checked"; } ?> /></td>
     <td><input type="checkbox" name="cat_edit" value="1" <?php if($user['cat_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
  <tr>
    <th scope="row">Product</th>
    <td><input type="checkbox" name="product_mode" value="1"  <?php if($user['product_mode']==1){ echo "checked"; } ?> /></td>
   <td><input type="checkbox" name="product_edit" value="1" <?php if($user['product_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
  <tr>
    <th scope="row">Sales</th>
    <td><input type="checkbox" name="sales_mode" value="1" <?php if($user['sales_mode']==1){ echo "checked"; } ?> /></td>
    <td><input type="checkbox" name="sales_edit" value="1" <?php if($user['sales_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
  <tr>
    <th scope="row">Customers</th>
    <td><input type="checkbox" name="c_mode" value="1" <?php if($user['c_mode']==1){ echo "checked"; } ?> /></td>
   <td><input type="checkbox" name="c_edit" value="1" <?php if($user['c_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
  <tr>
    <th scope="row">Vendors</th>
    <td><input type="checkbox" name="vendor_mode" value="1" <?php if($user['vendor_mode']==1){ echo "checked"; } ?> /></td>
   <td><input type="checkbox" name="vendor_edit" value="1" <?php if($user['vendor_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
  <tr>
    <th scope="row">Payout Rules</th>
    <td><input type="checkbox" name="rules_mode" value="1" <?php if($user['rules_mode']==1){ echo "checked"; } ?> /></td>
  <td><input type="checkbox" name="rules_edit" value="1" <?php if($user['rules_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
  <tr>
    <th scope="row">Payments</th>
    <td><input type="checkbox" name="payment_mode" value="1" <?php if($user['payment_mode']==1){ echo "checked"; } ?> /></td>
   <td><input type="checkbox" name="payment_edit" value="1" <?php if($user['payment_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
  <tr>
    <th scope="row">Coupons</th>
    <td><input type="checkbox" name="coupon_mode" value="1" <?php if($user['coupon_mode']==1){ echo "checked"; } ?> /></td>
    <td><input type="checkbox" name="coupon_edit" value="1" <?php if($user['coupon_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
  <tr>
    <th scope="row">Pages</th>
    <td><input type="checkbox" name="page_mode" value="1" <?php if($user['page_mode']==1){ echo "checked"; } ?> /></td>
   <td><input type="checkbox" name="page_edit" value="1" <?php if($user['page_edit']==1){ echo "checked"; } ?> /></td>
  </tr>
</table>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            
            </div>
            
            <!-- /.tab-pane --> 
            
          </div>
        </div>
      </div>
      
      <!-- /.col --> 
      
    </div>
    
    <!-- /.row --> 
    
  </section>
  
  <!-- /.content --> 
  
</div>

<!-- /.content --> 

<script>

        function validate(){



            var a = document.getElementById("password").value;

            var b = document.getElementById("confirm_password").value;

            if (a!=b) {

               alert("Passwords do no match");

               return false;

            }

        }

		

		

		

$('.only_number').keyup(function () { 

    this.value = this.value.replace(/[^0-9.]/g,'');

});





$('.alpha_space').keyup(function () {

   

     this.value = this.value.replace(/[^A-Za-z\s]/g, "");

    

});





$('.only_alpha').keyup(function () {

   

     this.value = this.value.replace(/[^A-Za-z]/g, "");

    

});



     </script>
<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
