# CWD Laravel Kit

[![Laravel](https://img.shields.io/badge/Laravel-13.x-red?logo=laravel&logoColor=white)](https://laravel.com) [![Livewire](https://img.shields.io/badge/Livewire-v4-blue?logo=livewire)](https://livewire.laravel.com) [![SCSS](https://img.shields.io/badge/SCSS-ready-cc6699?logo=sass&logoColor=white)](https://sass-lang.com) [![License: MIT](https://img.shields.io/badge/license-MIT-lightgrey.svg)](LICENSE) [![GitHub Stars](https://img.shields.io/github/stars/ChaosWebDev/cwd-laravel-kit?style=social)](https://github.com/ChaosWebDev/cwd-laravel-kit/stargazers) [![Total Downloads](https://img.shields.io/packagist/dt/chaoswebdev/laravel-kit)](https://packagist.org/packages/chaoswebdev/laravel-kit)

A minimal, modern Laravel **v12.\*** starter kit built for rapid development with clean defaults, Livewire v3, and SCSS-based styling utilities.

---

## 📦 Features/Requirements

-   ✅ PHP v8.4+
-   ✅ Laravel 13.\*
-   ✅ Laravel Boost 2.\*
-   ✅ Livewire v4
-   ✅ SCSS-ready via Vite (`npm i -D sass`)
-   ✅ Utility-based SCSS (Bootstrap-inspired utility classes)
-   ✅ Livewire views organized under `resources/views`
-   ✅ User migration separated into its own clean file
-   ✅ Added `APP_TIMEZONE` back to `.env` and `configs/app.php`. Defaults to `America/Denver`
-   ✅ User model has `email` and `username` built in to it
-   ✅ Ability to use MongoDB

---

## 🚀 Installation

> `composer create-project chaoswebdev/laravel-kit my-project-name` > `cd my-project-name` > `php kit`

Clone manually:

```bash
git clone https://github.com/ChaosWebDev/cwd-laravel-kit.git your-project-name
cd your-project-name
rm -rf .git # or `ri .git -r -force` for windows
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
```

---

## 📁 Directory Highlights

-   `resources/styles/` → Built to contain view stylings as partials to be forwarded in `app.scss`
-   `resources/views/components/layouts/app.blade.php` → Updated default Livewire layout location
-   `database/migrations/` → `users` table isolated in its own migration

---

## Git

You can commit, version tag, and push using the `kit-commit` file in the root directory.

> `php kit-commit -n="Notes Here" -v="0.0.0"`
> The file will then run:

```bash
git add .
git commit -m $notes
git tag v{$version} -m "Release v{$version}"
git push
git push origin v{$version}
```
> `-n` and `-v` are optional. If `-v` is omitted, the file will attempt to find the next version and parse it in for you.

#### Example

If you do `php kit-commit -n="See Changelog for v0.0.1" -v="0.0.1"`
The system will run:

```bash
git add .
git commit -m "See Changelog for v0.0.1"
git tag v0.0.1 -m "Release v0.0.1"
git push
git push origin v0.0.1
```

---

## 📎 Repo

GitHub: [ChaosWebDev/cwd-laravel-kit](https://github.com/ChaosWebDev/cwd-laravel-kit)

---

## Related Project Documentation

- [Laravel](https://laravel.com/docs/13.x/installation)
- [Livewire](https://livewire.laravel.com/docs/4.x/quickstart)
- [NativePHP](https://nativephp.com/docs/desktop/2/getting-started/introduction)
- [Laravel MongoDB](https://github.com/mongodb/laravel-mongodb)

