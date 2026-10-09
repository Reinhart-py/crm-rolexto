<?php require_once(APPPATH."views/manager/elements/header.php"); ?>


<style>
  .box.box-info.leftbox {
    height: calc(100% - 20px);
}
</style>
<div class="content-wrapper container">

    

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
                <div class="box box-info crm-compact-card">
            <div class="box-header with-border">
              <h3 class="box-title">My Followups</h3>            
            </div>
                    <div class="box-body">
                    <canvas id="pieChart1" style="height:110px; max-height:110px;"></canvas>
                    </div>

                    <div class="box-footer no-padding">
                        <ul class="crm-compact-stats-list"><li><a href="<?php echo base_url(); ?>manager/leads/followups?type=1">All Missed<span class="pull-right badge bg-red"><?php echo $dashboard_f['total_missed']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads/followups?type=2">Last 7 Days<span class="pull-right badge bg-orange"><?php echo $dashboard_f['total_lastweek']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads/followups?type=3">Today<span class="pull-right badge bg-skyblue"><?php echo $dashboard_f['total_today']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads/followups?type=4">Next 7 Days<span class="pull-right badge bg-blue"><?php echo $dashboard_f['total_nextweek']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads/followups?type=5">All Future<span class="pull-right badge bg-green"><?php echo $dashboard_f['total_future']; ?></span></a></li></ul>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="box box-info crm-compact-card">
            <div class="box-header with-border">
              <h3 class="box-title">My Meetings</h3>            
            </div>
                     <div class="box-body">
                    <canvas id="pieChart2" style="height:110px; max-height:110px;"></canvas>
                    </div>

                    <div class="box-footer no-padding">
                        <ul class="crm-compact-stats-list"><li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=1">All Missed<span class="pull-right badge bg-red"><?php echo $dashboard_m['total_missed']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=2">Last 7 Days<span class="pull-right badge bg-orange"><?php echo $dashboard_m['total_lastweek']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=3">Today<span class="pull-right badge bg-skyblue"><?php echo $dashboard_m['total_today']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=4">Next 7 Days<span class="pull-right badge bg-blue"><?php echo $dashboard_m['total_nextweek']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=5">All Future<span class="pull-right badge bg-green"><?php echo $dashboard_m['total_future']; ?></span></a></li></ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="box box-info crm-compact-card">
            <div class="box-header with-border">
              <h3 class="box-title">My Closures</h3>            
            </div>
                     <div class="box-body">
                    <canvas id="pieChartClosures" style="height:110px; max-height:110px;"></canvas>
                    </div>

                    <div class="box-footer no-padding">
                        <ul class="crm-compact-stats-list"><li><a href="<?php echo base_url(); ?>manager/leads?status=39">This Month<span class="pull-right badge bg-green"><?php echo isset($dashboard_c['total_this_month']) ? $dashboard_c['total_this_month'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads?status=39">Last Month<span class="pull-right badge bg-blue"><?php echo isset($dashboard_c['total_last_month']) ? $dashboard_c['total_last_month'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads?status=39">This Year<span class="pull-right badge bg-skyblue"><?php echo isset($dashboard_c['total_year']) ? $dashboard_c['total_year'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads?status=39">All Time Closed<span class="pull-right badge bg-orange"><?php echo isset($dashboard_c['total_all']) ? $dashboard_c['total_all'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/leads?status=39">Total Revenue<span class="pull-right badge bg-red"><?php echo isset($dashboard_c['total_revenue']) ? number_format($dashboard_c['total_revenue']) : 0; ?></span></a></li></ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="box box-info crm-compact-card">
            <div class="box-header with-border">
              <h3 class="box-title">My Vertical FU</h3>            
            </div>
                     <div class="box-body">
                    <canvas id="pieChartVertFU" style="height:110px; max-height:110px;"></canvas>
                    </div>

                    <div class="box-footer no-padding">
                        <ul class="crm-compact-stats-list"><li><a href="<?php echo base_url(); ?>manager/verticals?type=1">All Missed<span class="pull-right badge bg-red"><?php echo isset($dashboard_vfu['total_missed']) ? $dashboard_vfu['total_missed'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/verticals?type=2">Last 7 Days<span class="pull-right badge bg-orange"><?php echo isset($dashboard_vfu['total_lastweek']) ? $dashboard_vfu['total_lastweek'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/verticals?type=3">Today<span class="pull-right badge bg-skyblue"><?php echo isset($dashboard_vfu['total_today']) ? $dashboard_vfu['total_today'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/verticals?type=4">Next 7 Days<span class="pull-right badge bg-blue"><?php echo isset($dashboard_vfu['total_nextweek']) ? $dashboard_vfu['total_nextweek'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/verticals?type=5">All Future<span class="pull-right badge bg-green"><?php echo isset($dashboard_vfu['total_future']) ? $dashboard_vfu['total_future'] : 0; ?></span></a></li></ul>
                    </div>
                </div>
            </div>
</div>

<div class="row">
            <div class="col-sm-3">
                <div class="box box-info crm-compact-card">
            <div class="box-header with-border">
              <h3 class="box-title">Team Followups</h3>            
            </div>
                     <div class="box-body">
                    <canvas id="pieChart3" style="height:110px; max-height:110px;"></canvas>
                    </div>

                    <div class="box-footer no-padding">
                        <ul class="crm-compact-stats-list"><li><a href="<?php echo base_url(); ?>manager/team/followups?type=1">All Missed<span class="pull-right badge bg-red"><?php echo $dashboard_Tf['total_missed']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/followups?type=2">Last 7 Days<span class="pull-right badge bg-orange"><?php echo $dashboard_Tf['total_lastweek']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/followups?type=3">Today<span class="pull-right badge bg-skyblue"><?php echo $dashboard_Tf['total_today']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/followups?type=4">Next 7 Days<span class="pull-right badge bg-blue"><?php echo $dashboard_Tf['total_nextweek']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/followups?type=5">All Future<span class="pull-right badge bg-green"><?php echo $dashboard_Tf['total_future']; ?></span></a></li></ul>
                    </div>
                </div>
            </div>
            
			<div class="col-sm-3">
                <div class="box box-info crm-compact-card">
            <div class="box-header with-border">
              <h3 class="box-title">Team Meetings</h3>            
            </div>
                     <div class="box-body">
                    <canvas id="pieChart4" style="height:110px; max-height:110px;"></canvas>
                    </div>

                    <div class="box-footer no-padding">
                        <ul class="crm-compact-stats-list"><li><a href="<?php echo base_url(); ?>manager/team/meetings?type=1">All Missed<span class="pull-right badge bg-red"><?php echo $dashboard_Tm['total_missed']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/meetings?type=2">Last 7 Days<span class="pull-right badge bg-orange"><?php echo $dashboard_Tm['total_lastweek']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/meetings?type=3">Today<span class="pull-right badge bg-skyblue"><?php echo $dashboard_Tm['total_today']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/meetings?type=4">Next 7 Days<span class="pull-right badge bg-blue"><?php echo $dashboard_Tm['total_nextweek']; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/meetings?type=5">All Future<span class="pull-right badge bg-green"><?php echo $dashboard_Tm['total_future']; ?></span></a></li></ul>
                    </div>
                </div>
            </div>

			<div class="col-sm-3">
                <div class="box box-info crm-compact-card">
            <div class="box-header with-border">
              <h3 class="box-title">Team Closures</h3>            
            </div>
                     <div class="box-body">
                    <canvas id="pieChartTeamClosures" style="height:110px; max-height:110px;"></canvas>
                    </div>

                    <div class="box-footer no-padding">
                        <ul class="crm-compact-stats-list"><li><a href="<?php echo base_url(); ?>manager/team/leads?status=39">This Month<span class="pull-right badge bg-green"><?php echo isset($dashboard_Tc['total_this_month']) ? $dashboard_Tc['total_this_month'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/leads?status=39">Last Month<span class="pull-right badge bg-blue"><?php echo isset($dashboard_Tc['total_last_month']) ? $dashboard_Tc['total_last_month'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/leads?status=39">This Year<span class="pull-right badge bg-skyblue"><?php echo isset($dashboard_Tc['total_year']) ? $dashboard_Tc['total_year'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/leads?status=39">All Time Closed<span class="pull-right badge bg-orange"><?php echo isset($dashboard_Tc['total_all']) ? $dashboard_Tc['total_all'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/leads?status=39">Total Revenue<span class="pull-right badge bg-red"><?php echo isset($dashboard_Tc['total_revenue']) ? number_format($dashboard_Tc['total_revenue']) : 0; ?></span></a></li></ul>
                    </div>
                </div>
            </div>

			<div class="col-sm-3">
                <div class="box box-info crm-compact-card">
            <div class="box-header with-border">
              <h3 class="box-title">Team Vertical FU</h3>            
            </div>
                     <div class="box-body">
                    <canvas id="pieChartTeamVertFU" style="height:110px; max-height:110px;"></canvas>
                    </div>

                    <div class="box-footer no-padding">
                        <ul class="crm-compact-stats-list"><li><a href="<?php echo base_url(); ?>manager/team/verticals?type=1">All Missed<span class="pull-right badge bg-red"><?php echo isset($dashboard_Tvfu['total_missed']) ? $dashboard_Tvfu['total_missed'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/verticals?type=2">Last 7 Days<span class="pull-right badge bg-orange"><?php echo isset($dashboard_Tvfu['total_lastweek']) ? $dashboard_Tvfu['total_lastweek'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/verticals?type=3">Today<span class="pull-right badge bg-skyblue"><?php echo isset($dashboard_Tvfu['total_today']) ? $dashboard_Tvfu['total_today'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/verticals?type=4">Next 7 Days<span class="pull-right badge bg-blue"><?php echo isset($dashboard_Tvfu['total_nextweek']) ? $dashboard_Tvfu['total_nextweek'] : 0; ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>manager/team/verticals?type=5">All Future<span class="pull-right badge bg-green"><?php echo isset($dashboard_Tvfu['total_future']) ? $dashboard_Tvfu['total_future'] : 0; ?></span></a></li></ul>
                    </div>
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

     
    
    
    
    var barChartCanvas                   = $('#barChart3').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData3
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      
      scaleBeginAtZero        : true,
      
      scaleShowGridLines      : true,
      
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      
      scaleGridLineWidth      : 1,
      
      scaleShowHorizontalLines: true,
      
      scaleShowVerticalLines  : true,
      
      barShowStroke           : true,
      
      barStrokeWidth          : 2,
      
      barValueSpacing         : 25,
      
      barDatasetSpacing       : 1,
      
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)


    
    
    
    var barChartCanvas                   = $('#barChart4').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData4
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

    

     
    
    
    
    var pieChartCanvas = $('#pieChart1').get(0).getContext('2d')
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
    pieChart4.Doughnut(PieData4, pieOptions)
    if(pieChartTeamClosures) pieChartTeamClosures.Doughnut(PieDataTeamClosures, pieOptions)
    if(pieChartTeamVertFU) pieChartTeamVertFU.Doughnut(PieDataTeamVertFU, pieOptions)


  })
</script>


<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>

