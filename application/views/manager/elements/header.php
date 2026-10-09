<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/dist/img/favicon.jpg" type="image/x-icon">
<link rel="icon" href="<?php echo base_url(); ?>assets/dist/img/favicon.jpg" type="image/jpeg">

<title><?php echo $info['title']; ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
<script>
(function() {
  var saved = localStorage.getItem('crm_theme');
  var pref = saved ? saved : (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
  document.documentElement.setAttribute('data-theme', pref);
})();
</script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/slimmenu.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.js"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/spacing.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/skin-yellow.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/x_grid.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/flat/blue.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/developer.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/multiselect/multiselect.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/crm-theme.css">

<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/table_export/css/tableexport.css">
<script src="<?php echo base_url(); ?>assets/dist/js/jquery-1.10.2.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/table_export/FileSaver.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/table_export/Blob.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/table_export/xls.core.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/table_export/js/tableexport.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.css">
<script src="<?php echo base_url(); ?>assets/bootstrap/js/jquery.validate.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-toggle.min.css">
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-toggle.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<aside class="crm-sidebar" id="crmSidebar">
  <div style="display:flex; align-items:center; justify-content:space-between; width:100%; border-bottom:1px solid var(--crm-sidebar-border); background-color:#060911;">
    <a href="<?php echo base_url(); ?>manager/dashboard" class="crm-sidebar-brand" style="border-bottom:none; flex:1;">
      <img src="<?php echo base_url(); ?>assets/dist/img/favicon.jpg" alt="Rolexto" style="height:32px; width:32px; border-radius:6px;">
      <div class="brand-text">
        <span class="brand-title">Rolexto CRM</span>
        <span class="brand-badge">Enterprise</span>
      </div>
    </a>
    <button type="button" class="crm-sidebar-close-btn hidden-md hidden-lg" id="crmSidebarClose" aria-label="Close Sidebar">&times;</button>
  </div>

  <div class="crm-sidebar-nav">
    <?php  
      $route1 = $this->uri->segment(2);
      $route2 = $this->uri->segment(3);
    ?>

    <div class="crm-nav-group-title">Overview</div>
    <ul class="crm-nav-list">
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/dashboard" class="crm-nav-link <?php if($route1=="dashboard" || empty($route1)){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="9" rx="1"/><rect x="14" y="3" width="7" height="5" rx="1"/><rect x="14" y="12" width="7" height="9" rx="1"/><rect x="3" y="16" width="7" height="5" rx="1"/></svg>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>

    <div class="crm-nav-group-title">Commercial &amp; Pipeline</div>
    <ul class="crm-nav-list">
      <li class="crm-nav-item has-sub <?php if($route1=="leads" && empty($route2)){ echo "open"; } ?>">
        <a href="<?php echo base_url(); ?>manager/leads" class="crm-nav-link <?php if($route1=="leads" && empty($route2)){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
          <span>My Leads</span>
          <svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <ul class="crm-subnav-list">
          <li><a href="<?php echo base_url(); ?>manager/leads" class="crm-subnav-link">All My Leads</a></li>
          <li><a href="<?php echo base_url(); ?>manager/leads/add" class="crm-subnav-link">+ Add New Lead</a></li>
        </ul>
      </li>
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/leads/followups" class="crm-nav-link <?php if($route1=="leads" && $route2=="followups"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><path d="M9 16l2 2 4-4"/></svg>
          <span>Follow-ups</span>
        </a>
      </li>
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/leads/meetings" class="crm-nav-link <?php if($route1=="leads" && $route2=="meetings"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          <span>Meetings</span>
        </a>
      </li>
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/performance-report/individual" class="crm-nav-link <?php if($route1=="performance-report" && $route2=="individual"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          <span>My Performance</span>
        </a>
      </li>
    </ul>

    <div class="crm-nav-group-title">Team Operations</div>
    <ul class="crm-nav-list">
      <li class="crm-nav-item has-sub <?php if($route1=="team" && $route2=="leads"){ echo "open"; } ?>">
        <a href="<?php echo base_url(); ?>manager/team/leads" class="crm-nav-link <?php if($route1=="team" && $route2=="leads"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
          <span>Team Leads</span>
          <svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <ul class="crm-subnav-list">
          <li><a href="<?php echo base_url(); ?>manager/team/leads" class="crm-subnav-link">All Team Leads</a></li>
          <li><a href="<?php echo base_url(); ?>manager/team/assignleads" class="crm-subnav-link">Assign Leads</a></li>
        </ul>
      </li>
      <li class="crm-nav-item has-sub <?php if($route1=="team" && ($route2=="members" || $route2=="chart")){ echo "open"; } ?>">
        <a href="<?php echo base_url(); ?>manager/team/members" class="crm-nav-link <?php if($route1=="team" && $route2=="members"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
          <span>Team Members</span>
          <svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <ul class="crm-subnav-list">
          <li><a href="<?php echo base_url(); ?>manager/team/members" class="crm-subnav-link">Member Directory</a></li>
          <li><a href="<?php echo base_url(); ?>manager/team/chart" class="crm-subnav-link">Hierarchy Chart</a></li>
        </ul>
      </li>
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/team/followups" class="crm-nav-link <?php if($route1=="team" && $route2=="followups"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <span>Team Follow-ups</span>
        </a>
      </li>
      <li class="crm-nav-item has-sub <?php if($route1=="team" && ($route2=="meetings" || $route2=="assignmeetings")){ echo "open"; } ?>">
        <a href="<?php echo base_url(); ?>manager/team/meetings" class="crm-nav-link <?php if($route1=="team" && $route2=="meetings"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          <span>Team Meetings</span>
          <svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <ul class="crm-subnav-list">
          <li><a href="<?php echo base_url(); ?>manager/team/meetings" class="crm-subnav-link">All Meetings</a></li>
          <li><a href="<?php echo base_url(); ?>manager/team/assignmeetings" class="crm-subnav-link">Assign Meetings</a></li>
        </ul>
      </li>
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/performance-report" class="crm-nav-link <?php if($route1=="performance-report" && empty($route2)){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
          <span>Department Report</span>
        </a>
      </li>
    </ul>

    <div class="crm-nav-group-title">Verticals Portfolio</div>
    <ul class="crm-nav-list">
      <li class="crm-nav-item has-sub <?php if($route1=="verticals"){ echo "open"; } ?>">
        <a href="<?php echo base_url(); ?>manager/verticals" class="crm-nav-link <?php if($route1=="verticals"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="9" y1="22" x2="9" y2="2"/><line x1="8" y1="6" x2="8.01" y2="6"/><line x1="16" y1="6" x2="16.01" y2="6"/><line x1="8" y1="10" x2="8.01" y2="10"/><line x1="16" y1="10" x2="16.01" y2="10"/><line x1="8" y1="14" x2="8.01" y2="14"/><line x1="16" y1="14" x2="16.01" y2="14"/><line x1="8" y1="18" x2="8.01" y2="18"/><line x1="16" y1="18" x2="16.01" y2="18"/></svg>
          <span>My Verticals</span>
          <svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <ul class="crm-subnav-list">
          <li><a href="<?php echo base_url(); ?>manager/verticals" class="crm-subnav-link">All Verticals</a></li>
          <li><a href="<?php echo base_url(); ?>manager/verticals/add" class="crm-subnav-link">+ Add Vertical</a></li>
        </ul>
      </li>
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/team/verticals" class="crm-nav-link <?php if($route1=="team" && $route2=="verticals"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><circle cx="12" cy="5" r="3"/><circle cx="5" cy="19" r="3"/><circle cx="19" cy="19" r="3"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="5" y1="16" x2="12" y2="12"/><line x1="19" y1="16" x2="12" y2="12"/></svg>
          <span>Team Verticals</span>
        </a>
      </li>
    </ul>

    <?php if($this->session->userdata('manager_role') == 1){ ?>
    <div class="crm-nav-group-title">Administration</div>
    <ul class="crm-nav-list">
      <li class="crm-nav-item has-sub <?php if($route1=="users"){ echo "open"; } ?>">
        <a href="<?php echo base_url(); ?>manager/users" class="crm-nav-link <?php if($route1=="users"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          <span>Users</span>
          <svg class="crm-svg-sm nav-arrow" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <ul class="crm-subnav-list">
          <li><a href="<?php echo base_url(); ?>manager/users" class="crm-subnav-link">All Users</a></li>
          <li><a href="<?php echo base_url(); ?>manager/users/add" class="crm-subnav-link">+ Add New User</a></li>
        </ul>
      </li>
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/roles" class="crm-nav-link <?php if($route1=="roles"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span>Roles &amp; Access</span>
        </a>
      </li>
      <li class="crm-nav-item">
        <a href="<?php echo base_url(); ?>manager/terms" class="crm-nav-link <?php if($route1=="terms"){ echo "active"; } ?>">
          <svg class="crm-svg nav-icon" viewBox="0 0 24 24"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
          <span>System Terms</span>
        </a>
      </li>
    </ul>
    <?php } ?>
  </div>

  <div class="crm-sidebar-footer">
    <a href="<?php echo base_url(); ?>manager/profile" class="crm-user-profile">
      <div class="crm-user-avatar">
        <?php 
          $u_name = $this->session->userdata('manager_name');
          echo !empty($u_name) ? strtoupper(substr($u_name, 0, 2)) : 'RA'; 
        ?>
      </div>
      <div class="crm-user-info">
        <span class="crm-user-name"><?php echo !empty($u_name) ? $u_name : 'Rolexto Admin'; ?></span>
        <span class="crm-user-role"><?php echo ($this->session->userdata('manager_role') == 1) ? 'Administrator' : 'Manager'; ?></span>
      </div>
    </a>
    <a href="<?php echo base_url(); ?>manager/logout" class="crm-logout-btn" title="Logout">
      <svg class="crm-svg" viewBox="0 0 24 24"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
    </a>
  </div>
</aside>
<div class="crm-sidebar-backdrop" id="crmSidebarBackdrop"></div>

<div class="crm-app-shell">
  <header class="crm-topbar">
    <div class="crm-topbar-left">
      <button type="button" class="crm-sidebar-toggle-btn" id="crmSidebarToggle" title="Toggle Navigation">
        <svg class="crm-svg" viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
      <div class="crm-breadcrumbs">
        <a href="<?php echo base_url(); ?>manager/dashboard">Workspace</a>
        <span>/</span>
        <span class="current"><?php echo !empty($info['title']) ? $info['title'] : 'Dashboard'; ?></span>
      </div>
      <div class="crm-topbar-search hidden-xs hidden-sm">
        <svg class="crm-svg-sm search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <input type="text" placeholder="Search leads, team, meetings...">
        <kbd>/</kbd>
      </div>
    </div>

    <div class="crm-topbar-right">
      <button type="button" class="crm-icon-btn hidden-xs" title="Notifications" aria-label="Notifications">
        <svg class="crm-svg-sm" viewBox="0 0 24 24"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
        <span class="badge-dot"></span>
      </button>

      <button type="button" class="crm-theme-toggle" id="crmThemeToggle" title="Switch Theme" aria-label="Switch Theme">
        <svg class="crm-svg sun-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
        <svg class="crm-svg moon-icon" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
      </button>

      <div class="crm-contact-pill hidden-xs">
        <a href="mailto:hr@rolextogroup.com">
          <svg class="crm-svg-sm" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          hr@rolextogroup.com
        </a>
        <span>&bull;</span>
        <a href="tel:+971585637737">
          <svg class="crm-svg-sm" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          +971 58 563 7737
        </a>
      </div>

      <a href="<?php echo base_url(); ?>manager/leads/add" class="crm-btn-primary">
        <svg class="crm-svg-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        <span>New Lead</span>
      </a>
    </div>
  </header>

  <main class="crm-main-content">
