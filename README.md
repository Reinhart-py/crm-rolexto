# Rolexto CRM

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.0+-777bb4.svg?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![Framework](https://img.shields.io/badge/Framework-CodeIgniter-ee4326.svg?style=flat-square&logo=codeigniter&logoColor=white)](https://codeigniter.com/)
[![Database](https://img.shields.io/badge/Database-MySQL%20%2F%20MariaDB-4479a1.svg?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![UI Theme](https://img.shields.io/badge/UI-Rolex%20Green%20%7C%20Rolex%20Red-10b981.svg?style=flat-square)](https://github.com/Reinhart-py/crm-rolexto)
[![Responsive](https://img.shields.io/badge/Mobile-Android%20%26%20iOS%20Ready-blue.svg?style=flat-square)](https://github.com/Reinhart-py/crm-rolexto)
[![License](https://img.shields.io/badge/License-Proprietary-darkgreen.svg?style=flat-square)](LICENSE)

`Rolexto CRM` is a high-performance, enterprise-grade sales pipeline, customer relationship, and team governance workspace. Built with an isolated dual luxury theme system (Rolex Emerald Green & Rolex Crimson Red), it provides end-to-end lead lifecycle management, multi-level organizational trees, scheduled interaction tracking, closure analytics, and cross-platform responsive controls.

---

# Contents

- [Why?](#why)
- [Features](#features)
- [Deployment & Hosting Guide](#deployment--hosting-guide)
  - [1. Cloudflare Pages (Instant Global Edge)](#1-cloudflare-pages-instant-global-edge)
  - [2. Netlify (Automated Static & SPA)](#2-netlify-automated-static--spa)
  - [3. Vercel (Edge Deployment)](#3-vercel-edge-deployment)
  - [4. Termux on Android (Local Mobile Hosting)](#4-termux-on-android-local-mobile-hosting)
  - [5. cPanel & Traditional Shared Hosting](#5-cpanel--traditional-shared-hosting)
  - [6. Cloud VPS / Dedicated Server (Ubuntu, Debian, Nginx, Apache)](#6-cloud-vps--dedicated-server-ubuntu-debian-nginx-apache)
  - [7. Docker & Container Platforms (Render, Railway, Fly.io)](#7-docker--container-platforms-render-railway-flyio)
  - [8. Local Desktop Stacks (XAMPP, WAMP, Laragon, PHP CLI)](#8-local-desktop-stacks-xampp-wamp-laragon-php-cli)
- [Theme & Palettes](#theme--palettes)
  - [Dual Theme System](#dual-theme-system)
  - [Dynamic Logo Switching](#dynamic-logo-switching)
  - [Reactive Chart Recoloring](#reactive-chart-recoloring)
  - [Harmonized Activity Cards](#harmonized-activity-cards)
- [Configuration](#configuration)
  - [Base URL](#base-url)
  - [Database Credentials](#database-credentials)
  - [Routing Map](#routing-map)
- [Default Credentials](#default-credentials)
- [Repository Structure](#repository-structure)
- [Troubleshooting & FAQ](#troubleshooting--faq)

---

### Why?

Managing enterprise sales and organizational hierarchies requires a system that:

- Tracks leads across granular stages, sources, and categories without losing legacy parameters.
- Models deep organizational charts with drill-down reporting from top leadership to direct contributors.
- Visualizes activity streams (follow-ups, meetings, closures, verticals) in compact, high-contrast dashboards.
- Gives administrators total control over brand aesthetics with pure, isolated color themes (Rolex Emerald Green and Rolex Crimson Red) with zero hybrid color mixing.
- Operates flawlessly across desktop monitors and Android/mobile touchscreens with adaptive off-canvas navigation.
- Runs everywhere: on serverless edge networks, traditional web servers, enterprise cloud VPS, and even locally on Android hardware via Termux.

`Rolexto CRM` checks all of those boxes.

---

### Features

- **Lead Pipeline**: Complete CRUD workflows, status filtering, category grouping, bulk import/export, and team assignment.
- **Hierarchical Team Management**: Multi-level organizational drill-down, subordinate relationship mapping, and performance reviews.
- **Scheduled Interactions**: Distinct tracking for missed, weekly, daily, and upcoming follow-ups and meetings.
- **Real-Time Closure Analytics**: Live MySQL-backed monthly, yearly, and all-time revenue closures and vertical performance.
- **Four Direct Palettes**:
  - **Green (`#10b981`)**: Polished emerald green accents with deep obsidian dark or crisp slate surfaces.
  - **Red (`#dc2626`)**: Bold ruby crimson accents with deep obsidian dark or crisp slate surfaces.
  - **Blue (`#2563eb`)**: Royal sapphire blue accents with deep obsidian dark or crisp slate surfaces.
  - **Black (`#ffffff`/`#000000`)**: Pure luxury monochrome black and white palette.
  - *Zero color mixing*: Switch dynamically via the topbar toggle or direct Theme settings with automatic `localStorage` persistence.
- **Dynamic Theme Branding**: Auto-swaps high-resolution brand logos (`green-dark.png`, `red-dark.png`, `blue-dark.png`, and `black-dark.png`) in real time.
- **Reactive Chart Engine**: Charts instantly recolor to Green, Red, Blue, or Black upon toggling the theme palette.
- **Harmonized Activity Cards**: Monochromatic tonal progress tracks and clean executive badges eliminate rainbow template clutter.
- **Independent Display Modes**: Toggle between Dark Mode and Light Mode independently without affecting system palette rules.
- **Mobile & Android Optimized**: Touch-scrollable data tables, responsive grids, and an off-canvas drawer navigation.

---

### Deployment & Hosting Guide

Rolexto CRM supports both **instant static/SPA edge hosting** (for the modern interactive preview workspace) and **full-stack PHP/MySQL production hosting**. Choose your preferred platform below:

#### 1. Cloudflare Pages (Instant Global Edge)

Deploy the fast, interactive interface globally with free SSL, zero cold starts, and Cloudflare CDN caching:

##### Option A: Git Integration (Dashboard)
1. Push your repository to GitHub or GitLab.
2. In the [Cloudflare Dashboard](https://dash.cloudflare.com/), navigate to **Compute (Workers) > Pages > Connect to Git**.
3. Select the `crm-rolexto` repository.
4. Configure Build settings:
   - **Framework preset**: `None`
   - **Build command**: *(leave blank)*
   - **Build output directory**: `.` *(root)*
5. Click **Save and Deploy**. Cloudflare Pages automatically reads the included `_redirects` file and serves the complete CRM workspace at your `*.pages.dev` domain.

##### Option B: Wrangler CLI (Direct Upload)
```bash
$ npm install -g wrangler
$ wrangler pages deploy . --project-name=crm-rolexto
```

---

#### 2. Netlify (Automated Static & SPA)

Deploy in seconds with automated CI/CD and atomic deployments:

##### Option A: Netlify Dashboard
1. Log into [Netlify](https://app.netlify.com/) and click **Add new site > Import an existing project**.
2. Select **GitHub** and authorize the `crm-rolexto` repository.
3. Configure settings:
   - **Base directory**: `.`
   - **Build command**: *(leave blank)*
   - **Publish directory**: `.`
4. Click **Deploy crm-rolexto**. The repository includes `_redirects` configured for instant root-level routing.

##### Option B: Netlify CLI
```bash
$ npm install -g netlify-cli
$ netlify login
$ netlify deploy --prod --dir=.
```

---

#### 3. Vercel (Edge Deployment)

Deploy to Vercel's global edge network:

```bash
$ npm install -g vercel
$ cd crm-rolexto
$ vercel --prod
```

When prompted:
- **Set up and deploy?**: `y`
- **Which scope?**: *(your account)*
- **Link to existing project?**: `N`
- **Project name**: `crm-rolexto`
- **Directory**: `./`

---

#### 4. Termux on Android (Local Mobile Hosting)

Run Rolexto CRM locally on your Android smartphone or tablet without root access. This turns any Android phone into a portable CRM server accessible over local Wi-Fi or directly in mobile browsers.

##### Step 1: Install Termux
Install Termux from [F-Droid](https://f-droid.org/packages/com.termux/) or GitHub releases (avoid the outdated Google Play Store build).

##### Step 2: Install Required Packages
Open Termux and execute:
```bash
$ pkg update && pkg upgrade -y
$ pkg install git python php mariadb -y
```

##### Step 3: Clone Repository
```bash
$ git clone https://github.com/Reinhart-py/crm-rolexto.git
$ cd crm-rolexto
```

##### Step 4: Choose Execution Mode

###### Quick Mode: Standalone Preview
```bash
$ python -m http.server 8080
```
Open Chrome or Firefox on your Android device and navigate to:
```text
http://localhost:8080/preview.html
```

###### Full Stack Mode: Local PHP & MariaDB
```bash
$ mariadbd-safe -u root &
$ mariadb -u root -e "CREATE DATABASE crm_rolexto CHARACTER SET utf8mb4;"
$ php -S 0.0.0.0:8080 index.php
```

To access from other devices on the same Wi-Fi network:
```bash
$ ifconfig | grep "inet "
```
Open `http://<your-phone-ip>:8080` in any browser on your laptop or tablet.

---

#### 5. cPanel & Traditional Shared Hosting

Ideal for standard hosting environments (Hostinger, Namecheap, Bluehost, GoDaddy):

1. **Upload Files**:
   - Compress the repository into a `.zip` archive or clone directly using cPanel **Git™ Version Control**.
   - Extract into your target root: `public_html` (for main domain) or `public_html/crm` (for subfolder or subdomain).
2. **Select PHP Version**:
   - Open cPanel **MultiPHP Manager**.
   - Select PHP **7.4** or **8.0+** (`ea-php74` / `ea-php80` / `alt-php80`).
3. **Database Configuration**:
   - Open **MySQL® Database Wizard**.
   - Create database (e.g., `user_rolextocrm`).
   - Create user and assign **ALL PRIVILEGES**.
   - Open **phpMyAdmin**, select the new database, and import your `.sql` dump.
4. **App Configuration**:
   - In `application/config/config.php`:
     ```php
     $config['base_url'] = 'https://yourdomain.com/';
     ```
   - In `application/config/database.php`:
     ```php
     $db['default']['hostname'] = 'localhost';
     $db['default']['username'] = 'user_dbuser';
     $db['default']['password'] = 'your_strong_password';
     $db['default']['database'] = 'user_rolextocrm';
     ```
5. **Verify URL Rewriting**:
   - Ensure the included `.htaccess` file is present in the web root with `RewriteEngine On`.

---

#### 6. Cloud VPS / Dedicated Server (Ubuntu, Debian, Nginx, Apache)

For high-concurrency production deployments on DigitalOcean, AWS EC2, Hetzner, Linode, or Vultr:

##### Ubuntu / Debian Setup
```bash
$ sudo apt update && sudo apt upgrade -y
$ sudo apt install nginx php8.0-fpm php8.0-mysql php8.0-mbstring php8.0-gd php8.0-curl php8.0-xml mariadb-server git -y
```

##### Nginx Server Block
Create `/etc/nginx/sites-available/crm-rolexto`:
```nginx
server {
    listen 80;
    server_name crm.yourdomain.com;
    root /var/www/crm-rolexto;
    index index.php index.html preview.html;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

Enable site and configure SSL:
```bash
$ sudo ln -s /etc/nginx/sites-available/crm-rolexto /etc/nginx/sites-enabled/
$ sudo nginx -t
$ sudo systemctl reload nginx
$ sudo apt install certbot python3-certbot-nginx -y
$ sudo certbot --nginx -d crm.yourdomain.com
```

---

#### 7. Docker & Container Platforms (Render, Railway, Fly.io)

For cloud container runtimes, create a minimal `Dockerfile`:

```dockerfile
FROM php:8.0-apache
RUN docker-php-ext-install mysqli && a2enmod rewrite
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80
```

Deploy commands:
- **Railway**: `railway up`
- **Fly.io**: `fly launch && fly deploy`
- **Render**: Connect repository, select **Docker Web Service**, and set port to `80`.

---

#### 8. Local Desktop Stacks (XAMPP, WAMP, Laragon, PHP CLI)

##### XAMPP / WAMP / Laragon
1. Place repository in `htdocs` or `www` directory:
   - XAMPP: `C:\xampp\htdocs\crm`
   - Laragon: `C:\laragon\www\crm`
2. Start Apache and MySQL services.
3. Open `http://localhost/crm/manager/login`.

##### PHP Built-in Server
```bash
$ cd crm-rolexto
$ php -S localhost:8000 index.php
```

---

### Theme & Palettes

Rolexto CRM incorporates an intentional luxury design system governed by CSS variables in `assets/dist/css/crm-theme.css`.

| Theme Palette | HTML Attribute | Accent Token | Hover Token | Background (Dark / Light) |
|---|---|---|---|---|
| **Rolex Emerald Green** | `data-crm-palette="green"` | `#10b981` | `#059669` | `#090d16` / `#f8fafc` |
| **Rolex Crimson Red** | `data-crm-palette="red"` | `#dc2626` | `#b91c1c` | `#090d16` / `#f8fafc` |

#### Direct Theme System
Toggle between Green, Red, Blue, and Black using the `#crmPaletteToggle` button in the topbar or the Theme settings under Settings. The active palette updates all primary buttons, active navigation markers, glowing card borders, and chart fills with zero hybrid color mixing.

#### Dynamic Logo Switching
- **Green**: Automatically displays `assets/green-dark.png`.
- **Red**: Automatically displays `assets/red-dark.png`.
- **Blue**: Automatically displays `assets/blue-dark.png`.
- **Black**: Automatically displays `assets/black-dark.png`.
The 48px high-resolution logo updates live across the sidebar and authentication panels without page reload.

#### Reactive Chart Recoloring
Graphs (`barChart3` Previous Performance and `barChart4` Team Projection) are managed by `window.renderDashboardCharts()`. When switching between Green and Red modes, the canvases cleanly reconstruct with the exact palette fill (`#10b981` or `#dc2626`), eliminating chart caching and ghosting.

#### Harmonized Activity Cards
The 8 activity cards (*My Followups*, *My Meetings*, *My Closures*, *My Vertical FU*, *Team Followups*, etc.) utilize:
- Clean glowing borders on hover instead of heavy dark outlines.
- Cohesive monochromatic tonal segment bars representing workload distribution.
- Executive neutral number badges for routine metrics.
- Vibrant luxury accent highlights on key milestones (*All Future* and *Total Revenue*).

---

### Configuration

#### Base URL
File: `application/config/config.php`
```php
$config['base_url'] = 'https://crm.rolextogroup.com/';
```

#### Database Credentials
File: `application/config/database.php`
```php
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

---

### Default Credentials

For initial testing, demonstration, and local administration:

| Role | Username | Password | Access Level |
|---|---|---|---|
| **Super Admin** | `jules` | `jules123` | Level 1 (Full Governance) |
| **Administrator** | `admin` | `admin123` | Level 1 (Full Access) |

---

### Repository Structure

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
│   ├── green-dark.png       # Official Emerald Green high-res transparent brand logo
│   ├── red-dark.png         # Official Crimson Red high-res transparent brand logo
│   ├── blue-dark.png        # Official Royal Blue high-res transparent brand logo
│   ├── black-dark.png       # Official Monochrome Black high-res transparent brand logo
│   ├── bootstrap/           # Base responsive grid framework
│   ├── dist/
│   │   ├── css/
│   │   │   ├── crm-theme.css# Modern enterprise design system tokens
│   │   │   └── AdminLTE.css # Layout base framework
│   │   └── img/             # Brand assets, logos, and favicon
│   └── plugins/             # Chart.js, jQuery, Select2, DataTables
├── system/                  # Core CodeIgniter framework engine
├── _redirects               # Cloudflare Pages and Netlify edge routing configuration
├── .htaccess                # Apache rewrite rules
├── favicon.ico              # Root favicon
├── index.php                # Application entrypoint
├── preview.html             # Standalone local frontend preview
└── README.md                # Project documentation
```

---

### Troubleshooting & FAQ

<details>
<summary><strong>Q: How do I deploy the preview on Cloudflare Pages or Netlify?</strong></summary>
<br>
Connect the GitHub repository to Cloudflare Pages or Netlify, leave the build command blank, and set the publish directory to <code>.</code> (root). The included <code>_redirects</code> file automatically routes traffic to <code>preview.html</code>.
</details>

<details>
<summary><strong>Q: Can I run this offline on an Android phone without a laptop?</strong></summary>
<br>
Yes. Install Termux from F-Droid, run <code>pkg install git python php mariadb</code>, clone the repository, and start <code>python -m http.server 8080</code>. Open <code>http://localhost:8080/preview.html</code> directly in your mobile browser.
</details>

<details>
<summary><strong>Q: Why does clicking internal links return a 404 error on Apache?</strong></summary>
<br>
Verify that <code>mod_rewrite</code> is enabled on your Apache server and that <code>.htaccess</code> exists in your root folder. Check that <code>$config['base_url']</code> in <code>application/config/config.php</code> matches your exact domain or directory path.
</details>

<details>
<summary><strong>Q: Database connection error occurs when submitting login?</strong></summary>
<br>
Verify the credentials in <code>application/config/database.php</code>. If hosting on cPanel or remote MySQL, ensure the database user has been granted <strong>ALL PRIVILEGES</strong> on the target database.
</details>

---

<div align="center">
  <sub>Rolexto Group &copy; 2026. All rights reserved.</sub>
</div>
