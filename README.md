# CWD Laravel Kit

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red?logo=laravel&logoColor=white)](https://laravel.com) [![Livewire](https://img.shields.io/badge/Livewire-v3-blue?logo=livewire)](https://livewire.laravel.com) [![SCSS](https://img.shields.io/badge/SCSS-ready-cc6699?logo=sass&logoColor=white)](https://sass-lang.com) [![License: MIT](https://img.shields.io/badge/license-MIT-lightgrey.svg)](LICENSE)[![GitHub Stars](https://img.shields.io/github/stars/ChaosWebDev/cwd-laravel-kit?style=social)](https://github.com/ChaosWebDev/cwd-laravel-kit/stargazers)[![Total Downloads](https://img.shields.io/packagist/dt/chaoswebdev/laravel-kit)](https://packagist.org/packages/chaoswebdev/laravel-kit)



A minimal, modern Laravel **v12.\*** starter kit built for rapid development with clean defaults, Livewire v3, and SCSS-based styling utilities.

---

## 📦 Features

-   ✅ Laravel 12+
-   ✅ Livewire v3
-   ✅ SCSS-ready via Vite (`npm i -D sass`)
-   ✅ Utility-based SCSS (customized Bootstrap-style classes)
-   ✅ Livewire views organized under `resources/views`
-   ✅ Livewire layout organized under `resources/views/layouts/app.blade.php`
-   ✅ Modular SCSS structure with `components/`, `layout/`, `themes/`, `utilities/`
-   ✅ User migration separated into its own clean file

---

## 🚀 Installation

> **Note:** This is not on Packagist yet.

Clone manually:

```bash
git clone https://github.com/ChaosWebDev/cwd-laravel-kit.git your-project-name
cd your-project-name
rm -rf .git
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
```

---

## 📁 Directory Highlights

-   `resources/styles/` → SCSS split by layout, components, themes, utilities
-   `resources/views/` → Updated default Livewire structure
-   `resources/views/layouts/app.blade.php` → Updated default Livewire layout location
-   `database/migrations/` → `users` table isolated in its own migration

---

## 🆕 Recent Updates

-   Added `kit` script for first-time setup  
    → Run with `php kit` (Windows) or `./kit` (Linux/macOS)

---

## 🔧 Roadmap / Ideas

-   [ ] Publish to Packagist
-   [ ] Add example Livewire components
-   [ ] Create CLI to scaffold new views/components/styles

---

## 📎 Repo

GitHub: [ChaosWebDev/cwd-laravel-kit](https://github.com/ChaosWebDev/cwd-laravel-kit)
