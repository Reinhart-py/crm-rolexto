<?php require_once(APPPATH."views/manager/elements/header.php"); ?>

<div class="crm-main-content">
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
<div class="crm-ops-banner">
<div class="crm-ops-left">
<svg class="crm-svg star-icon" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
<span><strong>Team Celebration:</strong> You have <?php echo $dashboard_Tcount['count_today_birth']; ?> team birthday(s) today.</span>
</div>
<a href="<?php echo base_url(); ?>manager/team/members" class="crm-ops-btn">View Team</a>
</div>
<?php } ?>

<div class="crm-ops-banner">
<div class="crm-ops-left">
<svg class="crm-svg star-icon" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
<span><strong>Today's Operations:</strong> Active pipeline running across London, Dubai and Zurich desks.</span>
</div>
<a href="<?php echo base_url(); ?>manager/leads/followups" class="crm-ops-btn">Review Follow-ups</a>
</div>

<div class="crm-metric-strip">
<a href="<?php echo base_url(); ?>manager/leads" class="crm-metric-card">
<div class="crm-metric-header">
<span class="crm-metric-title">My Leads</span>
<div class="crm-metric-icon-wrap">
<svg class="crm-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
</div>
</div>
<div class="crm-metric-number"><?php echo !empty($dashboard_count['count_leads']) ? $dashboard_count['count_leads'] : 0; ?></div>
</a>

<a href="<?php echo base_url(); ?>manager/team/leads" class="crm-metric-card">
<div class="crm-metric-header">
<span class="crm-metric-title">Team Leads</span>
<div class="crm-metric-icon-wrap">
<svg class="crm-svg" viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
</div>
</div>
<div class="crm-metric-number"><?php echo !empty($dashboard_Tcount['count_leads']) ? $dashboard_Tcount['count_leads'] : 0; ?></div>
</a>

<a href="<?php echo base_url(); ?>manager/leads/followups?type=3" class="crm-metric-card">
<div class="crm-metric-header">
<span class="crm-metric-title">Today's Follow-ups</span>
<div class="crm-metric-icon-wrap">
<svg class="crm-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
</div>
</div>
<div class="crm-metric-number"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?></div>
</a>

<a href="<?php echo base_url(); ?>manager/leads/meetings?type=3" class="crm-metric-card">
<div class="crm-metric-header">
<span class="crm-metric-title">Today's Meetings</span>
<div class="crm-metric-icon-wrap">
<svg class="crm-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
</div>
</div>
<div class="crm-metric-number"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?></div>
</a>

<a href="<?php echo base_url(); ?>manager/team/members" class="crm-metric-card">
<div class="crm-metric-header">
<span class="crm-metric-title">Team Members</span>
<div class="crm-metric-icon-wrap">
<svg class="crm-svg" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
</div>
</div>
<div class="crm-metric-number"><?php echo !empty($dashboard_Tcount['count_user']) ? $dashboard_Tcount['count_user'] : 0; ?></div>
</a>

<a href="<?php echo base_url(); ?>manager/verticals" class="crm-metric-card">
<div class="crm-metric-header">
<span class="crm-metric-title">Verticals</span>
<div class="crm-metric-icon-wrap">
<svg class="crm-svg" viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="9" y1="22" x2="9" y2="2"/></svg>
</div>
</div>
<div class="crm-metric-number"><?php echo !empty($dashboard_count['count_vetricals']) ? $dashboard_count['count_vetricals'] : 0; ?></div>
</a>
</div>

<div class="row">
<div class="col-lg-6 col-md-12">
<div class="crm-panel-card">
<div class="crm-panel-header">
<h2>
<svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-primary);"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
<span>Pipeline Stages</span>
</h2>
<div class="crm-tab-buttons" id="pipelineTabs">
<button type="button" class="crm-tab-btn active" data-target="#tabMyPipeline">My Leads</button>
<button type="button" class="crm-tab-btn" data-target="#tabTeamPipeline">Team Leads</button>
</div>
</div>
<div class="crm-panel-body" style="padding:0;">
<div class="crm-tab-pane" id="tabMyPipeline">
<table class="crm-pipeline-table">
<thead>
<tr>
<th>Stage</th>
<th style="text-align:right;">Count</th>
<th style="text-align:right;">Action</th>
</tr>
</thead>
<tbody>
<?php if(!empty($dashboard_lead) && is_array($dashboard_lead)){ foreach($dashboard_lead as $li){ ?>
<tr onclick="window.location='<?php echo base_url(); ?>manager/leads?d1=&d2=&status%5B%5D=<?php echo $li['status_id']; ?>'" style="cursor:pointer;">
<td>
<span style="font-weight:600; color:var(--crm-text-main); font-size:13px;"><?php echo htmlspecialchars($li['status']); ?></span>
</td>
<td style="text-align:right;">
<span class="crm-count-badge"><?php echo !empty($li['lead_count']) ? $li['lead_count'] : 0; ?></span>
</td>
<td style="text-align:right;">
<a href="<?php echo base_url(); ?>manager/leads?d1=&d2=&status%5B%5D=<?php echo $li['status_id']; ?>" class="crm-btn-sm" onclick="event.stopPropagation();">
<span>View</span>
<svg class="crm-svg-sm" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
</a>
</td>
</tr>
<?php } } else { ?>
<tr>
<td colspan="3" style="text-align:center; padding:28px; color:var(--crm-text-muted);">No active leads found in pipeline.</td>
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
<?php if(!empty($dashboard_lead_team) && is_array($dashboard_lead_team)){ foreach($dashboard_lead_team as $li){ ?>
<tr onclick="window.location='<?php echo base_url(); ?>manager/team/leads?d1=&d2=&status%5B%5D=<?php echo $li['status_id']; ?>'" style="cursor:pointer;">
<td>
<span style="font-weight:600; color:var(--crm-text-main); font-size:13px;"><?php echo htmlspecialchars($li['status']); ?></span>
</td>
<td style="text-align:right;">
<span class="crm-count-badge"><?php echo !empty($li['lead_count']) ? $li['lead_count'] : 0; ?></span>
</td>
<td style="text-align:right;">
<a href="<?php echo base_url(); ?>manager/team/leads?d1=&d2=&status%5B%5D=<?php echo $li['status_id']; ?>" class="crm-btn-sm" onclick="event.stopPropagation();">
<span>View</span>
<svg class="crm-svg-sm" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
</a>
</td>
</tr>
<?php } } else { ?>
<tr>
<td colspan="3" style="text-align:center; padding:28px; color:var(--crm-text-muted);">No team leads recorded yet.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="col-lg-6 col-md-12">
<div class="crm-panel-card">
<div class="crm-panel-header">
<h2>
<svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-primary);"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
<span>Monthly Trajectory</span>
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
</div>
</div>
</div>
</div>

<div class="crm-section-header">
<h2 class="crm-section-title">
<svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-primary);"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
<span>My Stats</span>
</h2>
</div>

<div class="crm-stats-grid">
<div class="crm-stat-card">
<div class="crm-stat-card-header">
<h3 class="crm-stat-card-title">
<span class="crm-stat-indicator"></span>
<span>My Follow-ups</span>
</h3>
<span class="crm-badge-val urgent"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?> Today</span>
</div>
<ul class="crm-stat-list">
<li><a href="<?php echo base_url(); ?>manager/leads/followups?type=1" class="crm-stat-item"><span>Missed</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_f['total_missed']) ? $dashboard_f['total_missed'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/followups?type=2" class="crm-stat-item"><span>Last 7 Days</span><span class="crm-badge-val"><?php echo !empty($dashboard_f['total_lastweek']) ? $dashboard_f['total_lastweek'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/followups?type=3" class="crm-stat-item"><span>Today</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/followups?type=4" class="crm-stat-item"><span>Next 7 Days</span><span class="crm-badge-val"><?php echo !empty($dashboard_f['total_nextweek']) ? $dashboard_f['total_nextweek'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/followups?type=5" class="crm-stat-item"><span>All Future</span><span class="crm-badge-val"><?php echo !empty($dashboard_f['total_future']) ? $dashboard_f['total_future'] : 0; ?></span></a></li>
</ul>
</div>

<div class="crm-stat-card">
<div class="crm-stat-card-header">
<h3 class="crm-stat-card-title">
<span class="crm-stat-indicator"></span>
<span>My Meetings</span>
</h3>
<span class="crm-badge-val urgent"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?> Today</span>
</div>
<ul class="crm-stat-list">
<li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=1" class="crm-stat-item"><span>Missed</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_m['total_missed']) ? $dashboard_m['total_missed'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=2" class="crm-stat-item"><span>Last 7 Days</span><span class="crm-badge-val"><?php echo !empty($dashboard_m['total_lastweek']) ? $dashboard_m['total_lastweek'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=3" class="crm-stat-item"><span>Today</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=4" class="crm-stat-item"><span>Next 7 Days</span><span class="crm-badge-val"><?php echo !empty($dashboard_m['total_nextweek']) ? $dashboard_m['total_nextweek'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/meetings?type=5" class="crm-stat-item"><span>All Future</span><span class="crm-badge-val"><?php echo !empty($dashboard_m['total_future']) ? $dashboard_m['total_future'] : 0; ?></span></a></li>
</ul>
</div>

<div class="crm-stat-card">
<div class="crm-stat-card-header">
<h3 class="crm-stat-card-title">
<span class="crm-stat-indicator"></span>
<span>My Closures</span>
</h3>
<span class="crm-badge-val">Active</span>
</div>
<ul class="crm-stat-list">
<li class="crm-stat-item"><span>Active In Pipeline</span><span class="crm-badge-val"><?php echo !empty($dashboard_count['count_leads']) ? $dashboard_count['count_leads'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Assigned Verticals</span><span class="crm-badge-val"><?php echo !empty($dashboard_count['count_vetricals']) ? $dashboard_count['count_vetricals'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Actionable Follow-ups</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Individual Performance</span><a href="<?php echo base_url(); ?>manager/performance-report/individual" class="crm-btn-sm">View</a></li>
<li class="crm-stat-item"><span>All My Leads</span><a href="<?php echo base_url(); ?>manager/leads" class="crm-btn-sm">Browse</a></li>
</ul>
</div>

<div class="crm-stat-card">
<div class="crm-stat-card-header">
<h3 class="crm-stat-card-title">
<span class="crm-stat-indicator"></span>
<span>My Vertical FU</span>
</h3>
<span class="crm-badge-val"><?php echo !empty($dashboard_count['count_vetricals']) ? $dashboard_count['count_vetricals'] : 0; ?> Total</span>
</div>
<ul class="crm-stat-list">
<li class="crm-stat-item"><span>Active Practice Verticals</span><span class="crm-badge-val"><?php echo !empty($dashboard_count['count_vetricals']) ? $dashboard_count['count_vetricals'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Follow-ups Scheduled</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_f['total_today']) ? $dashboard_f['total_today'] : 0; ?> Due</span></li>
<li class="crm-stat-item"><span>Consultations Today</span><span class="crm-badge-val"><?php echo !empty($dashboard_m['total_today']) ? $dashboard_m['total_today'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Vertical Directory</span><a href="<?php echo base_url(); ?>manager/verticals" class="crm-btn-sm">Manage</a></li>
<li class="crm-stat-item"><span>Add New Vertical</span><a href="<?php echo base_url(); ?>manager/verticals/add" class="crm-btn-sm">Create</a></li>
</ul>
</div>
</div>

<div class="crm-section-header">
<h2 class="crm-section-title">
<svg class="crm-svg" viewBox="0 0 24 24" style="color:var(--crm-primary);"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
<span>Team Stats</span>
</h2>
</div>

<div class="crm-stats-grid">
<div class="crm-stat-card">
<div class="crm-stat-card-header">
<h3 class="crm-stat-card-title">
<span class="crm-stat-indicator"></span>
<span>Team Follow-ups</span>
</h3>
<span class="crm-badge-val urgent"><?php echo !empty($dashboard_Tf['total_today']) ? $dashboard_Tf['total_today'] : 0; ?> Today</span>
</div>
<ul class="crm-stat-list">
<li><a href="<?php echo base_url(); ?>manager/team/followups?type=1" class="crm-stat-item"><span>Missed</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_Tf['total_missed']) ? $dashboard_Tf['total_missed'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/team/followups?type=2" class="crm-stat-item"><span>Last 7 Days</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tf['total_lastweek']) ? $dashboard_Tf['total_lastweek'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/team/followups?type=3" class="crm-stat-item"><span>Today</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_Tf['total_today']) ? $dashboard_Tf['total_today'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/team/followups?type=4" class="crm-stat-item"><span>Next 7 Days</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tf['total_nextweek']) ? $dashboard_Tf['total_nextweek'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/team/followups?type=5" class="crm-stat-item"><span>All Future</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tf['total_future']) ? $dashboard_Tf['total_future'] : 0; ?></span></a></li>
</ul>
</div>

<div class="crm-stat-card">
<div class="crm-stat-card-header">
<h3 class="crm-stat-card-title">
<span class="crm-stat-indicator"></span>
<span>Team Meetings</span>
</h3>
<span class="crm-badge-val urgent"><?php echo !empty($dashboard_Tm['total_today']) ? $dashboard_Tm['total_today'] : 0; ?> Today</span>
</div>
<ul class="crm-stat-list">
<li><a href="<?php echo base_url(); ?>manager/team/meetings?type=1" class="crm-stat-item"><span>Missed</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_Tm['total_missed']) ? $dashboard_Tm['total_missed'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/team/meetings?type=2" class="crm-stat-item"><span>Last 7 Days</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tm['total_lastweek']) ? $dashboard_Tm['total_lastweek'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/team/meetings?type=3" class="crm-stat-item"><span>Today</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_Tm['total_today']) ? $dashboard_Tm['total_today'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/team/meetings?type=4" class="crm-stat-item"><span>Next 7 Days</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tm['total_nextweek']) ? $dashboard_Tm['total_nextweek'] : 0; ?></span></a></li>
<li><a href="<?php echo base_url(); ?>manager/team/meetings?type=5" class="crm-stat-item"><span>All Future</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tm['total_future']) ? $dashboard_Tm['total_future'] : 0; ?></span></a></li>
</ul>
</div>

<div class="crm-stat-card">
<div class="crm-stat-card-header">
<h3 class="crm-stat-card-title">
<span class="crm-stat-indicator"></span>
<span>Team Closures</span>
</h3>
<span class="crm-badge-val">Aggregate</span>
</div>
<ul class="crm-stat-list">
<li class="crm-stat-item"><span>Team Leads Active</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tcount['count_leads']) ? $dashboard_Tcount['count_leads'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Team Members Operating</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tcount['count_user']) ? $dashboard_Tcount['count_user'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Team Follow-ups Today</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_Tf['total_today']) ? $dashboard_Tf['total_today'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Department Performance</span><a href="<?php echo base_url(); ?>manager/performance-report" class="crm-btn-sm">View</a></li>
<li class="crm-stat-item"><span>Team Mandates</span><a href="<?php echo base_url(); ?>manager/team/leads" class="crm-btn-sm">Browse</a></li>
</ul>
</div>

<div class="crm-stat-card">
<div class="crm-stat-card-header">
<h3 class="crm-stat-card-title">
<span class="crm-stat-indicator"></span>
<span>Team Vertical FU</span>
</h3>
<span class="crm-badge-val"><?php echo !empty($dashboard_Tcount['count_vetricals']) ? $dashboard_Tcount['count_vetricals'] : 0; ?> Total</span>
</div>
<ul class="crm-stat-list">
<li class="crm-stat-item"><span>Total Verticals In Scope</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tcount['count_vetricals']) ? $dashboard_Tcount['count_vetricals'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Team Follow-ups Today</span><span class="crm-badge-val urgent"><?php echo !empty($dashboard_Tf['total_today']) ? $dashboard_Tf['total_today'] : 0; ?> Due</span></li>
<li class="crm-stat-item"><span>Team Meetings Scheduled</span><span class="crm-badge-val"><?php echo !empty($dashboard_Tm['total_today']) ? $dashboard_Tm['total_today'] : 0; ?></span></li>
<li class="crm-stat-item"><span>Manage Verticals</span><a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-btn-sm">Manage</a></li>
<li class="crm-stat-item"><span>Team Directory</span><a href="<?php echo base_url(); ?>manager/team/members" class="crm-btn-sm">View</a></li>
</ul>
</div>
</div>

</div>
</div>

<script>
$(function () {
    var myMonths = [
        '<?php echo !empty($dashboard_MyPro['month_name'][0]) ? $dashboard_MyPro['month_name'][0] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][1]) ? $dashboard_MyPro['month_name'][1] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][2]) ? $dashboard_MyPro['month_name'][2] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][3]) ? $dashboard_MyPro['month_name'][3] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][4]) ? $dashboard_MyPro['month_name'][4] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][5]) ? $dashboard_MyPro['month_name'][5] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][6]) ? $dashboard_MyPro['month_name'][6] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][7]) ? $dashboard_MyPro['month_name'][7] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][8]) ? $dashboard_MyPro['month_name'][8] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][9]) ? $dashboard_MyPro['month_name'][9] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][10]) ? $dashboard_MyPro['month_name'][10] : ""; ?>',
        '<?php echo !empty($dashboard_MyPro['month_name'][11]) ? $dashboard_MyPro['month_name'][11] : ""; ?>'
    ];
    var myData = [
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_0']) ? $dashboard_MyPro['lead_number']['pt_0'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_1']) ? $dashboard_MyPro['lead_number']['pt_1'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_2']) ? $dashboard_MyPro['lead_number']['pt_2'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_3']) ? $dashboard_MyPro['lead_number']['pt_3'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_4']) ? $dashboard_MyPro['lead_number']['pt_4'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_5']) ? $dashboard_MyPro['lead_number']['pt_5'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_6']) ? $dashboard_MyPro['lead_number']['pt_6'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_7']) ? $dashboard_MyPro['lead_number']['pt_7'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_8']) ? $dashboard_MyPro['lead_number']['pt_8'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_9']) ? $dashboard_MyPro['lead_number']['pt_9'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_10']) ? $dashboard_MyPro['lead_number']['pt_10'] : 0; ?>,
        <?php echo !empty($dashboard_MyPro['lead_number']['pt_11']) ? $dashboard_MyPro['lead_number']['pt_11'] : 0; ?>
    ];

    var teamMonths = [
        '<?php echo !empty($dashboard_TeamPro['month_name'][0]) ? $dashboard_TeamPro['month_name'][0] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][1]) ? $dashboard_TeamPro['month_name'][1] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][2]) ? $dashboard_TeamPro['month_name'][2] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][3]) ? $dashboard_TeamPro['month_name'][3] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][4]) ? $dashboard_TeamPro['month_name'][4] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][5]) ? $dashboard_TeamPro['month_name'][5] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][6]) ? $dashboard_TeamPro['month_name'][6] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][7]) ? $dashboard_TeamPro['month_name'][7] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][8]) ? $dashboard_TeamPro['month_name'][8] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][9]) ? $dashboard_TeamPro['month_name'][9] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][10]) ? $dashboard_TeamPro['month_name'][10] : ""; ?>',
        '<?php echo !empty($dashboard_TeamPro['month_name'][11]) ? $dashboard_TeamPro['month_name'][11] : ""; ?>'
    ];
    var teamData = [
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_0']) ? $dashboard_TeamPro['lead_number']['pt_0'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_1']) ? $dashboard_TeamPro['lead_number']['pt_1'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_2']) ? $dashboard_TeamPro['lead_number']['pt_2'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_3']) ? $dashboard_TeamPro['lead_number']['pt_3'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_4']) ? $dashboard_TeamPro['lead_number']['pt_4'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_5']) ? $dashboard_TeamPro['lead_number']['pt_5'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_6']) ? $dashboard_TeamPro['lead_number']['pt_6'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_7']) ? $dashboard_TeamPro['lead_number']['pt_7'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_8']) ? $dashboard_TeamPro['lead_number']['pt_8'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_9']) ? $dashboard_TeamPro['lead_number']['pt_9'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_10']) ? $dashboard_TeamPro['lead_number']['pt_10'] : 0; ?>,
        <?php echo !empty($dashboard_TeamPro['lead_number']['pt_11']) ? $dashboard_TeamPro['lead_number']['pt_11'] : 0; ?>
    ];

    var barOptions = {
        scaleBeginAtZero: true,
        scaleShowGridLines: true,
        scaleGridLineColor: 'rgba(226, 232, 240, 0.6)',
        scaleGridLineWidth: 1,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: false,
        barShowStroke: false,
        barValueSpacing: 14,
        barDatasetSpacing: 1,
        responsive: true,
        maintainAspectRatio: false
    };

    var b2Canvas = document.getElementById('barChart2');
    if (b2Canvas) {
        new Chart(b2Canvas.getContext('2d')).Bar({
            labels: myMonths,
            datasets: [{
                label: 'My Pipeline',
                fillColor: '#10b981',
                strokeColor: '#059669',
                pointColor: '#10b981',
                data: myData
            }]
        }, barOptions);
    }

    var b4Canvas = document.getElementById('barChart4');
    var b4Rendered = false;
    function initBar4() {
        if (b4Rendered || !b4Canvas) return;
        b4Rendered = true;
        new Chart(b4Canvas.getContext('2d')).Bar({
            labels: teamMonths,
            datasets: [{
                label: 'Team Volume',
                fillColor: '#10b981',
                strokeColor: '#059669',
                pointColor: '#10b981',
                data: teamData
            }]
        }, barOptions);
    }

    $('#pipelineTabs .crm-tab-btn').on('click', function () {
        $('#pipelineTabs .crm-tab-btn').removeClass('active');
        $(this).addClass('active');
        var target = $(this).data('target');
        $('#tabMyPipeline, #tabTeamPipeline').hide();
        $(target).show();
    });

    $('#projectionsChartTabs .crm-tab-btn').on('click', function () {
        $('#projectionsChartTabs .crm-tab-btn').removeClass('active');
        $(this).addClass('active');
        var target = $(this).data('target');
        $('#wrapMyProjection, #wrapTeamProjection').hide();
        $(target).show();
        if (target === '#wrapTeamProjection') {
            setTimeout(initBar4, 20);
        }
    });
});
</script>

<?php require_once(APPPATH."views/manager/elements/footer.php"); ?>
