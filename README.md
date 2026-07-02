<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->

# KeyagaTwo HRM

Enterprise Human Resource Management System built with Laravel.

---

# Tech Stack

- Laravel
- PHP 8.4
- MySQL 8.4
- Redis
- Docker
- Docker Compose
- Nginx
- Meilisearch
- MinIO
- Soketi
- Mailpit
- Prometheus
- Grafana
- GitHub Actions
- Docker Hub

---

# Project Structure

```
app/

bootstrap/

config/

database/

docker/

docker-compose.yml

docker-compose.dev.yml

docker-compose.prod.yml

Dockerfile

Modules/

public/

resources/

routes/

storage/

tests/
```

---

# Requirements

- Docker Desktop

or

- Docker Engine
- Docker Compose

---

# Clone

```bash
git clone https://github.com/YOUR_USERNAME/keyagatwo.git

cd keyagatwo
```

---

# Environment

```bash
cp .env.example .env
```

Generate key

```bash
php artisan key:generate
```

---

# Build

```bash
docker compose build
```

---

# Run

```bash
docker compose up -d
```

---

# Stop

```bash
docker compose down
```

---

# Rebuild

```bash
docker compose up --build -d
```

---

# Logs

All

```bash
docker compose logs
```

Realtime

```bash
docker compose logs -f
```

App

```bash
docker compose logs -f app
```

Worker

```bash
docker compose logs -f worker
```

Scheduler

```bash
docker compose logs -f scheduler
```

---

# Enter Container

```bash
docker compose exec app bash
```

---

# Composer

```bash
composer install
```

Update

```bash
composer update
```

---

# Artisan

```bash
php artisan migrate

php artisan db:seed

php artisan optimize

php artisan optimize:clear

php artisan queue:restart
```

---

# PHPUnit

```bash
php artisan test
```

---

# Pint

```bash
vendor/bin/pint
```

---

# PHPStan

```bash
vendor/bin/phpstan analyse
```

---

# Psalm

```bash
vendor/bin/psalm
```

---

# Docker Hub

Build

```bash
docker build -t horizon888/keyagatwo-app:latest .
```

Push

```bash
docker push horizon888/keyagatwo-app:latest
```

Pull

```bash
docker pull horizon888/keyagatwo-app:latest
```

---

# Development

```bash
docker compose \
-f docker-compose.yml \
-f docker-compose.dev.yml \
up -d
```

---

# Production

```bash
docker compose \
-f docker-compose.yml \
-f docker-compose.prod.yml \
up -d
```

---

# Services

| Service | Port |
|----------|------|
| Laravel | 9000 |
| Nginx | 80 |
| MySQL | 3306 |
| Redis | 6379 |
| phpMyAdmin | 8081 |
| Mailpit | 8025 |
| Meilisearch | 7700 |
| MinIO | 9001 |
| Soketi | 6001 |
| Prometheus | 9090 |
| Grafana | 3000 |

---

# CI

GitHub Actions

- Pint
- PHPStan
- Psalm
- PHPUnit
- Docker Build
- Docker Push

---

# Deploy

GitHub

↓

Docker Hub

↓

Server

↓

docker compose pull

↓

docker compose up -d

---

# Monitoring

- Prometheus

- Grafana

---

# Queue

```bash
docker compose exec worker php artisan queue:work
```

---

# Scheduler

```bash
docker compose exec scheduler php artisan schedule:work
```

---

# License

MIT