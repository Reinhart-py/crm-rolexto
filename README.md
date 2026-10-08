<div align="center">

# Rolexto CRM

<p><strong>A modern, high-performance Customer Relationship Management platform engineered for enterprise pipeline tracking, vertical management, and sales executive performance analytics.</strong></p>

[![Version](https://img.shields.io/badge/version-2.5.0-blue.svg?style=flat-square)](https://github.com/Reinhart-py/crm-rolexto)
[![PHP](https://img.shields.io/badge/php-7.4%20%7C%208.x-purple.svg?style=flat-square)](https://www.php.net/)
[![Framework](https://img.shields.io/badge/framework-CodeIgniter-red.svg?style=flat-square)](https://codeigniter.com/)
[![Database](https://img.shields.io/badge/database-MySQL%20%2F%20MariaDB-00758F.svg?style=flat-square)](https://www.mysql.com/)
[![Design](https://img.shields.io/badge/ui-ERPNext%20Inspired-059669.svg?style=flat-square)](https://github.com/frappe/erpnext)
[![License](https://img.shields.io/badge/license-Proprietary-lightgrey.svg?style=flat-square)](LICENSE)

</div>

---

`Rolexto CRM` is a unified enterprise management system built to streamline commercial pipelines, empower sales teams, track multi-tier verticals, and deliver visual real-time analytics. Featuring an ERPNext-inspired modern interface, it combines clean aesthetic cards, soft pastel indicators, and high-performance charts with rock-solid PHP backend architecture.

# Contents

- [Why Rolexto CRM?](#why-rolexto-crm)
- [Key Features](#key-features)
- [System Requirements](#system-requirements)
- [Quickstart: Local Frontend Preview](#quickstart-local-frontend-preview)
- [Installation & Full Environment Setup](#installation--full-environment-setup)
  - [Method 1: Local Apache / XAMPP / WAMP](#method-1-local-apache--xampp--wamp)
  - [Method 2: PHP Built-in Server](#method-2-php-built-in-server)
  - [Method 3: Production Deployment (cPanel / Apache)](#method-3-production-deployment-cpanel--apache)
- [Configuration Guide](#configuration-guide)
  - [1. Base URL](#1-base-url)
  - [2. Database Connection](#2-database-connection)
  - [3. Application Routing](#3-application-routing)
- [Repository Structure](#repository-structure)
- [UI & UX Highlights](#ui--ux-highlights)
- [Troubleshooting & FAQ](#troubleshooting--faq)
- [Contributing & Maintenance](#contributing--maintenance)

---

### Why Rolexto CRM?

Traditional CRM portals often suffer from dense, dated user interfaces, cluttered navigation, and sluggish dashboards. Rolexto CRM was refined to provide:

- **Executive-Grade Clarity**: Clean, minimalist UI design inspired by Frappe / ERPNext with rounded edges, soft shadows, and high-contrast typography.
- **Instant Pipeline Visibility**: Real-time KPI summary for individual managers and overarching sales teams.
- **Zero Distractions**: Focused strictly on commercial operations, lead conversions, follow-up scheduling, and meeting logistics without developer jargon or extraneous noise.
- **Robust MVC Foundation**: Proven CodeIgniter architecture delivering rapid page loads, low server resource consumption, and predictable maintenance.

---

### Key Features

- **Executive KPI Dashboard**: 6 top-tier performance widgets showing My Leads, My Verticals, Team Members, Team Leads, Team Verticals, and Birthday alerts.
- **Pipeline Stage Tracking**: Dynamic status counts breaking down leads by stage (Database, Expected, In Discussion, Proposal Sent, Won/Closed).
- **Projections & Comparative Graphs**: Interactive Chart.js monthly and seasonal volume bars for team and individual forecasts.
- **Activity & Logistics Radar**: Donut indicators breaking down scheduled follow-ups and meetings across historical windows (Missed, Last 7 Days, Today, Next 7 Days, Future).
- **Multi-Level Permissions**: Role-based access control segregating Admin, Manager, and Field Sales Agent privileges.
- **Document & Lead Export**: Integrated XLS, CSV, and tabular data export capabilities.

---

### System Requirements

| Component | Requirement |
|---|---|
| **PHP** | PHP 7.4 or PHP 8.0+ |
| **PHP Extensions** | `mysqli`, `mbstring`, `gd`, `curl`, `json` |
| **Database** | MySQL 5.7+ or MariaDB 10.3+ |
| **Web Server** | Apache 2.4+ (with `mod_rewrite` enabled) or Nginx |
| **Browser Support** | Modern Chromium (Chrome, Edge, Brave), Firefox, Safari |

---

### Quickstart: Local Frontend Preview

To view the redesigned frontend interface immediately on your local machine without setting up PHP or a MySQL database:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Reinhart-py/crm-rolexto.git
   cd crm-rolexto
   ```

2. **Launch the local preview server**:
   Using Python (pre-installed on most systems):
   ```bash
   python -m http.server 8080
   ```
   Or using Node.js:
   ```bash
   npx serve -l 8080
   ```

3. **Open the preview in your browser**:
   Navigate to:
   ```text
   http://localhost:8080/preview.html
   ```

---

### Installation & Full Environment Setup

#### Method 1: Local Apache / XAMPP / WAMP

1. **Copy to Web Root**:
   Clone or move this project into your server's root folder:
   - **XAMPP (Windows)**: `C:\xampp\htdocs\crm`
   - **WAMP (Windows)**: `C:\wamp64\www\crm`
   - **Linux / macOS**: `/var/www/html/crm`

2. **Create the MySQL Database**:
   Open phpMyAdmin (`http://localhost/phpmyadmin`) or your MySQL client and create a new database:
   ```sql
   CREATE DATABASE crm_rolexto CHARACTER SET utf8 COLLATE utf8_general_ci;
   ```
   Import your database schema dump (`.sql`) into `crm_rolexto`.

3. **Configure Settings**:
   - Update `application/config/config.php`:
     ```php
     $config['base_url'] = 'http://localhost/crm/';
     ```
   - Update `application/config/database.php`:
     ```php
     $db['default']['hostname'] = 'localhost';
     $db['default']['username'] = 'root';
     $db['default']['password'] = '';
     $db['default']['database'] = 'crm_rolexto';
     ```

4. **Access the CRM**:
   Visit `http://localhost/crm/manager/login` in your web browser.

#### Method 2: PHP Built-in Server

If you have PHP installed with MySQL running locally:

```bash
php -S localhost:8000 index.php
```

Ensure `application/config/config.php` has:
```php
$config['base_url'] = 'http://localhost:8000/';
```

#### Method 3: Production Deployment (cPanel / Apache)

1. Upload all files into `public_html` (or the respective subdomain folder like `crm.rolextogroup.com`).
2. Create the MySQL database and user via cPanel Database Wizard.
3. Import your database schema via phpMyAdmin.
4. Verify `.htaccess` exists in the root directory to handle URL rewriting cleanly without `index.php`.
5. Update `application/config/database.php` with the production database credentials.

---

### Configuration Guide

#### 1. Base URL
Defined in `application/config/config.php`:
```php
$config['base_url'] = 'https://crm.rolextogroup.com/';
```
> Ensure this matches your exact domain, including protocol (`http://` vs `https://`) and trailing slash.

#### 2. Database Connection
Defined in `application/config/database.php`:
```php
$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'your_database_user';
$db['default']['password'] = 'your_database_password';
$db['default']['database'] = 'your_database_name';
$db['default']['dbdriver'] = 'mysqli';
```

#### 3. Application Routing
Configured in `application/config/routes.php`:
- `default_controller`: `ci_admin`
- `manager/dashboard`: `ci_admin/dashboard`
- `manager/login`: `ci_admin/login`
- `manager/leads`: `ci_admin_leads/index`
- `manager/users`: `ci_admin_user/index`

---

### Repository Structure

```text
crm-rolexto/
├── application/
│   ├── config/              # Application, database, routes configurations
│   ├── controllers/         # CodeIgniter MVC controllers
│   ├── models/              # Database models & analytical queries
│   └── views/
│       └── manager/         # Dashboard, lead management, and module views
│           ├── elements/    # Reusable header, navigation, and footer templates
│           └── ...
├── assets/
│   ├── bootstrap/           # Grid system and base responsive styles
│   ├── dist/
│   │   ├── css/
│   │   │   ├── crm-theme.css# Modern ERPNext-inspired theme & tokens
│   │   │   └── AdminLTE.css # Layout base framework
│   │   └── img/             # Brand logos, icons, and favicon assets
│   └── plugins/             # Chart.js, jQuery, Select2, DataTables
├── system/                  # Core CodeIgniter framework engine
├── .gitignore               # Ignored cache, logs, and backup files
├── .htaccess                # Apache rewrite rules
├── favicon.ico              # Root browser favicon
├── index.php                # Application front controller
├── preview.html             # Standalone local frontend preview
└── README.md                # Project documentation
```

---

### UI & UX Highlights

- **Palette**: Subtle slate foundation (`#f8fafc`), pure white card surfaces (`#ffffff`), and deep corporate navy navigation (`#0f172a`).
- **Typography**: Google Font **Inter** for sharp, readable numbers and metric labels.
- **Cards**: Smooth `14px` border radius, refined hairline borders (`#e2e8f0`), and soft hover lift animations.
- **Charts**: Doughnut charts for scheduled interactions with semantic color tokens:
  - 🔴 **Missed**: `#ef4444`
  - 🟠 **Last 7 Days**: `#f59e0b`
  - 🌐 **Today**: `#38bdf8`
  - 🔵 **Next 7 Days**: `#3b82f6`
  - 🟢 **All Future**: `#10b981`

---

### Troubleshooting & FAQ

<details>
<summary><strong>Q: Why does the dashboard show 404 on internal links?</strong></summary>
<br>
Ensure Apache's <code>mod_rewrite</code> is enabled and that <code>.htaccess</code> is present in your root directory with <code>RewriteEngine On</code>. Also check that <code>$config['index_page']</code> in <code>application/config/config.php</code> matches your server setup.
</details>

<details>
<summary><strong>Q: Database connection error appears upon login?</strong></summary>
<br>
Verify the credentials in <code>application/config/database.php</code>. If hosting on cPanel, make sure the database user has been granted <strong>ALL PRIVILEGES</strong> on the target database.
</details>

<details>
<summary><strong>Q: How do I test the frontend without installing PHP?</strong></summary>
<br>
Run <code>python -m http.server 8080</code> and open <code>http://localhost:8080/preview.html</code>. It renders the full layout, CSS tokens, and Chart.js animations without requiring any backend services.
</details>

---

### Contributing & Maintenance

1. Branch off `main` for feature work: `git checkout -b feature/module-name`
2. Follow strict code hygiene: preserve clean markup and maintain documentation in `README.md`.
3. Test layout responsiveness across mobile and desktop breakpoints.
4. Push and submit a Pull Request to `origin/main`.

---

<div align="center">
  <sub>Rolexto Group &copy; 2026. All rights reserved.</sub>
</div>
