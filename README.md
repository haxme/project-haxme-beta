# HaxMe Beta Reconstruction

<img width="2437" height="2145" alt="image" src="https://github.com/user-attachments/assets/fbd49d4a-0ace-418a-8cdc-b9e6a753c575" />

This repository preserves and reconstructs an early HaxMe beta-era PHP codebase
as a runnable local artifact. The original project was a self-built security
training site: part learning platform, part mission/challenge system, part
content archive, and part hand-rolled PHP application framework.

The goal of this reconstruction is historical preservation first. The app has
been made self-contained with Docker, a local MariaDB schema, seeded content,
and repaired routing/bootstrap code so the old site can be explored without the
original production database, forum integration, or hosting environment.

The reconstructed beta keeps the April 2012 `hxmf` design direction: `index.php`
boots `initSystem.php`, loads `engine/hxmCore.php`, and dispatches page modules
from `engine/modules`. Legacy page templates, challenge pages, playground apps,
assets, and fixtures are retained where they are part of the historical site
experience.

This is intentionally vulnerable security-training software. Run it locally or
inside an isolated lab network; do not expose it to the public internet.

## Requirements

- Docker
- Docker Compose

No host PHP or MySQL installation is required for normal use.

## Quick Start

```sh
docker compose up -d --build
```

Open:

```text
http://localhost:8080
```

Default login:

- Username: `admin`
- Password: `haxme`

Stop the app:

```sh
docker compose down
```

## Configuration

The Docker Compose file supports these environment variables:

| Variable | Default | Purpose |
| --- | --- | --- |
| `HXME_PORT` | `8080` | Host port mapped to Apache port 80 |
| `HXME_BASE_URL` | `http://localhost:8080` | Base URL used by generated links |
| `HXME_USERNAME` | `admin` | Seeded local login username |
| `HXME_PASSWORD` | `haxme` | Seeded local login password |
| `HXME_DISPLAY_NAME` | `admin` | Display name for the seeded account |
| `HXME_EMAIL` | `admin@localhost` | Email for the seeded account |

Example:

```sh
HXME_PORT=8081 HXME_BASE_URL=http://localhost:8081 docker compose up -d --build
```

## Project Layout

```text
.
├── index.php               # hxmf-style bootstrap/front controller
├── hxcfg.php               # hxmf-style environment-aware configuration
├── initSystem.php
├── engine/                 # repaired OOP dispatcher and page modules
├── config.php              # compatibility bridge for legacy mysql_* pages
├── login.php / logout.php
├── pages/                  # Restored HaxMe page templates and mission routers
├── playground/             # Standalone Web/Team/Insane mission apps
├── sources/                # Legacy shared PHP, assets, templates, libraries
├── extension/              # Recovered challenge support files and downloads
├── docker/mysql/initdb/    # MariaDB schema and seed content
└── docker/php/haxme.ini    # PHP 5.6 runtime configuration
```

## Runtime Notes

- The container uses `php:5.6-apache`, matching the PHP generation used by the
  legacy code.
- No PHP framework is installed.
- `engine/hxmCore.php` uses PDO for the `hxmf` engine connection while
  `config.php` keeps the old `mysql_*` compatibility layer required by many
  restored pages.
- Mission routers accept both legacy `m` parameters and common `id` parameters
  for URLs such as `?p=novice&id=2`.
- Web and Insane missions redirect to their standalone playground paths so their
  relative CSS, JavaScript, and image references load correctly.
- Historical challenge fixtures are intentionally included, including small
  archives, binaries, images, and source snippets used by the missions.
- RainTPL is preserved with the historical engine files, but the primary
  restored UI renders through legacy PHP page templates.

## Useful Checks

Lint edited PHP files:

```sh
php -l index.php
php -l hxcfg.php
php -l engine/hxmCore.php
php -l engine/modules/home/home.class.php
php -l config.php
```

Confirm the container is running:

```sh
docker compose ps
```

Check direct mission URLs:

```sh
curl -I 'http://localhost:8080/?p=web&id=1'
curl -I 'http://localhost:8080/?p=insane&id=1'
```
