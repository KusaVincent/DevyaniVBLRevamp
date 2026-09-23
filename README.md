# M-Pesa Middleware Application

A Laravel API middleware application that processes incoming payment notifications, processes transactional alerts, and prepares downstream integration files.

---

## Features

- REST API endpoints for processing incoming payment callbacks
- Asynchronous task processing & SMS/Email notification alerts
- Automated background task scheduling and worker services
- Health check endpoints for integration monitoring
- Production-ready Docker containerization with PostgreSQL & Nginx
- Multi-stage build Dockerfile based on PHP 8.4 Alpine
- Dual-stage optimization pipeline (`build-optimize.sh` during image build & `runtime-optimize.sh` on container boot via entrypoint)

---

## System Requirements

- **PHP:** 8.4
- **Database:** PostgreSQL 17 (Production) or SQLite (Local Development)
- **Containerization:** Docker & Docker Compose V2

---

## Docker Optimization Architecture

### 1. Build-Time Optimization Script (`docker/build-optimize.sh`)
Executed inside Stage 2 of the `Dockerfile` during `docker compose build` to cache static configurations and components:

```sh
#!/bin/sh
set -e

echo "=== Running Build-Time Optimization ==="
php artisan optimize:clear || true
php artisan event:cache || true
php artisan icons:cache || true
```

### 2. Runtime Boot Script (`docker/runtime-optimize.sh`)
Executed when containers spawn in `docker-compose.yml` to apply framework optimizations with active environment context:

---

## Production Deployment Steps

1. **Configure Environment File:**
   ```bash
   cp .env.example .env.production
   ```

2. **Build and Deploy Containers:**
   ```bash
   docker compose up -d --build
   ```

3. **Initialize Application State:**
   ```bash
   docker compose exec app php artisan key:generate --force
   docker compose exec app php artisan migrate --force
   ```

---

## Full Technology Stack

- **Framework:** Laravel 11 / Filament 5
- **Runtime:** PHP 8.4 FPM (Alpine 3.21)
- **Database:** PostgreSQL 17 (Docker) / SQLite (Dev)
- **Web Server:** Nginx 1.26 (Alpine) with SSL Termination
- **Containerization:** Docker Compose V2

```
docker compose run --rm --entrypoint "" app php artisan migrate --seed --force
docker compose restart app
docker compose ps

docker compose exec app php artisan tinker
    $user = new \App\Models\User();
    $user->name = 'Test User';
    $user->email = 'test@example.com';
    $user->password = \Illuminate\Support\Facades\Hash::make('Password123!');
    $user->email_verified_at = now();
    $user->save();
```
