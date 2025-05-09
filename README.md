# CWD Laravel Kit

A minimal, modern Laravel **v12.\*** starter kit built for rapid development with clean defaults, Livewire v3, and SCSS-based styling utilities.

---

## 📦 Features

- ✅ Laravel 12+
- ✅ Livewire v3
- ✅ SCSS-ready via Vite (`npm i -D sass`)
- ✅ Utility-based SCSS (customized Bootstrap-style classes)
- ✅ Livewire views and layouts organized under `resources/views/livewire`
- ✅ Modular SCSS structure with `components/`, `layout/`, `themes/`, `utilities/`
- ✅ User migration separated into its own clean file

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

- `resources/styles/` → SCSS split by layout, components, themes, utilities
- `resources/views/` → Updated default Livewire structure
- `resources/views/layouts/app.blade.php` → Updated default Livewire layout location
- `database/migrations/` → `users` table isolated in its own migration

---

## 🔧 Roadmap / Ideas

- [ ] Add `kit:init` script for first-time setup
- [ ] Publish to Packagist
- [ ] Add example Livewire components
- [ ] Create CLI to scaffold new views/components/styles

---

## 📎 Repo

GitHub: [ChaosWebDev/cwd-laravel-kit](https://github.com/ChaosWebDev/cwd-laravel-kit)
