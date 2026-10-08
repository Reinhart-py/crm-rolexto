<?php require_once(APPPATH."views/manager/elements/header.php"); ?>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>Update User Registartion</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>


    <!-- Main content -->
     <section class="content"> 
    
    <!-- SELECT2 EXAMPLE -->

   
     <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> <?php echo get_message($this->session->flashdata('message'),'message'); ?>
     <div class="row">  
     <div class="col-md-6">     
      <form role="form" action="<?php echo base_url(); ?>manager/users/cedit/<?php echo $list['id']; ?>" method="post" name="add_form">
        <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Username Update</h3>
      </div>
      
      <!-- /.box-header -->      
      <div class="box-body">           
              <div class="form-group">
                <label>User Name (Official Email)<span>*</span></label>
                <input type="email"  class="form-control" name="c_username" required="">
                <div class="alert_msg" style="color:red"></div>
              </div>
        </div>
     </div>   
      <div class="box-footer text-center">
                <button id="add_btn" type="submit" name="submit" value="phase1" class="btn btn-info">Submit</button>
                <a href="<?php echo base_url(); ?>manager/users" class="btn btn-default">Cancel</a>
              </div>          
     </form>
  
</div>


 <div class="col-md-6">     
      <form role="form" action="<?php echo base_url(); ?>manager/users/cedit/<?php echo $list['id']; ?>" method="post" name="add_form2">
        <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Password Change</h3>
      </div>
      
      <!-- /.box-header -->
      
      <div class="box-body">      
           
      <div class="col-md-6">
              <div class="form-group">
                <label>Password<span>*</span></label>
                <input type="password" class="form-control" id="password" name="password" required=""  >
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password<span>*</span></label>
                <input type="password" class="form-control" id="c_password" name="c_password" required=""  >
              </div> 
              </div>
        
       </div>
     </div>   
      <div class="box-footer text-center">
                <button id="add_btn2" type="submit"  name="submit" value="phase2" class="btn btn-info">Submit</button>
                <a href="<?php echo base_url(); ?>manager/users" class="btn btn-default">Cancel</a>
              </div>          
     </form>
     </div> 
</div>
    <!-- /.box --> 
    
  </section>

    <!-- /.content -->

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

        $(document).on("click", "#add_btn2", function () {
                $('form[name=add_form2]').validate({
                    rules: {
                        password: "required",
                        c_password: {
                            equalTo: "#password"
                        }
                },
                messages: {
                    password: "Enter Password",
                    confirmpassword: " Enter Confirm Password Same as Password"
                },
                submitHandler: function(form) {
                form.submit();
                }
            });
        });

});




</script>


<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>

 