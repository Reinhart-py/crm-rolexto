<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="icon" type="image/jpeg" href="<?php echo base_url(); ?>assets/dist/img/favicon.jpg">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico">
<title><?php echo !empty($info['title']) ? $info['title'] : "Rolexto CRM - Enterprise Workspace"; ?></title>
<script>
(function() {
    var saved = localStorage.getItem('crm_theme');
    var pref = saved ? saved : (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    document.documentElement.setAttribute('data-theme', pref);
})();
</script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/developer.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/crm-theme.css">
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<aside class="crm-sidebar" id="crmSidebar">
<a href="<?php echo base_url(); ?>manager/dashboard" class="crm-sidebar-brand">
<img src="<?php echo base_url(); ?>assets/dist/img/favicon.jpg" alt="Rolexto" style="height:32px; width:32px; border-radius:6px; object-fit:cover;">
<div class="brand-text">
<span class="brand-title">Rolexto CRM</span>
</div>
</a>
<div class="crm-sidebar-nav">
<?php
$r1 = $this->uri->segment(2);
$r2 = $this->uri->segment(3);
?>
<ul class="crm-nav-list">
<li class="crm-nav-item">
<a href="<?php echo base_url(); ?>manager/dashboard" class="crm-nav-link <?php if($r1=='dashboard' || empty($r1)){ echo 'active'; } ?>">
<svg class="crm-svg" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="9" rx="1"/><rect x="14" y="3" width="7" height="5" rx="1"/><rect x="14" y="12" width="7" height="9" rx="1"/><rect x="3" y="16" width="7" height="5" rx="1"/></svg>
<span>Dashboard</span>
</a>
</li>
</ul>
<ul class="crm-nav-list">
<li class="crm-nav-item has-sub <?php if($r1=='leads'){ echo 'open'; } ?>">
<a href="javascript:void(0)" class="crm-nav-link">
<svg class="crm-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
<span>Leads</span>
<svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
</a>
<ul class="crm-subnav-list">
<li><a href="<?php echo base_url(); ?>manager/leads" class="crm-subnav-link <?php if($r1=='leads' && $r2==''){ echo 'active'; } ?>">All Leads</a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/add" class="crm-subnav-link <?php if($r1=='leads' && $r2=='add'){ echo 'active'; } ?>">Add Lead</a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/followups" class="crm-subnav-link <?php if($r1=='leads' && $r2=='followups'){ echo 'active'; } ?>">Follow-ups</a></li>
<li><a href="<?php echo base_url(); ?>manager/leads/meetings" class="crm-subnav-link <?php if($r1=='leads' && $r2=='meetings'){ echo 'active'; } ?>">Meetings</a></li>
<li><a href="<?php echo base_url(); ?>manager/performance-report/individual" class="crm-subnav-link <?php if($r1=='performance-report' && $r2=='individual'){ echo 'active'; } ?>">Performance Report</a></li>
</ul>
</li>
</ul>
<ul class="crm-nav-list">
<li class="crm-nav-item has-sub <?php if($r1=='verticals' || ($r1=='team' && $r2=='verticals')){ echo 'open'; } ?>">
<a href="javascript:void(0)" class="crm-nav-link">
<svg class="crm-svg" viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="9" y1="22" x2="9" y2="2"/></svg>
<span>Verticals</span>
<svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
</a>
<ul class="crm-subnav-list">
<li><a href="<?php echo base_url(); ?>manager/verticals" class="crm-subnav-link <?php if($r1=='verticals' && $r2==''){ echo 'active'; } ?>">My Verticals</a></li>
<li><a href="<?php echo base_url(); ?>manager/verticals/add" class="crm-subnav-link <?php if($r1=='verticals' && $r2=='add'){ echo 'active'; } ?>">Add Vertical</a></li>
<li><a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-subnav-link <?php if($r1=='team' && $r2=='verticals'){ echo 'active'; } ?>">Team Verticals</a></li>
</ul>
</li>
</ul>
<ul class="crm-nav-list">
<li class="crm-nav-item has-sub <?php if($r1=='team'){ echo 'open'; } ?>">
<a href="javascript:void(0)" class="crm-nav-link">
<svg class="crm-svg" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
<span>Team</span>
<svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
</a>
<ul class="crm-subnav-list">
<li><a href="<?php echo base_url(); ?>manager/team/members" class="crm-subnav-link <?php if($r1=='team' && $r2=='members'){ echo 'active'; } ?>">Members</a></li>
<li><a href="<?php echo base_url(); ?>manager/team/chart" class="crm-subnav-link <?php if($r1=='team' && $r2=='chart'){ echo 'active'; } ?>">Chart</a></li>
<li><a href="<?php echo base_url(); ?>manager/team/leads" class="crm-subnav-link <?php if($r1=='team' && $r2=='leads'){ echo 'active'; } ?>">Leads</a></li>
<li><a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-subnav-link <?php if($r1=='team' && $r2=='verticals'){ echo 'active'; } ?>">Verticals</a></li>
<li><a href="<?php echo base_url(); ?>manager/team/followups" class="crm-subnav-link <?php if($r1=='team' && $r2=='followups'){ echo 'active'; } ?>">Follow-ups</a></li>
<li><a href="<?php echo base_url(); ?>manager/team/meetings" class="crm-subnav-link <?php if($r1=='team' && $r2=='meetings'){ echo 'active'; } ?>">Meetings</a></li>
<li><a href="<?php echo base_url(); ?>manager/team/assignmeetings" class="crm-subnav-link <?php if($r1=='team' && $r2=='assignmeetings'){ echo 'active'; } ?>">Assigned Meetings</a></li>
<li><a href="<?php echo base_url(); ?>manager/team/assignleads" class="crm-subnav-link <?php if($r1=='team' && $r2=='assignleads'){ echo 'active'; } ?>">Assigned Leads</a></li>
<li><a href="<?php echo base_url(); ?>manager/performance-report" class="crm-subnav-link <?php if($r1=='performance-report' && $r2==''){ echo 'active'; } ?>">Performance Report</a></li>
</ul>
</li>
</ul>
<ul class="crm-nav-list">
<li class="crm-nav-item has-sub <?php if($r1=='users'){ echo 'open'; } ?>">
<a href="javascript:void(0)" class="crm-nav-link">
<svg class="crm-svg" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
<span>Users</span>
<svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
</a>
<ul class="crm-subnav-list">
<li><a href="<?php echo base_url(); ?>manager/users" class="crm-subnav-link <?php if($r1=='users' && $r2==''){ echo 'active'; } ?>">View Users</a></li>
<li><a href="<?php echo base_url(); ?>manager/users/add" class="crm-subnav-link <?php if($r1=='users' && $r2=='add'){ echo 'active'; } ?>">Add User</a></li>
</ul>
</li>
</ul>
<ul class="crm-nav-list">
<li class="crm-nav-item has-sub <?php if($r1=='roles' || $r1=='terms'){ echo 'open'; } ?>">
<a href="javascript:void(0)" class="crm-nav-link">
<svg class="crm-svg" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
<span>Settings</span>
<svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
</a>
<ul class="crm-subnav-list">
<li><a href="<?php echo base_url(); ?>manager/roles" class="crm-subnav-link <?php if($r1=='roles' && $r2==''){ echo 'active'; } ?>">Roles</a></li>
<li><a href="<?php echo base_url(); ?>manager/terms" class="crm-subnav-link <?php if($r1=='terms' && $r2==''){ echo 'active'; } ?>">Category</a></li>
</ul>
</li>
</ul>
<ul class="crm-nav-list">
<li class="crm-nav-item has-sub <?php if($r1=='profile' || $r1=='password' || ($r1=='setting' && $r2=='editlogo')){ echo 'open'; } ?>">
<a href="javascript:void(0)" class="crm-nav-link">
<svg class="crm-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
<span>Profile</span>
<svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
</a>
<ul class="crm-subnav-list">
<li><a href="<?php echo base_url(); ?>manager/profile" class="crm-subnav-link <?php if($r1=='profile'){ echo 'active'; } ?>">View Profile</a></li>
<li><a href="<?php echo base_url(); ?>manager/password" class="crm-subnav-link <?php if($r1=='password'){ echo 'active'; } ?>">Change Password</a></li>
</ul>
</li>
</ul>
</div>
<div class="crm-sidebar-footer">
<a href="<?php echo base_url(); ?>manager/profile" class="crm-user-profile">
<div class="crm-user-avatar">RA</div>
<div class="crm-user-info">
<span class="crm-user-name"><?php echo !empty($this->session->userdata['manager_name']) ? $this->session->userdata['manager_name'] : 'Rolexto Admin'; ?></span>
<span class="crm-user-role">Administrator</span>
</div>
</a>
<a href="<?php echo base_url(); ?>manager/logout" class="crm-logout-btn" title="Logout">
<svg class="crm-svg" viewBox="0 0 24 24"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
</a>
</div>
</aside>
<div class="crm-mobile-overlay" id="crmMobileOverlay"></div>
<div class="crm-app-shell">
<header class="crm-topbar">
<div class="crm-topbar-left">
<button type="button" class="crm-sidebar-toggle-btn" id="crmSidebarToggle" title="Toggle Navigation">
<svg class="crm-svg" viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
</button>
<div class="crm-breadcrumbs">
<a href="<?php echo base_url(); ?>manager/dashboard">Workspace</a>
<span>/</span>
<span class="current"><?php echo !empty($info['page_heading']) ? $info['page_heading'] : (!empty($info['title']) ? $info['title'] : 'Dashboard'); ?></span>
</div>
</div>
<div class="crm-topbar-right">
<div class="crm-search-box hidden-xs">
<svg class="crm-svg-sm" viewBox="0 0 24 24" style="color:var(--crm-text-muted);"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
<input type="text" placeholder="Search leads, team...">
</div>
<button type="button" class="crm-palette-toggle-btn" id="crmPaletteToggle" title="Switch Theme (Green / Red)">
<span class="crm-palette-indicator" id="crmPaletteIndicator"></span>
<span class="crm-palette-text" id="crmPaletteText">Green</span>
</button>
<button type="button" class="crm-theme-toggle" id="crmThemeToggle" title="Switch Theme">
<svg class="crm-svg sun-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
<svg class="crm-svg moon-icon" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
</button>
<a href="<?php echo base_url(); ?>manager/leads/add" class="crm-btn-primary">
<svg class="crm-svg-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
<span>New Lead</span>
</a>
</div>
</header>
<script>
$(function() {
    var curPalette = localStorage.getItem('crm_palette') || 'green';
    document.documentElement.setAttribute('data-crm-palette', curPalette);
    if ($('#crmPaletteText').length) {
        $('#crmPaletteText').text(curPalette === 'red' ? 'Red' : 'Green');
    }
    $('#crmPaletteToggle').on('click', function(e) {
        e.preventDefault();
        var cur = document.documentElement.getAttribute('data-crm-palette') || 'green';
        var next = cur === 'red' ? 'green' : 'red';
        document.documentElement.setAttribute('data-crm-palette', next);
        localStorage.setItem('crm_palette', next);
        $('#crmPaletteText').text(next === 'red' ? 'Red' : 'Green');
    });

    $('#crmSidebarToggle').on('click', function(e) {
        e.preventDefault();
        if ($(window).width() < 992) {
            $('#crmSidebar').toggleClass('crm-sidebar-open');
            $('#crmMobileOverlay').toggleClass('active');
        } else {
            $('#crmSidebar').toggleClass('crm-sidebar-collapsed');
            $('.crm-app-shell').toggleClass('crm-app-shell-expanded');
        }
    });
    $('#crmMobileOverlay').on('click', function() {
        $('#crmSidebar').removeClass('crm-sidebar-open');
        $('#crmMobileOverlay').removeClass('active');
    });
    $('.crm-nav-item.has-sub > .crm-nav-link').on('click', function(e) {
        e.preventDefault();
        $(this).parent('.crm-nav-item').toggleClass('open');
    });
    $('#crmThemeToggle').on('click', function(e) {
        e.preventDefault();
        var cur = document.documentElement.getAttribute('data-theme') || 'light';
        var next = cur === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', next);
        localStorage.setItem('crm_theme', next);
    });
});
</script>
