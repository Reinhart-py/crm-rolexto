<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<div class="crm-dashboard-container">
    <div class="crm-page-header">
        <div class="crm-page-title-wrap">
            <h1 class="crm-page-title">Dashboard</h1>
        </div>
        <div class="crm-page-actions">
            <a href="<?php echo base_url(); ?>manager/leads" class="crm-btn-secondary">
                <svg class="crm-svg-sm" viewBox="0 0 24 24"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                <span>View Leads</span>
            </a>
            <a href="<?php echo base_url(); ?>manager/leads/add" class="crm-btn-primary">
                <svg class="crm-svg-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                <span>New Lead</span>
            </a>
        </div>
    </div>

    <?php if(!empty($dashboard_Tcount['count_today_birth']) && $dashboard_Tcount['count_today_birth'] > 0){ ?>
    <div class="crm-alert-banner">
        <div class="crm-alert-icon">
            <svg class="crm-svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <div class="crm-alert-text">
            <strong>Today's Celebrations:</strong> You have <?php echo $dashboard_Tcount['count_today_birth']; ?> team birthday(s) today.
        </div>
        <a href="<?php echo base_url(); ?>manager/team/members" class="crm-alert-link">View Team</a>
    </div>
    <?php } ?>

    <div class="crm-metric-strip">
        <a href="<?php echo base_url(); ?>manager/leads" class="crm-metric-card">
            <div class="crm-metric-header">
                <span class="crm-metric-title">My Leads</span>
                <div class="crm-metric-icon-wrap blue">
                    <svg class="crm-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_count['count_leads']) ? $dashboard_count['count_leads'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/team/leads" class="crm-metric-card">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Team Leads</span>
                <div class="crm-metric-icon-wrap purple">
                    <svg class="crm-svg" viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_Tcount['count_leads']) ? $dashboard_Tcount['count_leads'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/leads/followups?type=3" class="crm-metric-card">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Today's Follow-ups</span>
                <div class="crm-metric-icon-wrap amber">
                    <svg class="crm-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/leads/meetings?type=3" class="crm-metric-card">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Today's Meetings</span>
                <div class="crm-metric-icon-wrap emerald">
                    <svg class="crm-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/team/members" class="crm-metric-card">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Team Members</span>
                <div class="crm-metric-icon-wrap slate">
                    <svg class="crm-svg" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_Tcount['count_user']) ? $dashboard_Tcount['count_user'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/verticals" class="crm-metric-card">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Verticals</span>
                <div class="crm-metric-icon-wrap rose">
                    <svg class="crm-svg" viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="9" y1="22" x2="9" y2="2"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_count['count_vetricals']) ? $dashboard_count['count_vetricals'] : 0; ?></div>
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="crm-panel-card">
                <div class="crm-panel-header">
                    <h2>
                        <svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-accent);"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
                        Pipeline Stages
                    </h2>
                    <div class="crm-tab-buttons" id="pipelineTabs">
                        <button type="button" class="crm-tab-btn active" data-target="#tabMyPipeline">My Leads</button>
                        <button type="button" class="crm-tab-btn" data-target="#tabTeamPipeline">Team Leads</button>
                    </div>
                </div>
                <div class="crm-panel-body" style="padding:0;">
                    <div class="crm-tab-pane active" id="tabMyPipeline">
                        <table class="crm-pipeline-table">
                            <thead>
                                <tr>
                                    <th>Stage</th>
                                    <th style="text-align:right;">Count</th>
                                    <th style="text-align:right;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $myleadp1 = array();
                                $myleadp2 = array();
                                if(!empty($dashboard_lead)){
                                    foreach($dashboard_lead as $li){
                                        $myleadp1[] = "'".$li['status']."'";
                                        $myleadp2[] = $li['lead_count'];
                                ?>
                                <tr>
                                    <td>
                                        <div class="crm-stage-badge">
                                            <span class="crm-stage-dot" style="background:#2563eb;"></span>
                                            <span><?php echo htmlspecialchars($li['status']); ?></span>
                                        </div>
                                    </td>
                                    <td style="text-align:right;">
                                        <span class="crm-count-pill"><?php echo $li['lead_count']; ?></span>
                                    </td>
                                    <td style="text-align:right;">
                                        <a href="<?php echo base_url(); ?>manager/leads?status%5B%5D=<?php echo $li['status_id']; ?>" class="crm-btn-sm">
                                            <span>View</span>
                                            <svg class="crm-svg-sm" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                } else { ?>
                                <tr>
                                    <td colspan="3" style="text-align:center; padding:28px; color:var(--crm-text-muted);">
                                        No active leads found.
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="crm-tab-pane" id="tabTeamPipeline" style="display:none;">
                        <table class="crm-pipeline-table">
                            <thead>
                                <tr>
                                    <th>Stage</th>
                                    <th style="text-align:right;">Count</th>
                                    <th style="text-align:right;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $myTleadp1 = array();
                                $myTleadp2 = array();
                                if(!empty($dashboard_lead_team)){
                                    foreach($dashboard_lead_team as $li){
                                        $myTleadp1[] = "'".$li['status']."'";
                                        $myTleadp2[] = $li['lead_count'];
                                ?>
                                <tr>
                                    <td>
                                        <div class="crm-stage-badge">
                                            <span class="crm-stage-dot" style="background:#7c3aed;"></span>
                                            <span><?php echo htmlspecialchars($li['status']); ?></span>
                                        </div>
                                    </td>
                                    <td style="text-align:right;">
                                        <span class="crm-count-pill"><?php echo $li['lead_count']; ?></span>
                                    </td>
                                    <td style="text-align:right;">
                                        <a href="<?php echo base_url(); ?>manager/team/leads?status%5B%5D=<?php echo $li['status_id']; ?>" class="crm-btn-sm">
                                            <span>View</span>
                                            <svg class="crm-svg-sm" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                } else { ?>
                                <tr>
                                    <td colspan="3" style="text-align:center; padding:28px; color:var(--crm-text-muted);">
                                        No team leads recorded yet.
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="crm-panel-card">
                <div class="crm-panel-header">
                    <h2>
                        <svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-accent);"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                        Projections
                    </h2>
                    <a href="<?php echo base_url(); ?>manager/performance-report" class="header-action">
                        Reports &rarr;
                    </a>
                </div>
                <div class="crm-panel-body">
                    <div style="margin-bottom: 24px;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;">
                            <span style="font-size:13px; font-weight:600; color:var(--crm-text-main);">My Projections</span>
                        </div>
                        <div style="height: 180px; position:relative;">
                            <canvas id="barChart2" style="height:180px; width:100%;"></canvas>
                        </div>
                    </div>

                    <div style="padding-top:20px; border-top:1px solid var(--crm-border);">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;">
                            <span style="font-size:13px; font-weight:600; color:var(--crm-text-main);">Team Projections</span>
                        </div>
                        <div style="height: 180px; position:relative;">
                            <canvas id="barChart4" style="height:180px; width:100%;"></canvas>
                        </div>
                    </div>

                    <div style="display:none;">
                        <canvas id="barChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="crm-panel-card">
                <div class="crm-panel-header">
                    <h2>
                        <svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-accent);"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><path d="M9 16l2 2 4-4"/></svg>
                        Follow-ups
                    </h2>
                    <a href="<?php echo base_url(); ?>manager/leads/followups" class="header-action">All &rarr;</a>
                </div>
                <div class="crm-panel-body">
                    <div style="height:170px; display:flex; justify-content:center; align-items:center; margin-bottom:16px;">
                        <canvas id="pieChart1" style="height:160px; max-height:160px;"></canvas>
                    </div>
                    <ul class="crm-activity-list">
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/followups?type=1" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot red"></span>Missed</span>
                                <span class="crm-badge-val red"><?php echo !empty($dashboard_f['total_missed']) ? $dashboard_f['total_missed'] : 0; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/followups?type=2" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot amber"></span>Last 7 Days</span>
                                <span class="crm-badge-val amber"><?php echo !empty($dashboard_f['total_lastweek']) ? $dashboard_f['total_lastweek'] : 0; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/followups?type=3" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot sky"></span>Today</span>
                                <span class="crm-badge-val sky"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/followups?type=4" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot blue"></span>Next 7 Days</span>
                                <span class="crm-badge-val blue"><?php echo !empty($dashboard_f['total_nextweek']) ? $dashboard_f['total_nextweek'] : 0; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/followups?type=5" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot emerald"></span>Future</span>
                                <span class="crm-badge-val emerald"><?php echo !empty($dashboard_f['total_future']) ? $dashboard_f['total_future'] : 0; ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="crm-panel-card">
                <div class="crm-panel-header">
                    <h2>
                        <svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-accent);"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        Meetings
                    </h2>
                    <a href="<?php echo base_url(); ?>manager/leads/meetings" class="header-action">All &rarr;</a>
                </div>
                <div class="crm-panel-body">
                    <div style="height:170px; display:flex; justify-content:center; align-items:center; margin-bottom:16px;">
                        <canvas id="pieChart2" style="height:160px; max-height:160px;"></canvas>
                    </div>
                    <ul class="crm-activity-list">
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/meetings?type=1" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot red"></span>Missed</span>
                                <span class="crm-badge-val red"><?php echo !empty($dashboard_m['total_missed']) ? $dashboard_m['total_missed'] : 0; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/meetings?type=2" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot amber"></span>Last 7 Days</span>
                                <span class="crm-badge-val amber"><?php echo !empty($dashboard_m['total_lastweek']) ? $dashboard_m['total_lastweek'] : 0; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/meetings?type=3" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot sky"></span>Today</span>
                                <span class="crm-badge-val sky"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/meetings?type=4" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot blue"></span>Next 7 Days</span>
                                <span class="crm-badge-val blue"><?php echo !empty($dashboard_m['total_nextweek']) ? $dashboard_m['total_nextweek'] : 0; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>manager/leads/meetings?type=5" class="crm-activity-item">
                                <span class="status-label"><span class="crm-status-dot emerald"></span>Future</span>
                                <span class="crm-badge-val emerald"><?php echo !empty($dashboard_m['total_future']) ? $dashboard_m['total_future'] : 0; ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="crm-panel-card">
                <div class="crm-panel-header">
                    <h2>
                        <svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-accent);"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                        Quick Actions
                    </h2>
                </div>
                <div class="crm-panel-body" style="padding:14px;">
                    <div style="display:flex; flex-direction:column; gap:8px;">
                        <a href="<?php echo base_url(); ?>manager/team/assignleads" class="crm-quick-btn">
                            <svg class="crm-svg text-primary" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
                            <span>Assign Leads</span>
                        </a>
                        <a href="<?php echo base_url(); ?>manager/team/chart" class="crm-quick-btn">
                            <svg class="crm-svg text-primary" viewBox="0 0 24 24"><circle cx="12" cy="5" r="3"/><circle cx="5" cy="19" r="3"/><circle cx="19" cy="19" r="3"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="5" y1="16" x2="12" y2="12"/><line x1="19" y1="16" x2="12" y2="12"/></svg>
                            <span>Team Hierarchy</span>
                        </a>
                        <a href="<?php echo base_url(); ?>manager/verticals/add" class="crm-quick-btn">
                            <svg class="crm-svg text-primary" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                            <span>Add Vertical</span>
                        </a>
                        <a href="<?php echo base_url(); ?>manager/performance-report" class="crm-quick-btn">
                            <svg class="crm-svg text-primary" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                            <span>Performance Report</span>
                        </a>
                    </div>
                </div>
            </div>

            <div style="display:none;">
                <canvas id="pieChart3"></canvas>
                <canvas id="pieChart4"></canvas>
            </div>
        </div>
    </div>
</div>

<?php
$myleadstr1 = !empty($myleadp1) ? implode(', ', $myleadp1) : "''";
$myleadstr2 = !empty($myleadp2) ? implode(', ', $myleadp2) : "0";
$myTleadstr1 = !empty($myTleadp1) ? implode(', ', $myTleadp1) : "''";
$myTleadstr2 = !empty($myTleadp2) ? implode(', ', $myTleadp2) : "0";
?>

<script>
$(function () {
    $('#pipelineTabs .crm-tab-btn').on('click', function() {
        $('#pipelineTabs .crm-tab-btn').removeClass('active');
        $(this).addClass('active');
        var target = $(this).data('target');
        $('#tabMyPipeline, #tabTeamPipeline').hide();
        $(target).show();
    });

    var isDark = document.documentElement.getAttribute('data-theme') === 'dark';
    var gridCol = isDark ? 'rgba(255, 255, 255, 0.07)' : 'rgba(226, 232, 240, 0.8)';

    var areaChartData2 = {
        labels: [
            '<?php echo !empty($dashboard_MyPro['month_name'][0]) ? $dashboard_MyPro['month_name'][0] : "Jan"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][1]) ? $dashboard_MyPro['month_name'][1] : "Feb"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][2]) ? $dashboard_MyPro['month_name'][2] : "Mar"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][3]) ? $dashboard_MyPro['month_name'][3] : "Apr"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][4]) ? $dashboard_MyPro['month_name'][4] : "May"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][5]) ? $dashboard_MyPro['month_name'][5] : "Jun"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][6]) ? $dashboard_MyPro['month_name'][6] : "Jul"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][7]) ? $dashboard_MyPro['month_name'][7] : "Aug"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][8]) ? $dashboard_MyPro['month_name'][8] : "Sep"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][9]) ? $dashboard_MyPro['month_name'][9] : "Oct"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][10]) ? $dashboard_MyPro['month_name'][10] : "Nov"; ?>',
            '<?php echo !empty($dashboard_MyPro['month_name'][11]) ? $dashboard_MyPro['month_name'][11] : "Dec"; ?>'
        ],
        datasets: [{
            label: 'Leads',
            fillColor: 'rgba(37, 99, 235, 0.15)',
            strokeColor: '#2563eb',
            pointColor: '#2563eb',
            pointStrokeColor: '#ffffff',
            pointHighlightFill: '#ffffff',
            pointHighlightStroke: '#2563eb',
            data: [
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_0']) ? $dashboard_MyPro['lead_number']['pt_0'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_1']) ? $dashboard_MyPro['lead_number']['pt_1'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_2']) ? $dashboard_MyPro['lead_number']['pt_2'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_3']) ? $dashboard_MyPro['lead_number']['pt_3'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_4']) ? $dashboard_MyPro['lead_number']['pt_4'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_5']) ? $dashboard_MyPro['lead_number']['pt_5'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_6']) ? $dashboard_MyPro['lead_number']['pt_6'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_7']) ? $dashboard_MyPro['lead_number']['pt_7'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_8']) ? $dashboard_MyPro['lead_number']['pt_8'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_9']) ? $dashboard_MyPro['lead_number']['pt_9'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_10']) ? $dashboard_MyPro['lead_number']['pt_10'] : 0; ?>',
                '<?php echo isset($dashboard_MyPro['lead_number']['pt_11']) ? $dashboard_MyPro['lead_number']['pt_11'] : 0; ?>'
            ]
        }]
    };

    var areaChartData4 = {
        labels: [
            '<?php echo !empty($dashboard_TeamPro['month_name'][0]) ? $dashboard_TeamPro['month_name'][0] : "Jan"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][1]) ? $dashboard_TeamPro['month_name'][1] : "Feb"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][2]) ? $dashboard_TeamPro['month_name'][2] : "Mar"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][3]) ? $dashboard_TeamPro['month_name'][3] : "Apr"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][4]) ? $dashboard_TeamPro['month_name'][4] : "May"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][5]) ? $dashboard_TeamPro['month_name'][5] : "Jun"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][6]) ? $dashboard_TeamPro['month_name'][6] : "Jul"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][7]) ? $dashboard_TeamPro['month_name'][7] : "Aug"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][8]) ? $dashboard_TeamPro['month_name'][8] : "Sep"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][9]) ? $dashboard_TeamPro['month_name'][9] : "Oct"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][10]) ? $dashboard_TeamPro['month_name'][10] : "Nov"; ?>',
            '<?php echo !empty($dashboard_TeamPro['month_name'][11]) ? $dashboard_TeamPro['month_name'][11] : "Dec"; ?>'
        ],
        datasets: [{
            label: 'Leads',
            fillColor: 'rgba(124, 58, 237, 0.15)',
            strokeColor: '#7c3aed',
            pointColor: '#7c3aed',
            pointStrokeColor: '#ffffff',
            pointHighlightFill: '#ffffff',
            pointHighlightStroke: '#7c3aed',
            data: [
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_0']) ? $dashboard_TeamPro['lead_number']['pt_0'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_1']) ? $dashboard_TeamPro['lead_number']['pt_1'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_2']) ? $dashboard_TeamPro['lead_number']['pt_2'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_3']) ? $dashboard_TeamPro['lead_number']['pt_3'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_4']) ? $dashboard_TeamPro['lead_number']['pt_4'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_5']) ? $dashboard_TeamPro['lead_number']['pt_5'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_6']) ? $dashboard_TeamPro['lead_number']['pt_6'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_7']) ? $dashboard_TeamPro['lead_number']['pt_7'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_8']) ? $dashboard_TeamPro['lead_number']['pt_8'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_9']) ? $dashboard_TeamPro['lead_number']['pt_9'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_10']) ? $dashboard_TeamPro['lead_number']['pt_10'] : 0; ?>',
                '<?php echo isset($dashboard_TeamPro['lead_number']['pt_11']) ? $dashboard_TeamPro['lead_number']['pt_11'] : 0; ?>'
            ]
        }]
    };

    var barChartOptions = {
        scaleBeginAtZero: true,
        scaleShowGridLines: true,
        scaleGridLineColor: gridCol,
        scaleGridLineWidth: 1,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: false,
        barShowStroke: true,
        barStrokeWidth: 1,
        barValueSpacing: 18,
        barDatasetSpacing: 1,
        responsive: true,
        maintainAspectRatio: false
    };

    if($('#barChart2').length) {
        var bar2Canvas = $('#barChart2').get(0).getContext('2d');
        var chart2 = new Chart(bar2Canvas);
        chart2.Bar(areaChartData2, barChartOptions);
    }

    if($('#barChart4').length) {
        var bar4Canvas = $('#barChart4').get(0).getContext('2d');
        var chart4 = new Chart(bar4Canvas);
        chart4.Bar(areaChartData4, barChartOptions);
    }

    var pieOptions = {
        segmentShowStroke: true,
        segmentStrokeColor: isDark ? '#0f172a' : '#ffffff',
        segmentStrokeWidth: 2,
        percentageInnerCutout: 62,
        animationSteps: 60,
        animationEasing: 'easeOutQuart',
        animateRotate: true,
        animateScale: false,
        responsive: true,
        maintainAspectRatio: false
    };

    var PieData1 = [
        { value: <?php echo !empty($dashboard_f['total_missed']) ? $dashboard_f['total_missed'] : 0; ?>, color: '#ef4444', label: 'Missed' },
        { value: <?php echo !empty($dashboard_f['total_lastweek']) ? $dashboard_f['total_lastweek'] : 0; ?>, color: '#f59e0b', label: 'Last Week' },
        { value: <?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?>, color: '#0284c7', label: 'Today' },
        { value: <?php echo !empty($dashboard_f['total_nextweek']) ? $dashboard_f['total_nextweek'] : 0; ?>, color: '#2563eb', label: 'Next Week' },
        { value: <?php echo !empty($dashboard_f['total_future']) ? $dashboard_f['total_future'] : 0; ?>, color: '#10b981', label: 'Future' }
    ];

    var PieData2 = [
        { value: <?php echo !empty($dashboard_m['total_missed']) ? $dashboard_m['total_missed'] : 0; ?>, color: '#ef4444', label: 'Missed' },
        { value: <?php echo !empty($dashboard_m['total_lastweek']) ? $dashboard_m['total_lastweek'] : 0; ?>, color: '#f59e0b', label: 'Last Week' },
        { value: <?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?>, color: '#0284c7', label: 'Today' },
        { value: <?php echo !empty($dashboard_m['total_nextweek']) ? $dashboard_m['total_nextweek'] : 0; ?>, color: '#2563eb', label: 'Next Week' },
        { value: <?php echo !empty($dashboard_m['total_future']) ? $dashboard_m['total_future'] : 0; ?>, color: '#10b981', label: 'Future' }
    ];

    if($('#pieChart1').length) {
        var p1Canvas = $('#pieChart1').get(0).getContext('2d');
        new Chart(p1Canvas).Doughnut(PieData1, pieOptions);
    }

    if($('#pieChart2').length) {
        var p2Canvas = $('#pieChart2').get(0).getContext('2d');
        new Chart(p2Canvas).Doughnut(PieData2, pieOptions);
    }
});
</script>

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
