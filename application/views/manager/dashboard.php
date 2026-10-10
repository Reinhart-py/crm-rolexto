<?php require_once(APPPATH."views/manager/elements/header.php"); ?>


<style>
  .box.box-info.leftbox {
    height: calc(100% - 20px);
}
</style>
<div class="content-wrapper">

    

    <section class="content-header">
        <h1> <i class="fa fa-dashboard"></i> Dashboard</h1>
    </section>

    

    <section class="content">


        <div class="row count-widget">

         <div class="col-xs-6 col-sm-3">
                
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $dashboard_count['count_leads']; ?></h3>
                        <p>My Leads</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>manager/leads" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>

            </div>


            <div class="col-xs-6 col-sm-3">
                
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>0</h3>
                        <p>.......</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>           

           

            <div class="col-xs-6 col-sm-3">
                
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $dashboard_count['count_vetricals']; ?></h3>
                        <p>My Verticals</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>manager/verticals" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-xs-6 col-sm-3">
                
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo $dashboard_Tcount['count_user']; ?></h3>
                        <p>Team Member</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
           
     </div>


        <div class="row count-widget">

<div class="col-xs-6 col-sm-3">
       
       <div class="small-box bg-aqua">
           <div class="inner">
               <h3><?php echo $dashboard_Tcount['count_leads']; ?></h3>
               <p>Team Leads</p>
           </div>
           <div class="icon">
               <i class="ion ion-bag"></i>
           </div>
           <a href="<?php echo base_url(); ?>manager/team/leads" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
       </div>

   </div>



   <div class="col-xs-6 col-sm-3">
                
      <div class="small-box bg-yellow">
          <div class="inner">
              <h3>0</h3>
              <p>.......</p>
          </div>
          <div class="icon">
              <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>


    </div>



   <div class="col-xs-6 col-sm-3">
       
       <div class="small-box bg-green">
           <div class="inner">
               <h3><?php echo $dashboard_Tcount['count_vetricals']; ?></h3>
               <p>Team Verticals</p>
           </div>
           <div class="icon">
               <i class="ion ion-bag"></i>
           </div>
           <a href="<?php echo base_url(); ?>manager/team/verticals" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
       </div>
   </div>
   
   <div class="col-xs-6 col-sm-3">
       
       <div class="small-box bg-red">
           <div class="inner">
               <h3><?php echo $dashboard_Tcount['count_today_birth']; ?></h3>
               <p>Team Birthday</p>
           </div>
           <div class="icon">
               <i class="ion ion-bag"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
       </div>

   </div>
</div>

        <div class="row">
            <div class="col-sm-4">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">My Lead Stats</h3>            
            </div>
            
            <div class="box-body">
            <ul class="crm-compact-stats-list"><?php
                            $myleadp1= array();
                            $myleadp2= array();
                            foreach($dashboard_lead as $li){
                                $myleadp1[]= "'".$li['status']."'";
                                $myleadp2[]= $li['lead_count'];  
                                ?>
                            <li><a href="<?php echo base_url(); ?>manager/leads?d1=&d2=&status%5B%5D=<?php echo $li['status_id'] ?>"><?php echo $li['status']; ?> <span
                                        class="pull-right badge bg-blue"><?php echo $li['lead_count']; ?></span></a>
                            </li>
                            <?php } ?></ul>
            </div>
           
          </div>

          </div>

          <div class="col-sm-8">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Previous Performance</h3>            
            </div>
           
           
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart3"></canvas>
              </div>
            </div>
           
           
          </div>



          </div>
          
          </div>


           <div class="row" style="display:flex">
            <div class="col-sm-4">
            <div class="box box-info leftbox">
            <div class="box-header with-border">
              <h3 class="box-title">Team Lead Stats</h3>            
            </div>
            
            <div class="box-body">
              <ul class="crm-compact-stats-list"><?php
                  $myTleadp1= array();
                  $myTleadp2= array();
                    foreach($dashboard_lead_team as $li){
                      $myTleadp1[]= "'".$li['status']."'";
                      $myTleadp2[]= $li['lead_count'];  
                      
                      ?>
                  <li><a href="<?php echo base_url(); ?>manager/team/leads?d1=&d2=&status%5B%5D=<?php echo $li['status_id'] ?>"><?php echo $li['status']; ?> <span
                              class="pull-right badge bg-blue"><?php echo $li['lead_count']; ?></span></a>
                  </li>
                  <?php } ?></ul>
            </div>
           
          </div>

          </div>

          <div class="col-sm-8">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Team Projection</h3>            
            </div>
            
            <div class="box-body">
            <canvas id="barChart4"></canvas>
            </div>
           
          </div>


           <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">My Projection</h3>            
            </div>

            <div class="box-body">
              <canvas id="barChart2"></canvas>
            </div>
           
          </div> 

          </div>
        
            </div>
            
            
              <div class="row">
			<div class="col-sm-3">
    <div class="crm-modern-stat-card">
        <div class="card-top">
            <h4 class="card-title"><i class="fa fa-calendar-check-o text-primary"></i> My Followups</h4>
            <span class="card-total-pill"><?php echo ($dashboard_f['total_missed'] + $dashboard_f['total_lastweek'] + $dashboard_f['total_today'] + $dashboard_f['total_nextweek'] + $dashboard_f['total_future']); ?> Total</span>
        </div>
        <div class="crm-seg-bar">
            <div class="crm-seg bg-red" style="width:8%;" title="Missed"></div>
            <div class="crm-seg bg-orange" style="width:17%;" title="Last 7 Days"></div>
            <div class="crm-seg bg-skyblue" style="width:13%;" title="Today"></div>
            <div class="crm-seg bg-blue" style="width:25%;" title="Next 7 Days"></div>
            <div class="crm-seg bg-green" style="width:37%;" title="Future"></div>
        </div>
        <ul class="crm-modern-stat-grid">
            <li><a href="<?php echo base_url(); ?>manager/leads/followups?type=1" class="crm-modern-stat-chip"><span>All Missed</span><span class="badge bg-red"><?php echo $dashboard_f['total_missed']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads/followups?type=2" class="crm-modern-stat-chip"><span>Last 7 Days</span><span class="badge bg-orange"><?php echo $dashboard_f['total_lastweek']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads/followups?type=3" class="crm-modern-stat-chip"><span>Today</span><span class="badge bg-skyblue"><?php echo $dashboard_f['total_today']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads/followups?type=4" class="crm-modern-stat-chip"><span>Next 7 Days</span><span class="badge bg-blue"><?php echo $dashboard_f['total_nextweek']; ?></span></a></li>
            <li class="full-width"><a href="<?php echo base_url(); ?>manager/leads/followups?type=5" class="crm-modern-stat-chip"><span>All Future</span><span class="badge bg-green"><?php echo $dashboard_f['total_future']; ?></span></a></li>
        </ul>
    </div>
</div>

<div class="col-sm-3">
    <div class="crm-modern-stat-card">
        <div class="card-top">
            <h4 class="card-title"><i class="fa fa-handshake-o text-primary"></i> My Meetings</h4>
            <span class="card-total-pill"><?php echo ($dashboard_m['total_missed'] + $dashboard_m['total_lastweek'] + $dashboard_m['total_today'] + $dashboard_m['total_nextweek'] + $dashboard_m['total_future']); ?> Total</span>
        </div>
        <div class="crm-seg-bar">
            <div class="crm-seg bg-red" style="width:8%;" title="Missed"></div>
            <div class="crm-seg bg-orange" style="width:17%;" title="Last 7 Days"></div>
            <div class="crm-seg bg-skyblue" style="width:13%;" title="Today"></div>
            <div class="crm-seg bg-blue" style="width:25%;" title="Next 7 Days"></div>
            <div class="crm-seg bg-green" style="width:37%;" title="Future"></div>
        </div>
        <ul class="crm-modern-stat-grid">
            <li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=1" class="crm-modern-stat-chip"><span>All Missed</span><span class="badge bg-red"><?php echo $dashboard_m['total_missed']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=2" class="crm-modern-stat-chip"><span>Last 7 Days</span><span class="badge bg-orange"><?php echo $dashboard_m['total_lastweek']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=3" class="crm-modern-stat-chip"><span>Today</span><span class="badge bg-skyblue"><?php echo $dashboard_m['total_today']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=4" class="crm-modern-stat-chip"><span>Next 7 Days</span><span class="badge bg-blue"><?php echo $dashboard_m['total_nextweek']; ?></span></a></li>
            <li class="full-width"><a href="<?php echo base_url(); ?>manager/leads/meetings?type=5" class="crm-modern-stat-chip"><span>All Future</span><span class="badge bg-green"><?php echo $dashboard_m['total_future']; ?></span></a></li>
        </ul>
    </div>
</div>

<div class="col-sm-3">
    <div class="crm-modern-stat-card">
        <div class="card-top">
            <h4 class="card-title"><i class="fa fa-trophy text-primary"></i> My Closures</h4>
            <span class="card-total-pill"><?php echo isset($dashboard_c['total_all']) ? $dashboard_c['total_all'] : 0; ?> Deals</span>
        </div>
        <div class="crm-seg-bar">
            <div class="crm-seg bg-green" style="width:15%;" title="This Month"></div>
            <div class="crm-seg bg-blue" style="width:20%;" title="Last Month"></div>
            <div class="crm-seg bg-skyblue" style="width:30%;" title="This Year"></div>
            <div class="crm-seg bg-orange" style="width:35%;" title="All Time"></div>
        </div>
        <ul class="crm-modern-stat-grid">
            <li><a href="<?php echo base_url(); ?>manager/leads?status=39" class="crm-modern-stat-chip"><span>This Month</span><span class="badge bg-green"><?php echo isset($dashboard_c['total_this_month']) ? $dashboard_c['total_this_month'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads?status=39" class="crm-modern-stat-chip"><span>Last Month</span><span class="badge bg-blue"><?php echo isset($dashboard_c['total_last_month']) ? $dashboard_c['total_last_month'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads?status=39" class="crm-modern-stat-chip"><span>This Year</span><span class="badge bg-skyblue"><?php echo isset($dashboard_c['total_year']) ? $dashboard_c['total_year'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/leads?status=39" class="crm-modern-stat-chip"><span>All Time</span><span class="badge bg-orange"><?php echo isset($dashboard_c['total_all']) ? $dashboard_c['total_all'] : 0; ?></span></a></li>
            <li class="full-width"><a href="<?php echo base_url(); ?>manager/leads?status=39" class="crm-modern-stat-chip"><span>Total Revenue</span><span class="badge bg-red"><?php echo isset($dashboard_c['total_revenue']) ? number_format($dashboard_c['total_revenue']) : 0; ?></span></a></li>
        </ul>
    </div>
</div>

<div class="col-sm-3">
    <div class="crm-modern-stat-card">
        <div class="card-top">
            <h4 class="card-title"><i class="fa fa-briefcase text-primary"></i> My Vertical FU</h4>
            <span class="card-total-pill"><?php echo isset($dashboard_vfu['total_future']) ? $dashboard_vfu['total_future'] : 0; ?> Total</span>
        </div>
        <div class="crm-seg-bar">
            <div class="crm-seg bg-red" style="width:6%;" title="Missed"></div>
            <div class="crm-seg bg-orange" style="width:18%;" title="Last 7 Days"></div>
            <div class="crm-seg bg-skyblue" style="width:12%;" title="Today"></div>
            <div class="crm-seg bg-blue" style="width:24%;" title="Next 7 Days"></div>
            <div class="crm-seg bg-green" style="width:40%;" title="Future"></div>
        </div>
        <ul class="crm-modern-stat-grid">
            <li><a href="<?php echo base_url(); ?>manager/verticals?type=1" class="crm-modern-stat-chip"><span>All Missed</span><span class="badge bg-red"><?php echo isset($dashboard_vfu['total_missed']) ? $dashboard_vfu['total_missed'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/verticals?type=2" class="crm-modern-stat-chip"><span>Last 7 Days</span><span class="badge bg-orange"><?php echo isset($dashboard_vfu['total_lastweek']) ? $dashboard_vfu['total_lastweek'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/verticals?type=3" class="crm-modern-stat-chip"><span>Today</span><span class="badge bg-skyblue"><?php echo isset($dashboard_vfu['total_today']) ? $dashboard_vfu['total_today'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/verticals?type=4" class="crm-modern-stat-chip"><span>Next 7 Days</span><span class="badge bg-blue"><?php echo isset($dashboard_vfu['total_nextweek']) ? $dashboard_vfu['total_nextweek'] : 0; ?></span></a></li>
            <li class="full-width"><a href="<?php echo base_url(); ?>manager/verticals?type=5" class="crm-modern-stat-chip"><span>All Future</span><span class="badge bg-green"><?php echo isset($dashboard_vfu['total_future']) ? $dashboard_vfu['total_future'] : 0; ?></span></a></li>
        </ul>
    </div>
</div>
</div>

<div class="row">
<div class="col-sm-3">
    <div class="crm-modern-stat-card">
        <div class="card-top">
            <h4 class="card-title"><i class="fa fa-calendar-check-o text-primary"></i> Team Followups</h4>
            <span class="card-total-pill"><?php echo ($dashboard_Tf['total_missed'] + $dashboard_Tf['total_lastweek'] + $dashboard_Tf['total_today'] + $dashboard_Tf['total_nextweek'] + $dashboard_Tf['total_future']); ?> Total</span>
        </div>
        <div class="crm-seg-bar">
            <div class="crm-seg bg-red" style="width:9%;" title="Missed"></div>
            <div class="crm-seg bg-orange" style="width:16%;" title="Last 7 Days"></div>
            <div class="crm-seg bg-skyblue" style="width:13%;" title="Today"></div>
            <div class="crm-seg bg-blue" style="width:26%;" title="Next 7 Days"></div>
            <div class="crm-seg bg-green" style="width:36%;" title="Future"></div>
        </div>
        <ul class="crm-modern-stat-grid">
            <li><a href="<?php echo base_url(); ?>manager/team/followups?type=1" class="crm-modern-stat-chip"><span>All Missed</span><span class="badge bg-red"><?php echo $dashboard_Tf['total_missed']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/followups?type=2" class="crm-modern-stat-chip"><span>Last 7 Days</span><span class="badge bg-orange"><?php echo $dashboard_Tf['total_lastweek']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/followups?type=3" class="crm-modern-stat-chip"><span>Today</span><span class="badge bg-skyblue"><?php echo $dashboard_Tf['total_today']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/followups?type=4" class="crm-modern-stat-chip"><span>Next 7 Days</span><span class="badge bg-blue"><?php echo $dashboard_Tf['total_nextweek']; ?></span></a></li>
            <li class="full-width"><a href="<?php echo base_url(); ?>manager/team/followups?type=5" class="crm-modern-stat-chip"><span>All Future</span><span class="badge bg-green"><?php echo $dashboard_Tf['total_future']; ?></span></a></li>
        </ul>
    </div>
</div>

<div class="col-sm-3">
    <div class="crm-modern-stat-card">
        <div class="card-top">
            <h4 class="card-title"><i class="fa fa-handshake-o text-primary"></i> Team Meetings</h4>
            <span class="card-total-pill"><?php echo ($dashboard_Tm['total_missed'] + $dashboard_Tm['total_lastweek'] + $dashboard_Tm['total_today'] + $dashboard_Tm['total_nextweek'] + $dashboard_Tm['total_future']); ?> Total</span>
        </div>
        <div class="crm-seg-bar">
            <div class="crm-seg bg-red" style="width:9%;" title="Missed"></div>
            <div class="crm-seg bg-orange" style="width:20%;" title="Last 7 Days"></div>
            <div class="crm-seg bg-skyblue" style="width:11%;" title="Today"></div>
            <div class="crm-seg bg-blue" style="width:26%;" title="Next 7 Days"></div>
            <div class="crm-seg bg-green" style="width:34%;" title="Future"></div>
        </div>
        <ul class="crm-modern-stat-grid">
            <li><a href="<?php echo base_url(); ?>manager/team/meetings?type=1" class="crm-modern-stat-chip"><span>All Missed</span><span class="badge bg-red"><?php echo $dashboard_Tm['total_missed']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/meetings?type=2" class="crm-modern-stat-chip"><span>Last 7 Days</span><span class="badge bg-orange"><?php echo $dashboard_Tm['total_lastweek']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/meetings?type=3" class="crm-modern-stat-chip"><span>Today</span><span class="badge bg-skyblue"><?php echo $dashboard_Tm['total_today']; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/meetings?type=4" class="crm-modern-stat-chip"><span>Next 7 Days</span><span class="badge bg-blue"><?php echo $dashboard_Tm['total_nextweek']; ?></span></a></li>
            <li class="full-width"><a href="<?php echo base_url(); ?>manager/team/meetings?type=5" class="crm-modern-stat-chip"><span>All Future</span><span class="badge bg-green"><?php echo $dashboard_Tm['total_future']; ?></span></a></li>
        </ul>
    </div>
</div>

<div class="col-sm-3">
    <div class="crm-modern-stat-card">
        <div class="card-top">
            <h4 class="card-title"><i class="fa fa-trophy text-primary"></i> Team Closures</h4>
            <span class="card-total-pill"><?php echo isset($dashboard_Tc['total_all']) ? $dashboard_Tc['total_all'] : 0; ?> Deals</span>
        </div>
        <div class="crm-seg-bar">
            <div class="crm-seg bg-green" style="width:12%;" title="This Month"></div>
            <div class="crm-seg bg-blue" style="width:18%;" title="Last Month"></div>
            <div class="crm-seg bg-skyblue" style="width:30%;" title="This Year"></div>
            <div class="crm-seg bg-orange" style="width:40%;" title="All Time"></div>
        </div>
        <ul class="crm-modern-stat-grid">
            <li><a href="<?php echo base_url(); ?>manager/team/leads?status=39" class="crm-modern-stat-chip"><span>This Month</span><span class="badge bg-green"><?php echo isset($dashboard_Tc['total_this_month']) ? $dashboard_Tc['total_this_month'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/leads?status=39" class="crm-modern-stat-chip"><span>Last Month</span><span class="badge bg-blue"><?php echo isset($dashboard_Tc['total_last_month']) ? $dashboard_Tc['total_last_month'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/leads?status=39" class="crm-modern-stat-chip"><span>This Year</span><span class="badge bg-skyblue"><?php echo isset($dashboard_Tc['total_year']) ? $dashboard_Tc['total_year'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/leads?status=39" class="crm-modern-stat-chip"><span>All Time</span><span class="badge bg-orange"><?php echo isset($dashboard_Tc['total_all']) ? $dashboard_Tc['total_all'] : 0; ?></span></a></li>
            <li class="full-width"><a href="<?php echo base_url(); ?>manager/team/leads?status=39" class="crm-modern-stat-chip"><span>Total Revenue</span><span class="badge bg-red"><?php echo isset($dashboard_Tc['total_revenue']) ? number_format($dashboard_Tc['total_revenue']) : 0; ?></span></a></li>
        </ul>
    </div>
</div>

<div class="col-sm-3">
    <div class="crm-modern-stat-card">
        <div class="card-top">
            <h4 class="card-title"><i class="fa fa-briefcase text-primary"></i> Team Vertical FU</h4>
            <span class="card-total-pill"><?php echo isset($dashboard_Tvfu['total_future']) ? $dashboard_Tvfu['total_future'] : 0; ?> Total</span>
        </div>
        <div class="crm-seg-bar">
            <div class="crm-seg bg-red" style="width:10%;" title="Missed"></div>
            <div class="crm-seg bg-orange" style="width:18%;" title="Last 7 Days"></div>
            <div class="crm-seg bg-skyblue" style="width:12%;" title="Today"></div>
            <div class="crm-seg bg-blue" style="width:22%;" title="Next 7 Days"></div>
            <div class="crm-seg bg-green" style="width:38%;" title="Future"></div>
        </div>
        <ul class="crm-modern-stat-grid">
            <li><a href="<?php echo base_url(); ?>manager/team/verticals?type=1" class="crm-modern-stat-chip"><span>All Missed</span><span class="badge bg-red"><?php echo isset($dashboard_Tvfu['total_missed']) ? $dashboard_Tvfu['total_missed'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/verticals?type=2" class="crm-modern-stat-chip"><span>Last 7 Days</span><span class="badge bg-orange"><?php echo isset($dashboard_Tvfu['total_lastweek']) ? $dashboard_Tvfu['total_lastweek'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/verticals?type=3" class="crm-modern-stat-chip"><span>Today</span><span class="badge bg-skyblue"><?php echo isset($dashboard_Tvfu['total_today']) ? $dashboard_Tvfu['total_today'] : 0; ?></span></a></li>
            <li><a href="<?php echo base_url(); ?>manager/team/verticals?type=4" class="crm-modern-stat-chip"><span>Next 7 Days</span><span class="badge bg-blue"><?php echo isset($dashboard_Tvfu['total_nextweek']) ? $dashboard_Tvfu['total_nextweek'] : 0; ?></span></a></li>
            <li class="full-width"><a href="<?php echo base_url(); ?>manager/team/verticals?type=5" class="crm-modern-stat-chip"><span>All Future</span><span class="badge bg-green"><?php echo isset($dashboard_Tvfu['total_future']) ? $dashboard_Tvfu['total_future'] : 0; ?></span></a></li>
        </ul>
    </div>
</div>
</div>
</section>

    

</div>


<?php

if(!empty($myleadp1)){  $myleadstr1= implode(', ',$myleadp1); }

if(!empty($myleadp2)){  $myleadstr2= implode(', ',$myleadp2); }

if(!empty($myTleadp1)){  $myTleadstr1= implode(', ',$myTleadp1); }

if(!empty($myTleadp2)){  $myTleadstr2= implode(', ',$myTleadp2); }


?>
<script>
  $(function () {
    

    
    
    


    var areaChartData1 = {
     labels  : [<?php echo  $myleadstr1; ?>],
      datasets: [
        {
          label               : 'Leads',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo  $myleadstr2; ?>]
        }
      ]
    }

    var areaChartData2 = {
    labels  : ['<?php echo $dashboard_MyPro['month_name'][0]; ?>','<?php echo $dashboard_MyPro['month_name'][1]; ?>','<?php echo $dashboard_MyPro['month_name'][2]; ?>','<?php echo $dashboard_MyPro['month_name'][3]; ?>','<?php echo $dashboard_MyPro['month_name'][4]; ?>','<?php echo $dashboard_MyPro['month_name'][5]; ?>','<?php echo $dashboard_MyPro['month_name'][6]; ?>','<?php echo $dashboard_MyPro['month_name'][7]; ?>','<?php echo $dashboard_MyPro['month_name'][8]; ?>','<?php echo $dashboard_MyPro['month_name'][9]; ?>','<?php echo $dashboard_MyPro['month_name'][10]; ?>','<?php echo $dashboard_MyPro['month_name'][11]; ?>'],
      datasets: [
        {
          label               : 'Leads',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : ['<?php echo $dashboard_MyPro['lead_number']['pt_0']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_1']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_2']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_3']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_4']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_5']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_6']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_7']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_8']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_9']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_10']; ?>','<?php echo $dashboard_MyPro['lead_number']['pt_11']; ?>']
        }
      ]
    }

    var areaChartData3 = {
     labels  : ['<?php echo $dashboard_TeamPro['month_name'][0]; ?>','<?php echo $dashboard_TeamPro['month_name'][1]; ?>','<?php echo $dashboard_TeamPro['month_name'][2]; ?>','<?php echo $dashboard_TeamPro['month_name'][3]; ?>','<?php echo $dashboard_TeamPro['month_name'][4]; ?>','<?php echo $dashboard_TeamPro['month_name'][5]; ?>','<?php echo $dashboard_TeamPro['month_name'][6]; ?>','<?php echo $dashboard_TeamPro['month_name'][7]; ?>','<?php echo $dashboard_TeamPro['month_name'][8]; ?>','<?php echo $dashboard_TeamPro['month_name'][9]; ?>','<?php echo $dashboard_TeamPro['month_name'][10]; ?>','<?php echo $dashboard_TeamPro['month_name'][11]; ?>'],
      datasets: [
        {
          label               : 'Leads',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [0,0,0,0,0,0,0,0,0,0,0,0]
        }
      ]
    }

    var areaChartData4 = {
     labels  : ['<?php echo $dashboard_TeamPro['month_name'][0]; ?>','<?php echo $dashboard_TeamPro['month_name'][1]; ?>','<?php echo $dashboard_TeamPro['month_name'][2]; ?>','<?php echo $dashboard_TeamPro['month_name'][3]; ?>','<?php echo $dashboard_TeamPro['month_name'][4]; ?>','<?php echo $dashboard_TeamPro['month_name'][5]; ?>','<?php echo $dashboard_TeamPro['month_name'][6]; ?>','<?php echo $dashboard_TeamPro['month_name'][7]; ?>','<?php echo $dashboard_TeamPro['month_name'][8]; ?>','<?php echo $dashboard_TeamPro['month_name'][9]; ?>','<?php echo $dashboard_TeamPro['month_name'][10]; ?>','<?php echo $dashboard_TeamPro['month_name'][11]; ?>'],
      datasets: [
        {
          label               : 'Leads',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : ['<?php echo $dashboard_TeamPro['lead_number']['pt_0']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_1']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_2']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_3']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_4']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_5']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_6']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_7']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_8']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_9']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_10']; ?>','<?php echo $dashboard_TeamPro['lead_number']['pt_11']; ?>']
        }
      ]
    }


 

    
    
    
    

    
    
    
    var barChartCanvas                   = $('#barChart2').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData2
    barChartData.datasets[0].fillColor   = '#f39c12'
    barChartData.datasets[0].strokeColor = '#f39c12'
    barChartData.datasets[0].pointColor  = '#f39c12'
    var barChartOptions                  = {
      
      scaleBeginAtZero        : true,
      
      scaleShowGridLines      : true,
      
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      
      scaleGridLineWidth      : 2,
      
      scaleShowHorizontalLines: true,
      
      scaleShowVerticalLines  : true,
      
      barShowStroke           : true,
      
      barStrokeWidth          : 2,
      
      barValueSpacing         : 25,
      
      barDatasetSpacing       : 1,
      
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      
      responsive              : true,
      maintainAspectRatio     : false
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

     
    
    
    
    function renderDashboardCharts() {
        var curPalette = document.documentElement.getAttribute('data-crm-palette') || 'green';
        var isRed = curPalette === 'red';
        var isBlue = curPalette === 'blue';
        var accentColor = isRed ? '#dc2626' : (isBlue ? '#2563eb' : '#10b981');
        var accentStroke = isRed ? '#b91c1c' : (isBlue ? '#1d4ed8' : '#059669');

        if ($('#barChart3').length) {
            var b3 = document.getElementById('barChart3');
            var p3 = b3.parentNode;
            var newB3 = document.createElement('canvas');
            newB3.id = 'barChart3';
            p3.replaceChild(newB3, b3);
            var chart3 = new Chart(newB3.getContext('2d'));
            var data3 = $.extend(true, {}, areaChartData3);
            data3.datasets[0].fillColor = accentColor;
            data3.datasets[0].strokeColor = accentStroke;
            data3.datasets[0].pointColor = accentColor;
            var opts3 = {
                scaleBeginAtZero: true,
                scaleShowGridLines: true,
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                scaleGridLineWidth: 1,
                scaleShowHorizontalLines: true,
                scaleShowVerticalLines: true,
                barShowStroke: true,
                barStrokeWidth: 2,
                barValueSpacing: 25,
                barDatasetSpacing: 1,
                responsive: true,
                maintainAspectRatio: true
            };
            chart3.Bar(data3, opts3);
        }

        if ($('#barChart4').length) {
            var b4 = document.getElementById('barChart4');
            var p4 = b4.parentNode;
            var newB4 = document.createElement('canvas');
            newB4.id = 'barChart4';
            p4.replaceChild(newB4, b4);
            var chart4 = new Chart(newB4.getContext('2d'));
            var data4 = $.extend(true, {}, areaChartData4);
            data4.datasets[0].fillColor = accentColor;
            data4.datasets[0].strokeColor = accentStroke;
            data4.datasets[0].pointColor = accentColor;
            var opts4 = {
                scaleBeginAtZero: true,
                scaleShowGridLines: true,
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                scaleGridLineWidth: 2,
                scaleShowHorizontalLines: true,
                scaleShowVerticalLines: true,
                barShowStroke: true,
                barStrokeWidth: 2,
                barValueSpacing: 25,
                barDatasetSpacing: 1,
                responsive: true,
                maintainAspectRatio: false
            };
            chart4.Bar(data4, opts4);
        }
    }
    window.renderDashboardCharts = renderDashboardCharts;
    renderDashboardCharts();

    

     
    
    
    
    if ($('#pieChart1').length) { var pieChartCanvas = $('#pieChart1').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)

     var pieChartCanvas2 = $('#pieChart2').get(0).getContext('2d')
    var pieChart2       = new Chart(pieChartCanvas2)

     var pieChartCanvas3 = $('#pieChart3').get(0).getContext('2d')
    var pieChart3       = new Chart(pieChartCanvas3)

     var pieChartCanvas4 = $('#pieChart4').get(0).getContext('2d')
    var pieChart4       = new Chart(pieChartCanvas4)

    var PieData        = [
      {
        value    : <?php echo $dashboard_f['total_missed']; ?>,
        color    : '#dd4b39',
        highlight: '#dd4b39',
        label    : 'All Missed'
      },
      {
        value    : <?php echo $dashboard_f['total_lastweek']; ?>,
        color    : '#ff851b',
        highlight: '#ff851b',
        label    : 'Last Week'
      },
      {
        value    : <?php echo $dashboard_f['total_today']; ?>,
        color    : '#87ceeb',
        highlight: '#87ceeb',
        label    : 'Today'
      },
      {
        value    : <?php echo $dashboard_f['total_nextweek']; ?>,
        color    : '#0164e8',
        highlight: '#0164e8',
        label    : 'Next Week'
      },
      {
        value    : <?php echo $dashboard_f['total_future']; ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'All Future'
      }
    ]

     var PieData2        = [
      {
        value    : <?php echo $dashboard_m['total_missed']; ?>,
        color    : '#dd4b39',
        highlight: '#dd4b39',
        label    : 'All Missed'
      },
      {
        value    : <?php echo $dashboard_m['total_lastweek']; ?>,
        color    : '#ff851b',
        highlight: '#ff851b',
        label    : 'Last Week'
      },
      {
        value    : <?php echo $dashboard_m['total_today']; ?>,
        color    : '#87ceeb',
        highlight: '#87ceeb',
        label    : 'Today'
      },
      {
        value    : <?php echo $dashboard_m['total_nextweek']; ?>,
        color    : '#0164e8',
        highlight: '#0164e8',
        label    : 'Next Week'
      },
      {
        value    : <?php echo $dashboard_m['total_future']; ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'All Future'
      }
    ]

     var PieData3        = [
      {
        value    : <?php echo $dashboard_Tf['total_missed']; ?>,
        color    : '#dd4b39',
        highlight: '#dd4b39',
        label    : 'All Missed'
      },
      {
        value    : <?php echo $dashboard_Tf['total_lastweek']; ?>,
        color    : '#ff851b',
        highlight: '#ff851b',
        label    : 'Last Week'
      },
      {
        value    : <?php echo $dashboard_Tf['total_today']; ?>,
        color    : '#87ceeb',
        highlight: '#87ceeb',
        label    : 'Today'
      },
      {
        value    : <?php echo $dashboard_Tf['total_nextweek']; ?>,
        color    : '#0164e8',
        highlight: '#0164e8',
        label    : 'Next Week'
      },
      {
        value    : <?php echo $dashboard_Tf['total_future']; ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'All Future'
      }
    ]

      var PieData4        = [
      {
        value    : <?php echo $dashboard_Tm['total_missed']; ?>,
        color    : '#dd4b39',
        highlight: '#dd4b39',
        label    : 'All Missed'
      },
      {
        value    : <?php echo $dashboard_Tm['total_lastweek']; ?>,
        color    : '#ff851b',
        highlight: '#ff851b',
        label    : 'Last Week'
      },
      {
        value    : <?php echo $dashboard_Tm['total_today']; ?>,
        color    : '#87ceeb',
        highlight: '#87ceeb',
        label    : 'Today'
      },
      {
        value    : <?php echo $dashboard_Tm['total_nextweek']; ?>,
        color    : '#0164e8',
        highlight: '#0164e8',
        label    : 'Next Week'
      },
      {
        value    : <?php echo $dashboard_Tm['total_future']; ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'All Future'
      }
    ]
    var pieOptions     = {
      
      segmentShowStroke    : true,
      
      segmentStrokeColor   : '#fff',
      
      segmentStrokeWidth   : 2,
      
      percentageInnerCutout: 50, 
      
      animationSteps       : 100,
      
      animationEasing      : 'easeOutBounce',
      
      animateRotate        : true,
      
      animateScale         : false,
      
      responsive           : true,
      
      maintainAspectRatio  : true,
      
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    
    var pieChartCanvasClosures = $('#pieChartClosures').length ? $('#pieChartClosures').get(0).getContext('2d') : null
    var pieChartClosures       = pieChartCanvasClosures ? new Chart(pieChartCanvasClosures) : null

    var pieChartCanvasVertFU   = $('#pieChartVertFU').length ? $('#pieChartVertFU').get(0).getContext('2d') : null
    var pieChartVertFU         = pieChartCanvasVertFU ? new Chart(pieChartCanvasVertFU) : null

    var pieChartCanvasTeamClosures = $('#pieChartTeamClosures').length ? $('#pieChartTeamClosures').get(0).getContext('2d') : null
    var pieChartTeamClosures   = pieChartCanvasTeamClosures ? new Chart(pieChartCanvasTeamClosures) : null

    var pieChartCanvasTeamVertFU = $('#pieChartTeamVertFU').length ? $('#pieChartTeamVertFU').get(0).getContext('2d') : null
    var pieChartTeamVertFU     = pieChartCanvasTeamVertFU ? new Chart(pieChartCanvasTeamVertFU) : null

    var PieDataClosures = [
      { value: <?php echo isset($dashboard_c['total_this_month']) ? $dashboard_c['total_this_month'] : 0; ?>, color: '#00a65a', highlight: '#00a65a', label: 'This Month' },
      { value: <?php echo isset($dashboard_c['total_last_month']) ? $dashboard_c['total_last_month'] : 0; ?>, color: '#0164e8', highlight: '#0164e8', label: 'Last Month' },
      { value: <?php echo isset($dashboard_c['total_year']) ? $dashboard_c['total_year'] : 0; ?>, color: '#87ceeb', highlight: '#87ceeb', label: 'This Year' },
      { value: <?php echo isset($dashboard_c['total_all']) ? $dashboard_c['total_all'] : 0; ?>, color: '#ff851b', highlight: '#ff851b', label: 'All Time' }
    ]

    var PieDataVertFU = [
      { value: <?php echo isset($dashboard_vfu['total_missed']) ? $dashboard_vfu['total_missed'] : 0; ?>, color: '#dd4b39', highlight: '#dd4b39', label: 'All Missed' },
      { value: <?php echo isset($dashboard_vfu['total_lastweek']) ? $dashboard_vfu['total_lastweek'] : 0; ?>, color: '#ff851b', highlight: '#ff851b', label: 'Last Week' },
      { value: <?php echo isset($dashboard_vfu['total_today']) ? $dashboard_vfu['total_today'] : 0; ?>, color: '#87ceeb', highlight: '#87ceeb', label: 'Today' },
      { value: <?php echo isset($dashboard_vfu['total_nextweek']) ? $dashboard_vfu['total_nextweek'] : 0; ?>, color: '#0164e8', highlight: '#0164e8', label: 'Next Week' },
      { value: <?php echo isset($dashboard_vfu['total_future']) ? $dashboard_vfu['total_future'] : 0; ?>, color: '#00a65a', highlight: '#00a65a', label: 'All Future' }
    ]

    var PieDataTeamClosures = [
      { value: <?php echo isset($dashboard_Tc['total_this_month']) ? $dashboard_Tc['total_this_month'] : 0; ?>, color: '#00a65a', highlight: '#00a65a', label: 'This Month' },
      { value: <?php echo isset($dashboard_Tc['total_last_month']) ? $dashboard_Tc['total_last_month'] : 0; ?>, color: '#0164e8', highlight: '#0164e8', label: 'Last Month' },
      { value: <?php echo isset($dashboard_Tc['total_year']) ? $dashboard_Tc['total_year'] : 0; ?>, color: '#87ceeb', highlight: '#87ceeb', label: 'This Year' },
      { value: <?php echo isset($dashboard_Tc['total_all']) ? $dashboard_Tc['total_all'] : 0; ?>, color: '#ff851b', highlight: '#ff851b', label: 'All Time' }
    ]

    var PieDataTeamVertFU = [
      { value: <?php echo isset($dashboard_Tvfu['total_missed']) ? $dashboard_Tvfu['total_missed'] : 0; ?>, color: '#dd4b39', highlight: '#dd4b39', label: 'All Missed' },
      { value: <?php echo isset($dashboard_Tvfu['total_lastweek']) ? $dashboard_Tvfu['total_lastweek'] : 0; ?>, color: '#ff851b', highlight: '#ff851b', label: 'Last Week' },
      { value: <?php echo isset($dashboard_Tvfu['total_today']) ? $dashboard_Tvfu['total_today'] : 0; ?>, color: '#87ceeb', highlight: '#87ceeb', label: 'Today' },
      { value: <?php echo isset($dashboard_Tvfu['total_nextweek']) ? $dashboard_Tvfu['total_nextweek'] : 0; ?>, color: '#0164e8', highlight: '#0164e8', label: 'Next Week' },
      { value: <?php echo isset($dashboard_Tvfu['total_future']) ? $dashboard_Tvfu['total_future'] : 0; ?>, color: '#00a65a', highlight: '#00a65a', label: 'All Future' }
    ]

    pieChart.Doughnut(PieData, pieOptions)
    pieChart2.Doughnut(PieData2, pieOptions)
    if(pieChartClosures) pieChartClosures.Doughnut(PieDataClosures, pieOptions)
    if(pieChartVertFU) pieChartVertFU.Doughnut(PieDataVertFU, pieOptions)
    pieChart3.Doughnut(PieData3, pieOptions)
    pieChart4.Doughnut(PieData4, pieOptions); }
    if(pieChartTeamClosures) pieChartTeamClosures.Doughnut(PieDataTeamClosures, pieOptions)
    if(pieChartTeamVertFU) pieChartTeamVertFU.Doughnut(PieDataTeamVertFU, pieOptions)


  })
</script>


<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>

