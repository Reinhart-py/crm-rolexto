<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1> <?php echo $info['page_heading']; ?> </h1>
  </section>
  <section class="content">
    <div class="box product-box-default box-solid">
    <div class="box-header with-border">
    <div class="pull-right">
        <a href="<?php echo base_url(); ?>manager/verticals" class="btn btn-danger">Back</a>
        </div>

          </div>
      <div class="box-body">
     <?php //print_r($p_info); ?>
     
        <div class="x_row user-view-information">
        <div class="x_col-4 x_col-md-2">Vertical No.</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['v_id']; ?></div>
<div class="x_col-4 x_col-md-2">Company Name</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['company_name']; ?></div>
<div class="x_col-4 x_col-md-2">Category</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['v_cat']; ?></div>
<div class="x_col-4 x_col-md-2">Sub Category</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['v_subcat']; ?></div>

<div class="x_col-4 x_col-md-2">POC Name</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['poc']; ?></div>

<div class="x_col-4 x_col-md-2">Contact 1</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['contact1']; ?></div>


<div class="x_col-4 x_col-md-2">Contact 2</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['contact2']; ?></div>

<div class="x_col-4 x_col-md-2">Whatsapp Web</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['whatsapp_web']; ?></div>


<div class="x_col-4 x_col-md-2">Status</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['vertical_status']; ?></div>

<div class="x_col-4 x_col-md-2">Designation</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['designation']; ?></div>


<div class="x_col-4 x_col-md-2">Last Follow Up Date</div>
<div class="x_col-8 x_col-md-4"><?php echo simple_date($p_info['lastfollowup_date']); ?></div>

<div class="x_col-4 x_col-md-2">Next Follow Up Date</div>
<div class="x_col-8 x_col-md-4"><?php echo simple_date($p_info['followup_date']); ?></div>


<div class="x_col-4 x_col-md-2">Remarks</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['remark']; ?></div>

<div class="x_col-4 x_col-md-2">Nationality</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['nationality']; ?></div>
<div class="x_col-4 x_col-md-2">Nationality Area</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['nationality_area']; ?></div>

<div class="x_col-4 x_col-md-2">Source Details</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['lead_source']; ?></div>

<div class="x_col-4 x_col-md-2">Address</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['address']; ?></div>
<div class="x_col-4 x_col-md-2">Address 2</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['address2']; ?></div>


<div class="x_col-4 x_col-md-2">City</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['city']; ?></div>

<div class="x_col-4 x_col-md-2">Country</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['country']; ?></div>

<div class="x_col-4 x_col-md-2">State / Province / Emirate</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['state']; ?></div>

<div class="x_col-4 x_col-md-2">Email</div>
<div class="x_col-8 x_col-md-4"><?php echo $p_info['email']; ?></div>





<div class="x_col-4 x_col-md-2">Created At</div>
<div class="x_col-8 x_col-md-4"><?php echo simple_date($p_info['created']); ?></div>



<div class="x_col-4 x_col-md-2">--</div>
<div class="x_col-8 x_col-md-4">--</div>


 
        </div>
      </div>
    </div>
   
  </section>
</div>

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
