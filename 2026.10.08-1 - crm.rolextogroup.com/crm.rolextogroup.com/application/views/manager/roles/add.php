<?php require_once(APPPATH."views/manager/elements/header.php"); ?>



<!-- Main content -->



<div class="content-wrapper"> 

  

  <!-- Content Header (Page header) -->

  

  <section class="content-header">

    <h1><?php echo $info['page_heading']; ?></h1>

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

              <div class="form-group success_alert"> 

			  <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> 

			  <?php echo get_message($this->session->flashdata('message'),'message'); ?> 

              </div>

        

              <form method="post" action="<?php echo base_url(); ?>manager/roles/add">

                <div class="row">

                  <div class="col-sm-6">

                    <div class="form-group">

                      <label>Parent Role<span class="required">*</span></label>

                      <select class="form-control" name="parent_id">
                          <option value="0">Root</option>

                            <?php if(isset($r_list) && !empty($r_list)){
                              foreach($r_list as $cli){
                            ?>
                            <option value="<?php echo $cli['id']; ?>" ><?php echo $cli['title']; ?></option>
                        <?php } }  ?>
                      </select>

                    </div> 


                    <div class="form-group">

                      <label>New Role<span class="required">*</span></label>

                      <input type="text" name="title" class="form-control" placeholder="New Role"  required="required" />

                    </div>             

                    

                 <div class="form-group">                   

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





<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>

