# M-Pesa Middleware Application

A Laravel API application that processes incoming API requests, generates confirmation alerts, and prepares SAP integration files.

---

## Features

- REST API for processing incoming requests
- Email & SMS confirmation processing
- SAP file generation for downstream consumption
- Log archival
- Health checks for confirmation processing pipeline
- Production-ready Docker containerization with PostgreSQL & Nginx
- Automated background task scheduling and queue worker services

---

## System Requirements

- **PHP:** 8.3 / 8.4
- **Database:** PostgreSQL 17 (Production) or SQLite (Local Development)
- **Containerization:** Docker & Docker Compose V2

---

## Production Docker Deployment

### 1. Directory Structure Setup

Ensure your project contains the updated `docker/` configuration directory:
```
.
├── docker/
│   ├── nginx/
│   │   ├── certs/
│   │   │   ├── fullchain.pem
│   │   │   └── privkey.pem
│   │   └── default.conf
│   └── php/
│       └── opcache.ini
├── Dockerfile
└── docker-compose.yml
```

---

### 2. Configure Environment

Create and adjust your production environment variables:

```bash
cp .env.example .env.production
```

Ensure your database variables target the PostgreSQL service:

```ini
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```
---
### 3. Spin Up Containers & Initialize Application

1. **Build and start containers (Detached mode):**
   ```bash
   docker compose up -d --build
   ```
   *Note: Running `docker compose up -d` automatically spins up the `scheduler` service in the background along with `app`, `postgres`, and `webserver`.*[cite: 2]

2. **Generate application key:**
   ```bash
   docker compose exec app php artisan key:generate --force
   ```

3. **Run database migrations:**
   ```bash
   docker compose exec app php artisan migrate --force
   ```

4. **Publish Filament assets and icons:**
   ```bash
   docker compose exec app php artisan filament:assets
   docker compose exec app php artisan icons:cache
   ```

5. **Optimize & cache framework files:**
   ```bash
   docker compose exec app php artisan config:cache
   docker compose exec app php artisan route:cache
   docker compose exec app php artisan view:cache
   docker compose exec app php artisan event:cache
   ```

6. **Create storage symlink:**
   ```bash
   docker compose exec app php artisan storage:link
   ```

---

## Local Development (Non-Docker)

1. Clone the repository:
   ```bash
   git clone [https://github.com/KusaVincent/DevyaniVBLRevamp.git](https://github.com/KusaVincent/DevyaniVBLRevamp.git)
   cd DevyaniVBLRevamp
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Setup environment and database:
   ```bash
   cp .env.example .env
   php artisan key:generate
   touch database/database.sqlite
   php artisan migrate:fresh --seed
   ```

4. Start development server:
   ```bash
   php artisan serve
   ```

The API will be available at:
`http://127.0.0.1:8000/api/confirmation/`

---

## Background Processing & Scheduled Commands

The application relies on specific Artisan tasks for SAP file creation, notifications, and log maintenance:

| Command | Description | Recommended Schedule |
| :--- | :--- | :--- |
| `php artisan sap:process -v` | Processes pending records & generates SAP files | Every 5-15 mins |
| `php artisan email:confirmation -v` | Processes queued email notifications | Every minute |
| `php artisan sms:process -v` | Processes queued SMS notifications | Every minute |
| `php artisan logs:archive -v` | Archives processed application logs | Daily |
| `php artisan confirmation:health -v` | Health status monitor for pipeline | Every 10 mins |

### Automated Scheduler Container

In Docker environments, the scheduler runs continuously as a dedicated background service defined in `docker-compose.prod.yml`[cite: 2]:

```yaml
  scheduler:
    image: laravel-app:production
    container_name: laravel_scheduler
    restart: always
    command: ["php", "artisan", "schedule:work"]
    depends_on:
      - app
      - postgres
    networks:
      - app-network
```

This service automatically executes scheduled tasks without requiring host system crontabs or manual CLI interventions.

---

## Project Structure
```
app/
├── Console/
├── Http/
├── Models/
├── Services/
└── Jobs/

database/
├── migrations/
├── seeders/
└── database.sqlite

docker/
├── nginx/
│   ├── certs/
│   └── default.conf
└── php/
└── opcache.ini

storage/
├── logs/
└── app/

routes/
└── api.php
```
---

## Full Technology Stack

- **Framework:** Laravel 11 / Filament 5
- **Runtime:** PHP 8.4 FPM (Alpine)
- **Database:** PostgreSQL 17 (Docker) / SQLite (Dev)
- **Web Server:** Nginx 1.26 (Alpine) with SSL Termination
- **Containerization:** Docker Compose
