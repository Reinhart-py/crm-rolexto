<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="container">
<div class="content-wrapper"> 
  
  <!-- Content Header (Page header) -->
  
  <section class="content-header">
    <h1> Leads </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li class="active">Leads</li>
    </ol>
  </section>
  
  <!-- Main content -->
  
  <section class="content"> 
    
    <!-- SELECT2 EXAMPLE -->
    
   
     <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> <?php echo get_message($this->session->flashdata('message'),'message'); ?>
     
      <form role="form" action="<?php echo base_url(); ?>manager/leads/editLimited/<?php echo base64_encode($list['id']); ?>/<?php echo $action; ?>" method="post" name="add_form">
      
     
      
     
     <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Meeting Update</h3>
      </div>
      
      <!-- /.box-header -->
      
      <div class="box-body" >

      <?php if(!empty($meeting_list)){ 
          foreach($meeting_list as $lim){
        ?>

        <div class="row remark_row">
          <div class="col-md-7">

        <div class="row">

            <div class="col-lg-4 col-sm-6">
              <div class="form-group">
                <label>Date</label>
                <input type="hidden" name="mlead_id[]" value="<?php echo $list['id']; ?>">
                <input type="text" class="form-control" name="m_date[]" value="<?php echo simple_date($lim['m_date']); ?>" readonly="">
              </div>
            </div>
            
            <div class="col-lg-4 col-sm-6">
              <div class="form-group">
                <label>Time</label>
                <input type="text" class="form-control" name="m_time[]" value="<?php echo $lim['m_time']; ?>" readonly="">
              </div>
            </div>

               <div class="col-lg-4 col-sm-6">
              <div class="form-group">
                <label>POC</label>
                <input type="text" class="form-control" name="m_poc[]" value="<?php echo $lim['m_poc']; ?>" readonly="" >
              </div>
            </div>

			</div>
            <div class="row">
        <!--    <div class="col-lg-4 col-sm-6">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="m_address[]" value="<?php echo $lim['m_address']; ?>" readonly="">
              </div>
            </div> -->


            <div class="col-lg-4 col-sm-6">
            <div class="form-group">
              <label>Attendee 1</label>   
              <select class="form-control select2" name="a1[]" style="width: 100%;" readonly="">
              <option value="">Select</option>
              <?php if(isset($u_list) && !empty($u_list))
                { 
                  foreach($u_list as $li){
                ?>

                <option <?php if($lim['a1']==$li['id']){ echo "selected"; } ?> value="<?php echo $li['id']; ?>"><?php echo $li['name']; ?></option>          

            <?php } } ?>
            </select>

              </div>

            </div>


            <div class="col-lg-4 col-sm-6">
              <div class="form-group">
              <label>Attendee 2</label>
              <select class="form-control select2" name="a2[]" style="width: 100%;" readonly="">
              <option value="">Select</option>
              <?php if(isset($u_list) && !empty($u_list))
                { 
                  foreach($u_list as $li){
                ?>

                <option <?php if($lim['a2']==$li['id']){ echo "selected"; } ?> value="<?php echo $li['id']; ?>"><?php echo $li['name']; ?></option>          

            <?php } } ?>
            </select>

              </div>
            </div>


            <div class="col-lg-4 col-sm-6">
              <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="m_mobile[]" value="<?php echo $lim['m_mobile']; ?>" readonly="">
              </div>
            </div>


        </div>



          </div>

          <div class="col-md-5">

          <div class="form-group remark-group">
                <label>Remark</label>
                <textarea type="text" class="form-control"  name="m_remark[]" ><?php echo $lim['m_remark']; ?></textarea>
              </div>

          </div>

      </div>

    <?php } }  ?>

    </div>


    </div>
      
      <div class="box-footer text-center">
                <button id="add_btn" type="submit" class="btn btn-info">Submit</button>              
                <a href="<?php echo $info2['back_url']; ?>" class="btn btn-default">Cancel</a>   
              
              </div>
              
         
              
     </form>
  
    
    <!-- /.box --> 
    
  </section>
  
  <!-- /.content --> 
  
</div>

<!-- /.content-wrapper --> 
</div>
<script>







 $(document).ready(function () { 

  $(document).on("click", "#add_btn", function () {

    

   $('form[name=add_form]').validate({         

  submitHandler: function(form) {

      form.submit();

    }

  });

});

var input = $('[name="mrc"],[name="revenue"]'),
    input1 = $('[name="mrc"]'),
    input2 = $('[name="revenue"]'),
    input3 = $('[name="mrr"]');
input.change(function () {
    input3.val((parseInt(input1.val()) || 0) + (parseInt(input2.val()) || 0));
});



});




</script>
<script>

   function get_state()
{
  
      var stateID = $("#country").val();     
        $.ajax({
              type: "POST",
        data: 'c_id='+stateID,
          url: "<?php echo base_url(); ?>" + "ci_admin_user/get_state",
        success:function(result){
        if(result)
        {
        $('#state').html(result);
        }
        else
        {
        alert('error');
        }
        }
          });


}

function check_cname()
{
  
      var c_name =$(".c_username").val();     
        $.ajax({
              type: "POST",
        data: 'c_name='+c_name,
          url: "<?php echo base_url(); ?>" + "ci_admin_user/check_name",
        success:function(data){
        if(data=='done')
        {
        $('.alert_msg').text('');
        }
        else
        {
        $('.c_username').val('');
        $('.alert_msg').text('Company name already exist.');
        }
        }
          });


}

function getpSubCat()
{  
        var stateID = $("#pcatselect").val();     
        $.ajax({
          type: "POST",
          data: 'c_id='+stateID,
          url: "<?php echo base_url(); ?>" + "ci_admin_terms/getSubCatAjax",
          success:function(result){
            if(result){
              $('#psubcatselect').html(result);
            }           
        }
        });
}
</script>
<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
