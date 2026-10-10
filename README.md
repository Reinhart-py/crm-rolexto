# Rolexto CRM

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.0+-777bb4.svg?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![Framework](https://img.shields.io/badge/Framework-CodeIgniter-ee4326.svg?style=flat-square&logo=codeigniter&logoColor=white)](https://codeigniter.com/)
[![Database](https://img.shields.io/badge/Database-MySQL%20%2F%20MariaDB-4479a1.svg?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![UI Theme](https://img.shields.io/badge/UI-Rolex%20Green%20%7C%20Rolex%20Red-10b981.svg?style=flat-square)](https://github.com/Reinhart-py/crm-rolexto)
[![Responsive](https://img.shields.io/badge/Mobile-Android%20%26%20iOS%20Ready-blue.svg?style=flat-square)](https://github.com/Reinhart-py/crm-rolexto)
[![License](https://img.shields.io/badge/License-Proprietary-darkgreen.svg?style=flat-square)](LICENSE)

`Rolexto CRM` is a high-performance, enterprise-grade sales pipeline and team management workspace. It provides end-to-end lead lifecycle management, hierarchical organizational trees, scheduled follow-ups, closure analytics, and custom administrative governance with pure theme customization.

# Contents

- [Why?](#why)
- [Features](#features)
- [Installation](#installation)
  - [Method 1: Local Live Frontend Preview](#method-1-local-live-frontend-preview)
  - [Method 2: Full Stack (XAMPP / WAMP / LAMP)](#method-2-full-stack-xampp--wamp--lamp)
  - [Method 3: PHP Built-in Server](#method-3-php-built-in-server)
  - [Method 4: Production (cPanel / Apache)](#method-4-production-cpanel--apache)
- [Dependencies & Requirements](#dependencies--requirements)
- [Configuration](#configuration)
  - [Base URL](#base-url)
  - [Database Credentials](#database-credentials)
  - [Routing Map](#routing-map)
- [Theme & Palettes](#theme--palettes)
  - [Dual Theme System](#dual-theme-system)
  - [Display Mode Switcher](#display-mode-switcher)
- [Default Credentials](#default-credentials)
- [Repository Structure](#repository-structure)
- [Troubleshooting & FAQ](#troubleshooting--faq)

### Why?

Managing enterprise sales and organizational hierarchies requires a system that:

- Tracks leads across granular stages, sources, and categories without losing legacy parameters.
- Models deep organizational charts with drill-down reporting from team leaders to direct contributors.
- Visualizes activity streams (follow-ups, meetings, closures, verticals) in compact, high-contrast dashboards.
- Gives administrators total control over brand aesthetics with pure, isolated color themes (Rolex Emerald Green and Rolex Crimson Red) with zero hybrid color mixing.
- Operates flawlessly across desktop monitors and Android/mobile touchscreens with adaptive off-canvas navigation.

`Rolexto CRM` checks all of those boxes.

### Features

---

- **Lead Pipeline**: Complete CRUD workflows, status filtering, category grouping, bulk import/export, and team assignment.
- **Hierarchical Team Management**: Multi-level organizational drill-down, subordinate relationship mapping, and performance reviews.
- **Scheduled Interactions**: Distinct tracking for missed, weekly, daily, and upcoming follow-ups and meetings.
- **Real-Time Closure Analytics**: Live MySQL-backed monthly, yearly, and all-time revenue closures and vertical performance.
- **Pure Dual Palettes**:
  - **Rolex Emerald Green (`#10b981`)**: Polished emerald green accents with deep obsidian dark or crisp slate surfaces.
  - **Rolex Crimson Red (`#dc2626`)**: Bold ruby crimson accents with deep obsidian dark or crisp slate surfaces.
  - *Zero color mixing*: Switch dynamically via the topbar toggle with automatic `localStorage` persistence.
- **Independent Display Modes**: Every user can toggle between Dark Mode and Light Mode independently without affecting system palette rules.
- **Compact Executive Cards**: Streamlined `110px` doughnut charts paired with modern 2-column key-value pill grids.
- **Mobile & Android Optimized**: Touch-scrollable data tables, responsive grids, and an off-canvas drawer navigation.

### Installation

---

> **Note**
> You can preview the entire interface immediately using the standalone local server without configuring PHP or MySQL.

#### Method 1: Local Live Frontend Preview

Run the standalone preview server directly from the root repository directory:

```bash
$ git clone https://github.com/Reinhart-py/crm-rolexto.git
$ cd crm-rolexto
$ python -m http.server 8080
```

Open your browser and navigate to:
```text
http://localhost:8080/preview.html
```

#### Method 2: Full Stack (XAMPP / WAMP / LAMP)

1. Clone or copy the project into your web server document root:
   - **XAMPP (Windows)**: `C:\xampp\htdocs\crm`
   - **WAMP (Windows)**: `C:\wamp64\www\crm`
   - **Linux**: `/var/www/html/crm`

2. Create a new MySQL database:
   ```sql
   CREATE DATABASE crm_rolexto CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

3. Import your database dump (`.sql`) into `crm_rolexto`.

4. Configure your base URL and database connection (see [Configuration](#configuration)).

5. Navigate to:
   ```text
   http://localhost/crm/manager/login
   ```

#### Method 3: PHP Built-in Server

For rapid backend development with PHP CLI and a running MySQL instance:

```bash
$ cd crm-rolexto
$ php -S localhost:8000 index.php
```

Ensure `application/config/config.php` has `$config['base_url'] = 'http://localhost:8000/';`.

#### Method 4: Production (cPanel / Apache)

1. Upload repository files into your target web root (`public_html` or subdomain directory).
2. Ensure `.htaccess` is present in the root folder with `RewriteEngine On`.
3. Create the database and user via cPanel MySQL Database Wizard with `ALL PRIVILEGES`.
4. Import the database schema via phpMyAdmin.
5. Set production credentials in `application/config/database.php` and production URL in `application/config/config.php`.

### Dependencies & Requirements

---

- **PHP**: 7.4 or 8.0+
- **PHP Extensions**: `mysqli`, `mbstring`, `gd`, `curl`, `json`
- **Database**: MySQL 5.7+ or MariaDB 10.3+
- **Web Server**: Apache 2.4+ (with `mod_rewrite` enabled) or Nginx
- **Browsers**: Modern Chromium (Chrome, Edge, Brave), Firefox, Safari (desktop & mobile)

### Configuration

---

#### Base URL

File: `application/config/config.php`
```php
$config['base_url'] = 'https://crm.rolextogroup.com/';
```

#### Database Credentials

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

#### Routing Map

File: `application/config/routes.php`
- `manager/login`: Authentication portal
- `manager/dashboard`: Executive KPI workspace
- `manager/leads`: Lead directory and filter views
- `manager/team`: Hierarchy charts and member records
- `manager/verticals`: Vertical operational monitoring
- `manager/roles`: Role and permission management
- `manager/users`: System user management

### Theme & Palettes

---

The styling system is driven by CSS custom variables in `assets/dist/css/crm-theme.css`.

| Theme Palette | HTML Attribute | Accent Token | Hover Token | Background (Dark / Light) |
|---|---|---|---|---|
| **Rolex Emerald Green** | `data-crm-palette="green"` | `#10b981` | `#059669` | `#0b0f19` / `#ffffff` |
| **Rolex Crimson Red** | `data-crm-palette="red"` | `#dc2626` | `#b91c1c` | `#0b0f19` / `#ffffff` |

#### Dual Theme System
Switch dynamically between Rolex Emerald Green and Rolex Crimson Red using the `#crmPaletteToggle` pill button in the topbar. The active palette updates all primary action buttons, active navigation markers, focus borders, and chart fills with zero color mixing.

#### Display Mode Switcher
Click the `#crmThemeToggle` (Sun / Moon) button in the topbar to switch between Dark Mode and Light Mode. Every user can customize their display mode independently with persistent local storage.

### Default Credentials

---

For initial testing and local administration:

| Role | Username | Password | Access Level |
|---|---|---|---|
| **Super Admin** | `jules` | `jules123` | Level 1 (Full Access) |
| **Administrator** | `admin` | `admin123` | Level 1 (Full Access) |

### Repository Structure

---

```shell
crm-rolexto/
├── application/
│   ├── config/              # App, database, and route configurations
│   ├── controllers/         # CodeIgniter MVC controllers
│   ├── models/              # Database analytical models
│   └── views/
│       └── manager/         # Dashboard, lead, and team view templates
│           ├── elements/    # Header, navigation, and footer templates
│           └── ...
├── assets/
│   ├── bootstrap/           # Base responsive grid framework
│   ├── dist/
│   │   ├── css/
│   │   │   ├── crm-theme.css# Modern enterprise design system tokens
│   │   │   └── AdminLTE.css # Layout base framework
│   │   └── img/             # Brand assets, logos, and favicon
│   └── plugins/             # Chart.js, jQuery, Select2, DataTables
├── system/                  # Core CodeIgniter framework engine
├── .htaccess                # Apache rewrite rules
├── favicon.ico              # Root favicon
├── index.php                # Application entrypoint
├── preview.html             # Standalone local frontend preview
└── README.md                # Project documentation
```

### Troubleshooting & FAQ

---

<details>
<summary><strong>Q: Why does clicking internal links result in a 404 Not Found error?</strong></summary>
<br>
Confirm that Apache's <code>mod_rewrite</code> is enabled and that <code>.htaccess</code> is present in your web root. Check that <code>$config['index_page']</code> in <code>application/config/config.php</code> matches your server setup.
</details>

<details>
<summary><strong>Q: Database connection error occurs when submitting login?</strong></summary>
<br>
Verify the credentials in <code>application/config/database.php</code>. If hosting on cPanel or a remote MySQL server, ensure the database user has been granted <strong>ALL PRIVILEGES</strong> on the target database.
</details>

<details>
<summary><strong>Q: How do I test the frontend without installing PHP?</strong></summary>
<br>
Run <code>python -m http.server 8080</code> in the root directory and open <code>http://localhost:8080/preview.html</code>. It renders the full layout, CSS tokens, view navigation, and Chart.js graphics without backend services.
</details>

---

<div align="center">
  <sub>Rolexto Group &copy; 2026. All rights reserved.</sub>
</div>
