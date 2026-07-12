# DevyaniVBLRevamp

A Laravel API application that processes incoming API requests, generates confirmation alerts, and prepares SAP integration files.

## Features

- REST API for processing incoming requests
- Email confirmation processing
- SMS confirmation processing
- SAP file generation for downstream consumption
- Log archival
- Health checks for confirmation processing

---

## Requirements

- PHP 8.5+
- Composer
- SQLite (default) or another supported database

---

## Installation

Clone the repository:

```bash
git clone https://github.com/KusaVincent/DevyaniVBLRevamp.git
cd DevyaniVBLRevamp
```

Install dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Create the SQLite database:

```bash
touch database/database.sqlite
```

Run migrations and seed the database:

```bash
php artisan migrate:fresh --seed
```

Start the development server:

```bash
php artisan serve
```

The API will be available at:

```
http://127.0.0.1:8000/api/confirmation/
```

---

# Available Artisan Commands

## Seed the Database

```bash
php artisan migrate:fresh --seed
```

---

## Process SAP Files

Processes pending records and generates files for SAP consumption.

```bash
php artisan sap:process -v
```

---

## Process Email Confirmations

Processes queued email confirmations.

```bash
php artisan email:confirmation -v
```

---

## Process SMS Confirmations

Processes queued SMS confirmations.

```bash
php artisan sms:process -v
```

---

## Archive Logs

Archives processed application logs.

```bash
php artisan logs:archive -v
```

---

## Confirmation Health Check

Displays the health status of the confirmation processing pipeline.

```bash
php artisan confirmation:health -v
```

---

# Typical Processing Workflow

Run the commands in the following order:

```bash
php artisan migrate:fresh --seed

php artisan sap:process -v

php artisan email:confirmation -v

php artisan sms:process -v

php artisan logs:archive -v

php artisan confirmation:health -v
```

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

storage/
├── logs/
└── app/

routes/
└── api.php
```

---

## Technology Stack

- Laravel
- PHP
- SQLite (default)
- Artisan Console Commands
- SAP File Integration
- Email Notifications
- SMS Notifications

---

## Development

Run the local server:

```bash
php artisan serve
```

For verbose command output, append the `-v` flag:

```bash
php artisan <command> -v
```
