# Dealers Warehouse - PHP Skill Assessment

This is a Laravel + Bootstrap app for managing customers. It supports full CRUD operations including creation, editing, viewing, and deletion.

---

## Features

- Add new customers with form validation
- Auto-generated account numbers
- View detailed customer profiles
- Edit or delete customers
- Styled with Bootstrap 5
- Includes SQLite database and seeder with sample data

---

## Tech Stack

- Laravel 10 / PHP 8.1
- Blade Templating
- Bootstrap 5 (CDN)
- SQLite (default, easy setup)
- Optional MySQL support

---

## Setup Instructions

```bash
# 1. Clone the repo
git clone https://github.com/Leanardoe/Dealers_Skill_Assessment.git
cd Dealers_Skill_Assessment

# 2. Install PHP + JavaScript dependencies
composer install
npm install && npm run dev

# 3. Create your environment file
cp .env.example .env
php artisan key:generate

# 4. Use SQLite
touch database/database.sqlite

# 5. Update your .env file
# Example:
DB_CONNECTION=sqlite
DB_DATABASE=${PWD}/database/database.sqlite

# 6. Migrate and seed the database
php artisan migrate --seed

# 7. Start the Laravel development server
php artisan serve

# (Optional) Reset the database and reseed if needed
php artisan migrate:fresh --seed

# 8. Then visit the URL given in the CLI


# Project Setup Instructions (Docker)

This guide walks you through running the Laravel Customer Manager app using Docker—no need to install PHP, Composer, Node.js, or SQLite locally.

---

## Requirements

- [Docker Desktop](https://www.docker.com/products/docker-desktop) installed and running

---

## Quick Start

```bash
# 1. Clone the repository
git clone https://github.com/Leanardoe/Dealers_Skill_Assessment.git
cd Dealers_Skill_Assessment
 
# 2. Build and run the Docker container
docker compose up --build

#(Optional) Reset with seed data
docker compose exec laravel php artisan migrate:fresh --seed

# 3. Then visit the URL given in the CLI