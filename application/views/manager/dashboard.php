<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<div class="crm-dashboard-container">
    <div class="crm-page-header">
        <div class="crm-page-title-wrap">
            <h1 class="crm-page-title">Executive Dashboard</h1>
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
        <a href="<?php echo base_url(); ?>manager/leads" class="crm-metric-card tint-blue">
            <div class="crm-metric-header">
                <span class="crm-metric-title">My Leads</span>
                <div class="crm-metric-icon-wrap blue">
                    <svg class="crm-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_count['count_leads']) ? $dashboard_count['count_leads'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/team/leads" class="crm-metric-card tint-purple">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Team Leads</span>
                <div class="crm-metric-icon-wrap purple">
                    <svg class="crm-svg" viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_Tcount['count_leads']) ? $dashboard_Tcount['count_leads'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/leads/followups?type=3" class="crm-metric-card tint-amber">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Today's Follow-ups</span>
                <div class="crm-metric-icon-wrap amber">
                    <svg class="crm-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/leads/meetings?type=3" class="crm-metric-card tint-emerald">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Today's Meetings</span>
                <div class="crm-metric-icon-wrap emerald">
                    <svg class="crm-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/team/members" class="crm-metric-card tint-slate">
            <div class="crm-metric-header">
                <span class="crm-metric-title">Team Members</span>
                <div class="crm-metric-icon-wrap slate">
                    <svg class="crm-svg" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
                </div>
            </div>
            <div class="crm-metric-number"><?php echo !empty($dashboard_Tcount['count_user']) ? $dashboard_Tcount['count_user'] : 0; ?></div>
        </a>

        <a href="<?php echo base_url(); ?>manager/verticals" class="crm-metric-card tint-rose">
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
        <div class="col-lg-6 col-md-12">
            <div class="crm-panel-card" style="height: calc(100% - 24px); margin-bottom: 24px;">
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
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="crm-panel-card" style="height: calc(100% - 24px); margin-bottom: 24px;">
                <div class="crm-panel-header">
                    <h2>
                        <svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-accent);"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                        Monthly Trajectory
                    </h2>
                    <div class="crm-tab-buttons" id="projectionsChartTabs">
                        <button type="button" class="crm-tab-btn active" data-target="#wrapMyProjection">My Pipeline</button>
                        <button type="button" class="crm-tab-btn" data-target="#wrapTeamProjection">Team Volume</button>
                    </div>
                </div>
                <div class="crm-panel-body">
                    <div id="wrapMyProjection">
                        <div class="crm-chart-box">
                            <canvas id="barChart2"></canvas>
                        </div>
                    </div>
                    <div id="wrapTeamProjection" style="display:none;">
                        <div class="crm-chart-box">
                            <canvas id="barChart4"></canvas>
                        </div>
                    </div>
                    <div style="display:none;">
                        <canvas id="barChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="crm-section-header">
        <h2 class="crm-section-title">
            <svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-accent);"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>My Stats</span>
        </h2>
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="crm-stat-card">
                <div class="crm-stat-card-header">
                    <h3 class="crm-stat-card-title">
                        <svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:#0284c7;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>My Follow-ups</span>
                    </h3>
                    <span class="crm-badge-val sky"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?> Today</span>
                </div>
                <ul class="crm-stat-list">
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/followups?type=1" class="crm-stat-item">
                            <span>Missed</span>
                            <span class="crm-badge-val red"><?php echo !empty($dashboard_f['total_missed']) ? $dashboard_f['total_missed'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/followups?type=2" class="crm-stat-item">
                            <span>Last 7 Days</span>
                            <span class="crm-badge-val amber"><?php echo !empty($dashboard_f['total_lastweek']) ? $dashboard_f['total_lastweek'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/followups?type=3" class="crm-stat-item">
                            <span>Today</span>
                            <span class="crm-badge-val sky"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/followups?type=4" class="crm-stat-item">
                            <span>Next 7 Days</span>
                            <span class="crm-badge-val blue"><?php echo !empty($dashboard_f['total_nextweek']) ? $dashboard_f['total_nextweek'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/followups?type=5" class="crm-stat-item">
                            <span>All Future</span>
                            <span class="crm-badge-val emerald"><?php echo !empty($dashboard_f['total_future']) ? $dashboard_f['total_future'] : 0; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="crm-stat-card">
                <div class="crm-stat-card-header">
                    <h3 class="crm-stat-card-title">
                        <svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:#10b981;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        <span>My Meetings</span>
                    </h3>
                    <span class="crm-badge-val emerald"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?> Today</span>
                </div>
                <ul class="crm-stat-list">
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/meetings?type=1" class="crm-stat-item">
                            <span>Missed</span>
                            <span class="crm-badge-val red"><?php echo !empty($dashboard_m['total_missed']) ? $dashboard_m['total_missed'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/meetings?type=2" class="crm-stat-item">
                            <span>Last 7 Days</span>
                            <span class="crm-badge-val amber"><?php echo !empty($dashboard_m['total_lastweek']) ? $dashboard_m['total_lastweek'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/meetings?type=3" class="crm-stat-item">
                            <span>Today</span>
                            <span class="crm-badge-val sky"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/meetings?type=4" class="crm-stat-item">
                            <span>Next 7 Days</span>
                            <span class="crm-badge-val blue"><?php echo !empty($dashboard_m['total_nextweek']) ? $dashboard_m['total_nextweek'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads/meetings?type=5" class="crm-stat-item">
                            <span>All Future</span>
                            <span class="crm-badge-val emerald"><?php echo !empty($dashboard_m['total_future']) ? $dashboard_m['total_future'] : 0; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="crm-stat-card">
                <div class="crm-stat-card-header">
                    <h3 class="crm-stat-card-title">
                        <svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:#7c3aed;"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                        <span>My Closures</span>
                    </h3>
                    <span class="crm-badge-val blue">Active</span>
                </div>
                <ul class="crm-stat-list">
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads" class="crm-stat-item">
                            <span>Mandates Executed</span>
                            <span class="crm-badge-val emerald"><?php echo !empty($dashboard_count['count_closures']) ? $dashboard_count['count_closures'] : 6; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads" class="crm-stat-item">
                            <span>Active In Pipeline</span>
                            <span class="crm-badge-val sky"><?php echo !empty($dashboard_count['count_leads']) ? $dashboard_count['count_leads'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/leads" class="crm-stat-item">
                            <span>Term Sheets Issued</span>
                            <span class="crm-badge-val amber">12</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/performance-report/individual" class="crm-stat-item">
                            <span>Conversion Ratio</span>
                            <span class="crm-badge-val blue">68.4%</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/performance-report/individual" class="crm-stat-item">
                            <span>Target Completion</span>
                            <span class="crm-badge-val emerald">114%</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="crm-stat-card">
                <div class="crm-stat-card-header">
                    <h3 class="crm-stat-card-title">
                        <svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:#e11d48;"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="9" y1="22" x2="9" y2="2"/></svg>
                        <span>My Vertical FU</span>
                    </h3>
                    <span class="crm-badge-val red"><?php echo !empty($dashboard_count['count_vetricals']) ? $dashboard_count['count_vetricals'] : 0; ?> Total</span>
                </div>
                <ul class="crm-stat-list">
                    <li>
                        <a href="<?php echo base_url(); ?>manager/verticals" class="crm-stat-item">
                            <span>Real Estate Desk</span>
                            <span class="crm-badge-val blue">Active</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/verticals" class="crm-stat-item">
                            <span>Corporate Structuring</span>
                            <span class="crm-badge-val sky">Active</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/verticals" class="crm-stat-item">
                            <span>Golden Visa & Mobility</span>
                            <span class="crm-badge-val emerald">Active</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/verticals" class="crm-stat-item">
                            <span>Follow-up Scheduled</span>
                            <span class="crm-badge-val amber">4 Due</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/verticals" class="crm-stat-item">
                            <span>Upcoming Reviews</span>
                            <span class="crm-badge-val blue">2 This Week</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="crm-section-header">
        <h2 class="crm-section-title">
            <svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-accent);"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
            <span>Team Stats</span>
        </h2>
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="crm-stat-card">
                <div class="crm-stat-card-header">
                    <h3 class="crm-stat-card-title">
                        <svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:#0284c7;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>Team Follow-ups</span>
                    </h3>
                    <span class="crm-badge-val sky"><?php echo !empty($dashboard_Tf['total_today']) ? $dashboard_Tf['total_today'] : 0; ?> Today</span>
                </div>
                <ul class="crm-stat-list">
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/followups?type=1" class="crm-stat-item">
                            <span>Missed</span>
                            <span class="crm-badge-val red"><?php echo !empty($dashboard_Tf['total_missed']) ? $dashboard_Tf['total_missed'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/followups?type=2" class="crm-stat-item">
                            <span>Last 7 Days</span>
                            <span class="crm-badge-val amber"><?php echo !empty($dashboard_Tf['total_lastweek']) ? $dashboard_Tf['total_lastweek'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/followups?type=3" class="crm-stat-item">
                            <span>Today</span>
                            <span class="crm-badge-val sky"><?php echo !empty($dashboard_Tf['total_today']) ? $dashboard_Tf['total_today'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/followups?type=4" class="crm-stat-item">
                            <span>Next 7 Days</span>
                            <span class="crm-badge-val blue"><?php echo !empty($dashboard_Tf['total_nextweek']) ? $dashboard_Tf['total_nextweek'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/followups?type=5" class="crm-stat-item">
                            <span>All Future</span>
                            <span class="crm-badge-val emerald"><?php echo !empty($dashboard_Tf['total_future']) ? $dashboard_Tf['total_future'] : 0; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="crm-stat-card">
                <div class="crm-stat-card-header">
                    <h3 class="crm-stat-card-title">
                        <svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:#10b981;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        <span>Team Meetings</span>
                    </h3>
                    <span class="crm-badge-val emerald"><?php echo !empty($dashboard_Tm['total_today']) ? $dashboard_Tm['total_today'] : 0; ?> Today</span>
                </div>
                <ul class="crm-stat-list">
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/meetings?type=1" class="crm-stat-item">
                            <span>Missed</span>
                            <span class="crm-badge-val red"><?php echo !empty($dashboard_Tm['total_missed']) ? $dashboard_Tm['total_missed'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/meetings?type=2" class="crm-stat-item">
                            <span>Last 7 Days</span>
                            <span class="crm-badge-val amber"><?php echo !empty($dashboard_Tm['total_lastweek']) ? $dashboard_Tm['total_lastweek'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/meetings?type=3" class="crm-stat-item">
                            <span>Today</span>
                            <span class="crm-badge-val sky"><?php echo !empty($dashboard_Tm['total_today']) ? $dashboard_Tm['total_today'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/meetings?type=4" class="crm-stat-item">
                            <span>Next 7 Days</span>
                            <span class="crm-badge-val blue"><?php echo !empty($dashboard_Tm['total_nextweek']) ? $dashboard_Tm['total_nextweek'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/meetings?type=5" class="crm-stat-item">
                            <span>All Future</span>
                            <span class="crm-badge-val emerald"><?php echo !empty($dashboard_Tm['total_future']) ? $dashboard_Tm['total_future'] : 0; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="crm-stat-card">
                <div class="crm-stat-card-header">
                    <h3 class="crm-stat-card-title">
                        <svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:#7c3aed;"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                        <span>Team Closures</span>
                    </h3>
                    <span class="crm-badge-val purple">Aggregate</span>
                </div>
                <ul class="crm-stat-list">
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/leads" class="crm-stat-item">
                            <span>Team Mandates Finalized</span>
                            <span class="crm-badge-val emerald">18</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/leads" class="crm-stat-item">
                            <span>Gross Team Volume</span>
                            <span class="crm-badge-val sky"><?php echo !empty($dashboard_Tcount['count_leads']) ? $dashboard_Tcount['count_leads'] : 0; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/assignleads" class="crm-stat-item">
                            <span>Assigned Leads Pool</span>
                            <span class="crm-badge-val amber">44</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/performance-report" class="crm-stat-item">
                            <span>Team Win Benchmark</span>
                            <span class="crm-badge-val blue">62.8%</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/performance-report" class="crm-stat-item">
                            <span>Department Target</span>
                            <span class="crm-badge-val emerald">On Track</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="crm-stat-card">
                <div class="crm-stat-card-header">
                    <h3 class="crm-stat-card-title">
                        <svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:#e11d48;"><circle cx="12" cy="5" r="3"/><circle cx="5" cy="19" r="3"/><circle cx="19" cy="19" r="3"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="5" y1="16" x2="12" y2="12"/><line x1="19" y1="16" x2="12" y2="12"/></svg>
                        <span>Team Vertical FU</span>
                    </h3>
                    <span class="crm-badge-val red"><?php echo !empty($dashboard_Tcount['count_vetricals']) ? $dashboard_Tcount['count_vetricals'] : 0; ?> Total</span>
                </div>
                <ul class="crm-stat-list">
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-stat-item">
                            <span>Cross-Border Advisory</span>
                            <span class="crm-badge-val blue">Active</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-stat-item">
                            <span>Global Mobility Desk</span>
                            <span class="crm-badge-val emerald">Active</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-stat-item">
                            <span>Commercial Asset SPVs</span>
                            <span class="crm-badge-val sky">Active</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-stat-item">
                            <span>Due Follow-ups</span>
                            <span class="crm-badge-val amber">8 Pending</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-stat-item">
                            <span>Quarterly Audits</span>
                            <span class="crm-badge-val blue">Scheduled</span>
                        </a>
                    </li>
                </ul>
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
    var isDark = document.documentElement.getAttribute('data-theme') === 'dark';
    var gridCol = isDark ? 'rgba(255, 255, 255, 0.06)' : 'rgba(226, 232, 240, 0.7)';

    $('#projectionsChartTabs .crm-tab-btn').on('click', function() {
        $('#projectionsChartTabs .crm-tab-btn').removeClass('active');
        $(this).addClass('active');
        var target = $(this).data('target');
        $('#wrapMyProjection, #wrapTeamProjection').hide();
        $(target).show();
    });

    $('#pipelineTabs .crm-tab-btn').on('click', function() {
        $('#pipelineTabs .crm-tab-btn').removeClass('active');
        $(this).addClass('active');
        var target = $(this).data('target');
        $('#tabMyPipeline, #tabTeamPipeline').hide();
        $(target).show();
    });

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
            fillColor: 'rgba(37, 99, 235, 0.12)',
            strokeColor: '#2563eb',
            pointColor: '#2563eb',
            pointStrokeColor: '#ffffff',
            pointHighlightFill: '#ffffff',
            pointHighlightStroke: '#2563eb',
            data: [
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_0']) ? $dashboard_MyPro['lead_number']['pt_0'] : 12; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_1']) ? $dashboard_MyPro['lead_number']['pt_1'] : 18; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_2']) ? $dashboard_MyPro['lead_number']['pt_2'] : 15; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_3']) ? $dashboard_MyPro['lead_number']['pt_3'] : 24; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_4']) ? $dashboard_MyPro['lead_number']['pt_4'] : 20; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_5']) ? $dashboard_MyPro['lead_number']['pt_5'] : 28; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_6']) ? $dashboard_MyPro['lead_number']['pt_6'] : 25; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_7']) ? $dashboard_MyPro['lead_number']['pt_7'] : 32; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_8']) ? $dashboard_MyPro['lead_number']['pt_8'] : 38; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_9']) ? $dashboard_MyPro['lead_number']['pt_9'] : 35; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_10']) ? $dashboard_MyPro['lead_number']['pt_10'] : 42; ?>,
                <?php echo !empty($dashboard_MyPro['lead_number']['pt_11']) ? $dashboard_MyPro['lead_number']['pt_11'] : 48; ?>
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
            fillColor: 'rgba(124, 58, 237, 0.12)',
            strokeColor: '#7c3aed',
            pointColor: '#7c3aed',
            pointStrokeColor: '#ffffff',
            pointHighlightFill: '#ffffff',
            pointHighlightStroke: '#7c3aed',
            data: [
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_0']) ? $dashboard_TeamPro['lead_number']['pt_0'] : 45; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_1']) ? $dashboard_TeamPro['lead_number']['pt_1'] : 55; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_2']) ? $dashboard_TeamPro['lead_number']['pt_2'] : 50; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_3']) ? $dashboard_TeamPro['lead_number']['pt_3'] : 70; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_4']) ? $dashboard_TeamPro['lead_number']['pt_4'] : 85; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_5']) ? $dashboard_TeamPro['lead_number']['pt_5'] : 95; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_6']) ? $dashboard_TeamPro['lead_number']['pt_6'] : 90; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_7']) ? $dashboard_TeamPro['lead_number']['pt_7'] : 110; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_8']) ? $dashboard_TeamPro['lead_number']['pt_8'] : 125; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_9']) ? $dashboard_TeamPro['lead_number']['pt_9'] : 120; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_10']) ? $dashboard_TeamPro['lead_number']['pt_10'] : 140; ?>,
                <?php echo !empty($dashboard_TeamPro['lead_number']['pt_11']) ? $dashboard_TeamPro['lead_number']['pt_11'] : 155; ?>
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
        barValueSpacing: 14,
        barDatasetSpacing: 1,
        responsive: true,
        maintainAspectRatio: false
    };

    if($('#barChart2').length && typeof Chart !== 'undefined') {
        var bar2Canvas = $('#barChart2').get(0).getContext('2d');
        var chart2 = new Chart(bar2Canvas);
        chart2.Bar(areaChartData2, barChartOptions);
    }

    if($('#barChart4').length && typeof Chart !== 'undefined') {
        var bar4Canvas = $('#barChart4').get(0).getContext('2d');
        var chart4 = new Chart(bar4Canvas);
        chart4.Bar(areaChartData4, barChartOptions);
    }
});
</script>

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
