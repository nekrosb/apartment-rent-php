# Apartment Rent PHP

Laravel SSR-first starter for the apartment-rent project.

## Requirements

- PHP 8.4+
- php-pgsql
- Composer 2+
- Node.js + npm
- docker
- postgres


## Local setup

```bash
composer install
cp .env.example .env
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
php artisan key:generate
php artisan migrate
npm install
```

## Run locally

```bash
php artisan serve
```

Open http://127.0.0.1:8000

## Format / lint / test

```bash
./vendor/bin/pint
composer test
```

## Repository settings to enable in GitHub UI

- Branch protection on `main`:
  - require pull request before merge
  - require at least 1 approval
  - require conversation resolution
  - allow only squash merge
- Settings > General > enable "Automatically delete head branches"
