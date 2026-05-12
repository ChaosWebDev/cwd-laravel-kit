# CWD Laravel Kit

[![Laravel](https://img.shields.io/badge/Laravel-13.x-red?logo=laravel&logoColor=white)](https://laravel.com) [![Livewire](https://img.shields.io/badge/Livewire-v4-blue?logo=livewire)](https://livewire.laravel.com) [![SCSS](https://img.shields.io/badge/SCSS-ready-cc6699?logo=sass&logoColor=white)](https://sass-lang.com) [![License: MIT](https://img.shields.io/badge/license-MIT-lightgrey.svg)](LICENSE) [![GitHub Stars](https://img.shields.io/github/stars/ChaosWebDev/cwd-laravel-kit?style=social)](https://github.com/ChaosWebDev/cwd-laravel-kit/stargazers) [![Total Downloads](https://img.shields.io/packagist/dt/chaoswebdev/laravel-kit)](https://packagist.org/packages/chaoswebdev/laravel-kit)

A minimal, modern Laravel **v13.x** starter kit built for rapid development with clean defaults, Livewire v4, and SCSS-based styling utilities.

Built for developers who prefer Laravel with minimal frontend overhead, organized SCSS structure, and Livewire-first workflows.

---

## 📦 Features / Requirements

- ✅ PHP v8.4+
- ✅ Laravel 13.x
- ✅ Livewire v4.x
- ✅ SCSS-ready via Vite (`npm i -D sass`)
- ✅ SCSS utility package `cwdscss` included via npm
- ✅ Livewire views organized under `resources/views`
- ✅ User migration separated into its own clean file
- ✅ Config migration for key/value application settings
- ✅ Added `APP_TIMEZONE` back to `.env` and `config/app.php`
- ✅ Defaults timezone to `America/Denver`
- ✅ User model includes both `email` and `username`
- ✅ Compatible with Laravel MongoDB drivers
- ✅ Built-in semantic version sync tooling

---

## 🧰 Stack

- Laravel 13
- Livewire 4
- Vite
- SCSS
- Alpine.js

---

## 🚀 Installation

`php kit` runs the interactive starter setup utility.

### Create Project

```bash
composer create-project chaoswebdev/laravel-kit my-project-name

cd my-project-name

php kit
```

---

### Clone Manually

```bash
git clone https://github.com/ChaosWebDev/cwd-laravel-kit.git your-project-name

cd your-project-name

rm -rf .git
# Windows PowerShell:
# ri .git -r -force

composer install

npm install && npm run dev

cp .env.example .env

php artisan key:generate
```

---

## 📁 Directory Highlights

- `resources/styles/`
    - Intended for SCSS partials forwarded into `app.scss`

- `resources/views/layouts/app.blade.php`
    - Default Livewire layout location

- `database/migrations/`
    - User migration isolated into its own clean migration file

---

## 🔖 Git Version Workflow

You can commit, version tag, and push using:

```bash
php artisan sync -m "MESSAGE" -b __
```

The `-b` (*bump*) option accepts:

- `major` / `ma`
- `minor` / `mi`
- `patch` / `p`

This provides lightweight semantic versioning and GitHub workflow automation directly from Artisan.

### Examples

```bash
php artisan sync -m "Fixed navbar issue" -b p

php artisan sync -m "Added provider management" -b mi

php artisan sync -m "Refactored authentication system" -b ma
```

---

## 🎨 Styling

`cwdscss` is included by default and can be imported in several ways depending on your needs.

### Import Everything

```scss
@use "cwdscss" as *;
```

Includes:

- Utilities
- Classes
- Components
- Themes

Outputs CSS.

---

### Core Only (No CSS Output)

```scss
@use "cwdscss/core" as *;
```

Includes:

- Variables
- Mixins
- Themes

Safe to use globally without outputting CSS.

---

### Components

```scss
@use "cwdscss/components";
```

Includes UI components and layout styles.

Outputs CSS.

---

### Utility Classes

```scss
@use "cwdscss/classes";
```

Includes utility helpers such as:

- Spacing
- Flex utilities
- Typography helpers

Outputs CSS.

---

## 📎 Repository

GitHub:
https://github.com/ChaosWebDev/cwd-laravel-kit

---

## 📚 Related Documentation

- Laravel  
  https://laravel.com/docs/13.x/installation

- Livewire  
  https://livewire.laravel.com/docs/4.x/quickstart

- NativePHP  
  https://nativephp.com/docs/desktop/2/getting-started/introduction

- Laravel MongoDB  
  https://github.com/mongodb/laravel-mongodb

---

## 📄 License

This project is open-sourced software licensed under the MIT license.