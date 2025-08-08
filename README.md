# unbound
# 🇧🇩 Bangladesh Unbound - Laravel 12 Dashboard

**Bangladesh Unbound** is a Laravel 12-based administrative dashboard platform. It is modular, responsive, and built using modern frontend tools such as **Vite**, **Bootstrap 5.3**, and **Blade Components**.

This project is ideal for CRM, internal tools, client portals, and other custom Laravel web applications.

---

## 📦 Features

- Laravel 12 with Vite asset bundling
- Blade-based layout system (`@yield`, `@include`, `@stack`)
- Bootstrap 5.3 and Bootstrap Icons
- Google Fonts (`Poppins`)
- Responsive sidebar, header, content layout
- SEO-friendly meta tags
- CSRF protection with Laravel's built-in security
- Clean folder structure
- Laravel Mix replaced with Vite

---

## 🧱 Tech Stack

| Tech             | Version     |
|------------------|-------------|
| Laravel          | 12.x        |
| PHP              | 8.2+        |
| Node.js          | 18+         |
| NPM              | 9+          |
| Bootstrap        | 5.3.2       |
| Bootstrap Icons  | 1.11.1      |
| Laravel Vite     | ✔️           |

--- 

## ⚙️ Installation

Follow these steps to get the project running locally.

### 1. Clone the Repository

```bash
git clone https://github.com/sharifWebDev/unbound.git
cd unbound

# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate --seed

# Run development server
php artisan serve

# Build frontend
npm run dev   # for development
npm run build # for production
