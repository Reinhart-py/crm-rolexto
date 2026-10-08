<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper px-4">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <?php echo $info['page_heading']; ?> </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <!-- form close-->
            <div class="col-xs-12">


                <div class="box  p-4">
                    <div class="x_row">

                    <div class="x_col">
                    <form class="form-inline head_filter form-inline-mob" action="<?php echo base_url(); ?>manager/performance-report" method="get">

                    <div class="form-group">

                        <div class="input-daterange input-group" id="datepicker" style="width: 100%;">

                            <input type="text" class="input-md form-control datepicker" name="d1"
                                placeholder="Create From"
                                value="<?php if(isset($_GET['d1'])&&(!empty($_GET['d1']))){ echo $_GET['d1'];}?>"
                                autocomplete="off" />
                            <span class="input-group-addon">To</span>
                            <input type="text" class="input-md form-control datepicker" name="d2"
                                placeholder="Create To"
                                value="<?php if(isset($_GET['d2'])&&(!empty($_GET['d2']))){ echo $_GET['d2'];}?>"
                                autocomplete="off" />


                        </div>
                    </div>



                    <div class="form-group">
                    <select class="form-control" style="width: 100%;" name="department">
                          <option value="" >All Department</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="1")) { echo "selected"; } ?> value="1">Board of Director</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="2")) { echo "selected"; } ?> value="2">Administration</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="3")) { echo "selected"; } ?> value="3">Operations</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="4")) { echo "selected"; } ?> value="4">IT</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="5")) { echo "selected"; } ?> value="5">Human Resource</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="6")) { echo "selected"; } ?> value="6">Back Office</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="7")) { echo "selected"; } ?> value="7">Sales</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="8")) { echo "selected"; } ?> value="8">Business Development</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="9")) { echo "selected"; } ?> value="9">Field Staff</option>
                          <option <?php if(!empty($_GET['department']) && ($_GET['department']=="10")) { echo "selected"; } ?> value="10">Other</option>
                  </select>
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="search" value="report">Search</button>
                    <a href="<?php echo base_url(); ?>manager/performance-report"  class="btn btn-danger"> Reset</a>
                </div>


              </form>

                    </div>
                    <div class="x_col-sm-auto  text-center pt-4 pt-md-0">
                    <div>
                    
                    <!--<a href="<?php echo base_url(); ?>manager/leads/add" class="btn btn-success"> Add New</a> -->



                        </div>
                    </div>  
                    
                    </div>
                       
      
                </div>


                <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
        <?php echo get_message($this->session->flashdata('error_message'),'error_message'); ?> 
		  <?php echo get_message($this->session->flashdata('message'),'message'); ?>
        
          <?php if(isset($list) && !empty($list))
				{?>
           <div class="table-responsive" style="padding:0px 15px">
            <table class="table table-hover table-bordered">
              <thead>
              <tr>   
                <td colspan="11">
                  <h4>Team Performance Report</h4>
                </td>         
              </tr>

              <?php if((isset($_GET['d2']) and $_GET['d1']!='') && (isset($_GET['d2']) and $_GET['d2']!='')) {	?>
              <tr>   
              <td colspan="5">
                  <h4>From Date  <?php echo date('d-M-Y',strtotime($_GET['d1'])); ?> </h4>
                </td>         
                <td colspan="6">
                  <h4>To <?php echo date('d-M-Y',strtotime($_GET['d2'])); ?></h4>
                </td>         
              </tr>

              <?php } ?> 

              <tr>
              <td colspan="5">
                  <h4>Department : </h4>
                </td>         
                <td colspan="6">
                  <h4>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="")) { echo "All"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="1")) { echo "Board of Director"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="2")) { echo "Administration"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="3")) { echo "Operations"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="4")) { echo "IT"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="5")) { echo "Human Resource"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="6")) { echo "Back Office"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="7")) { echo "Sales"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="8")) { echo "Business Development"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="9")) { echo "Field Staff"; } ?>
                    <?php if(!empty($_GET['department']) && ($_GET['department']=="10")) { echo "Other"; } ?>                  
                  </h4>
                </td>         
              </tr>

              <tr>
              <td colspan="5">
                  <h4>Report Date : </h4>
                </td>         
                <td colspan="6">
                  <h4> <?php echo date('d-M-Y'); ?> </h4>
                </td>         
              </tr>


        		 <tr>                 
                 <th>Depart</th>
                 <th>Name</th>
                 <th>Leads Generated</th>
                 <th>Active Leads</th>
                 <th>Closed Leads</th>
                 <th>Attended Followups</th>
                 <th>Missed Followups</th>
                 <th>Attended Meetings</th>
                 <th>Missed Meetings</th>
                 <th>Verticals Generated</th>
                 <th>Amount</th>
               
                </tr>
              </thead>
              <tbody>
                <?php 
				
				foreach($list as $k=>$li){ ?>
				
                <tr>
                  <td><?php echo $li['department']; ?></td>
                  <td><a href="<?php echo base_url(); ?>manager/performance-report/individual/?d1=<?php echo $_GET['d1']; ?>&d2=<?php echo $_GET['d2']; ?>&manager_id=<?php echo $li['id']; ?>&search=report"><?php echo $li['name']; ?></a></td>
                  <td><?php echo $li['totalLead']; ?></td>
                  <td><?php echo $li['activeLead']; ?></td>
                  <td><?php echo $li['closedLead']; ?></td>
                  <td><?php echo $li['attendedFollowups']; ?></td>
                  <td><?php echo $li['total_missed']; ?></td>
                  <td><?php echo $li['attendedMeetings']; ?></td>
                  <td><?php echo $li['totalMissedMeetings']; ?></td>
                  <td><?php echo $li['totalVerticals']; ?></td>
                  <td><?php echo $li['amount']; ?></td>
                </tr>
                <?php	}	?>
                  
         
              </tbody>
            </table>
           
          </div>
          <?php }
			else
			{
			  ?>
              <div class="alert alert-info">
          No Result Found
          </div>
<?php
			}?>
          
          <!-- /.box-body --> 
          
        </div>
       
    </div>



            </div>
        </div>
    </section>
</div>


<script>
				
$(function(){
$('.input-daterange').datepicker({
    autoclose: true
});
}); 
 
$("table").tableExport({
	formats: ["xlsx","xls", "csv", "txt"], 
	fileName: "SRJ-User-report-<?php echo date('d-m-Y'); ?>",
	bootstrap: true,                   // (Boolean), style buttons using bootstrap
    position: "top" ,                // (top, bottom), position of the caption element relative to tabl
    trimWhitespace: false 
   });
 
</script>

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>