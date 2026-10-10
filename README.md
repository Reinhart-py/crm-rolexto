<div align="center">

# Rolexto CRM

**High-Performance Enterprise Sales & Team Management Workspace**

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.0+-777bb4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![CodeIgniter](https://img.shields.io/badge/Framework-CodeIgniter-ee4326?style=flat-square&logo=codeigniter&logoColor=white)](https://codeigniter.com/)
[![Database](https://img.shields.io/badge/Database-MySQL%20%2F%20MariaDB-4479a1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Interface](https://img.shields.io/badge/UI-Dual%20Palette%20%7C%20Responsive-10b981?style=flat-square)](https://github.com/Reinhart-py/crm-rolexto)
[![License](https://img.shields.io/badge/License-Proprietary-blue?style=flat-square)](LICENSE)

*A full-featured CRM platform built for high-velocity sales pipelines, team performance tracking, lead management, and hierarchical organizational governance.*

[Features](#features) • [Quickstart](#quickstart) • [Installation](#installation) • [Configuration](#configuration) • [Theme & Palettes](#theme--palettes) • [Credentials](#default-credentials) • [FAQ](#troubleshooting--faq)

</div>

---

## Table of Contents

- [Overview](#overview)
- [Key Features](#features)
- [Quickstart: Frontend Live Preview](#quickstart)
- [Full Installation Guide](#installation)
  - [Prerequisites](#prerequisites)
  - [Apache / XAMPP / WAMP](#1-apache--xampp--wamp)
  - [PHP Built-in Server](#2-php-built-in-server)
  - [Production Deployment](#3-production-deployment-cpanel--vps)
- [Configuration](#configuration)
  - [Base URL](#base-url-configuration)
  - [Database Credentials](#database-configuration)
  - [Application Routes](#application-routes)
- [Theme & Palette Architecture](#theme--palettes)
- [Default Credentials](#default-credentials)
- [Repository Structure](#repository-structure)
- [Troubleshooting & FAQ](#troubleshooting--faq)

---

## Overview

**Rolexto CRM** delivers an enterprise-grade administrative workspace designed to manage complex lead pipelines, multi-tier team hierarchies, scheduled follow-ups, and closure metrics. Built on a battle-tested MVC architecture with an overhauled, zero-dependency modern front-end design system, it provides instant data access across both desktop workstations and mobile devices.

---

## Features

- **Comprehensive Lead Pipeline**: Create, filter, assign, import, export, and track leads across custom categories, sources, and progression stages.
- **Hierarchical Team Structure**: Multi-level organizational tree supporting manager-subordinate delegation, performance reviews, and role-based permissions.
- **Actionable Follow-ups & Meetings**: Dedicated scheduling workflows for missed, daily, and upcoming follow-ups and client meetings.
- **Closure & Vertical Tracking**: Live database-driven analytics for monthly, yearly, and all-time revenue closures and vertical performance.
- **Dual Pure Theme Palettes**:
  - **Rolex Emerald Green**: Pure `#10b981` emerald accent with obsidian black and crisp slate surfaces.
  - **Rolex Crimson Red**: Pure `#dc2626` crimson accent with obsidian black and crisp slate surfaces.
  - *No mixed colors* — switch instantly via the admin header toggle with persistent local storage.
- **Independent Display Modes**: Every user can toggle between Dark Mode and Light Mode independently.
- **Compact Executive Cards**: Streamlined doughnut metrics and 2-column stat badges designed for optimal information density without vertical clutter.
- **Mobile & Android Optimized**: Off-canvas sliding drawer navigation, touch-scrolling data tables, and adaptive responsive layouts.

---

## Quickstart

To run the interactive standalone interface locally without configuring PHP or MySQL:

```bash
# 1. Clone the repository
git clone https://github.com/Reinhart-py/crm-rolexto.git
cd crm-rolexto

# 2. Start the local server
python -m http.server 8080

# 3. Open in your browser
# Navigate to: http://localhost:8080/preview.html
```

---

## Installation

### Prerequisites

| Component | Minimum Requirement | Recommended |
|---|---|---|
| **PHP** | 7.4+ | 8.0 / 8.1 / 8.2 |
| **PHP Extensions** | `mysqli`, `mbstring`, `gd`, `curl`, `json` | All enabled |
| **Database** | MySQL 5.7+ or MariaDB 10.3+ | MySQL 8.0+ |
| **Web Server** | Apache 2.4+ (`mod_rewrite` enabled) | Apache or Nginx |

### 1. Apache / XAMPP / WAMP

1. Move the repository folder into your web server's document root:
   - **XAMPP (Windows)**: `C:\xampp\htdocs\crm`
   - **WAMP (Windows)**: `C:\wamp64\www\crm`
   - **Linux**: `/var/www/html/crm`

2. Create a new MySQL database:
   ```sql
   CREATE DATABASE crm_rolexto CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

3. Import your database dump (`.sql`) into `crm_rolexto`.

4. Update your configuration in `application/config/config.php` and `application/config/database.php`.

5. Navigate to `http://localhost/crm/manager/login` in your browser.

### 2. PHP Built-in Server

For rapid development with an active MySQL instance:

```bash
php -S localhost:8000 index.php
```

Ensure `application/config/config.php` has:
```php
$config['base_url'] = 'http://localhost:8000/';
```

### 3. Production Deployment (cPanel / VPS)

1. Upload the repository contents to your target web directory (`public_html` or subdomain root).
2. Ensure `.htaccess` is present in the root folder with rewrite rules active.
3. Import the database dump through phpMyAdmin or the MySQL command-line utility.
4. Set production credentials in `application/config/database.php`.
5. Set the canonical HTTPS domain in `application/config/config.php`.

---

## Configuration

### Base URL Configuration
File: `application/config/config.php`
```php
$config['base_url'] = 'https://crm.rolextogroup.com/';
```

### Database Configuration
File: `application/config/database.php`
```php
$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'your_database_user';
$db['default']['password'] = 'your_database_password';
$db['default']['database'] = 'crm_rolexto';
$db['default']['dbdriver'] = 'mysqli';
```

### Application Routes
File: `application/config/routes.php`
- `manager/login`: Authentication portal
- `manager/dashboard`: Executive KPI workspace
- `manager/leads`: Lead management directory
- `manager/team`: Organizational chart and team administration
- `manager/verticals`: Vertical operational monitoring
- `manager/roles`: Role and permission matrix

---

## Theme & Palettes

The UI is built with CSS custom properties configured in `assets/dist/css/crm-theme.css`.

| Palette | Token Attribute | Accent Color | Active Hover | Surface |
|---|---|---|---|---|
| **Emerald Green** | `[data-crm-palette="green"]` | `#10b981` | `#059669` | `#0b0f19` (Dark) / `#ffffff` (Light) |
| **Crimson Red** | `[data-crm-palette="red"]` | `#dc2626` | `#b91c1c` | `#0b0f19` (Dark) / `#ffffff` (Light) |

- **Admin Palette Switcher**: Toggle between Green and Red themes using `#crmPaletteToggle` in the top bar.
- **Display Mode Switcher**: Toggle between Dark Mode and Light Mode using `#crmThemeToggle` in the top bar.

---

## Default Credentials

For local testing and administration:

| Role | Username | Password | Access Level |
|---|---|---|---|
| **Super Admin** | `jules` | `jules123` | Level 1 (Full Access) |
| **Administrator** | `admin` | `admin123` | Level 1 (Full Access) |

---

## Repository Structure

```text
crm-rolexto/
├── application/
│   ├── config/              # Application, database, and route configs
│   ├── controllers/         # CodeIgniter MVC controllers
│   ├── models/              # Database models and analytical queries
│   └── views/
│       └── manager/         # Dashboard, lead management, and subviews
│           ├── elements/    # Reusable header, navigation, and footer templates
│           └── ...
├── assets/
│   ├── bootstrap/           # Base responsive grid framework
│   ├── dist/
│   │   ├── css/
│   │   │   ├── crm-theme.css# Modern enterprise design system tokens
│   │   │   └── AdminLTE.css # Layout base framework
│   │   └── img/             # Brand logos, icons, and favicon assets
│   └── plugins/             # Chart.js, jQuery, Select2, DataTables
├── system/                  # Core CodeIgniter framework engine
├── .htaccess                # Apache URL rewrite configuration
├── favicon.ico              # Root favicon
├── index.php                # Application front controller
├── preview.html             # Interactive frontend preview
└── README.md                # Project documentation
```

---

## Troubleshooting & FAQ

<details>
<summary><strong>Q: Why does the dashboard return 404 when clicking internal links?</strong></summary>
<br>
Ensure Apache's <code>mod_rewrite</code> module is enabled and that <code>.htaccess</code> is present in your web root with <code>RewriteEngine On</code>. Also confirm that <code>$config['index_page']</code> in <code>application/config/config.php</code> is empty or properly configured.
</details>

<details>
<summary><strong>Q: Database connection error appears upon login?</strong></summary>
<br>
Verify your credentials in <code>application/config/database.php</code>. If hosting on cPanel, ensure the database user has been granted <strong>ALL PRIVILEGES</strong> on the target database.
</details>

<details>
<summary><strong>Q: How can I preview the updated dashboard without a database?</strong></summary>
<br>
Run <code>python -m http.server 8080</code> in the project root directory and navigate to <code>http://localhost:8080/preview.html</code>.
</details>

---

<div align="center">
  <sub>Rolexto Group &copy; 2026. All rights reserved.</sub>
</div>
