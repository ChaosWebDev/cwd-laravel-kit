# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).
---

## [1.6.0] - 2025-07-08

### Removed
- node_module `cwd-scss`

### Added
- `.scss` stylings back to `resources/styles`

### Changed
- `SESSION_DRIVER` to `file`
- `CACHE_STORE` to `file`

---

## [1.5.0] - 2025-06-24

### Added (Laravel Components)

-   `Form/Date`
-   `Form/Number`
-   `Form/Time`
-   `Link`

### Updated (Laravel Components)

-   `Form/Email`
-   `Form/Password`
-   `Form/Text`

---

## [1.4.0] - 2025-06-24

### Removed

-   Existing styles except `views/*`
-   Removed `resources/styles/views` directory including the `views.scss` file
    -   `views` styles will now be partials inside `resources/styles/` and forwarded via `app.scss`

### Added

-   Installed `cwd-scss` via `npm i cwd-scss`

### Changed

-   `bootstrap.js` to include `import "cwd-scss";`
-   Moved `resources/styles/views/_auth.scss` to `resources/styles/_auth.scss` and updated `app.scss` `@forward`
-   `dashboard.blade.php` updated to include placeholder content
-   `composer.json`-->`minimum-stability` set to `dev`

---

## [1.3.2] - 2025-06-24

### Added

-   Git helper file `kit-commit` for automated add/commit/tag/push. [See usage in the README](README.md#git)

### Next Up

-   Moving static styles to new library (to be built)

---

## [1.3.1] - 2025-06-24

### Removed from **Composer**

-   `laravel/pail`
-   `laravel/pint`
-   `laravel/sail`

### Next Up

-   Moving static styles to new library (to be built)

---

## [1.3.0] - 2025-06-24

### Changed

-   Re-enabled `session` and `cache` via database (uncommented migrations)
-   Updated `MAIL` configuration in `.env`
-   Minor updates to `User` model, including added `username` field
-   Moved user seeding logic to a dedicated `UserSeeder` and updated `DatabaseSeeder` accordingly
-   Updated `UserFactory` to generate `username`
-   Secured debugging routes to ensure `APP_ENV` is set to **local**, not **production**

### Next Up

-   Migrating static styles to a new custom library

---

## [1.2.0] - 2025-06-04

### Changed

-   Fixed migration name (removed `copy` from sessions table creation filename).
-   Routes to include `guest`, `auth`, and open route sections.
-   Fixed `form` styling to add `fieldset` with adjusted padding and borders

### Added

-   `Login` Livewire component and blade
-   `Register` Livewire component and blade
-   Routes for `Login` and `Register`
-   Routes for debugging: `/debug/clear` runs `php artisan optimize:clear` and logs any users out. Redirects to dashboard upon completion.

#### Laravel Components

-   Added 3 `form` components: `E-Mail`, `Password`, `Text`
    -   Each must have a `name` attribute passed
    -   Optional attributes passed include: `id`, `model`, `label` (label is the text displayed within the `label` element)

---

## [1.1.0] - 2025-06-02

### Changed

-   Moved Livewire layout back to `views/components/layouts/app.blade.php` from `views/layouts/app.blade.php`.
-   Switched database driver from `sqlite` to `mysql`.

#### Styles Changed

-   Updated `form` styling from `flex-column` to a 2x2 `grid` layout.
-   Changed button styling from `.btn-*` to `.btn.*` for types like `primary`, `secondary`, `danger`, etc.

### Added

-   `APP_TIMEZONE` support in `.env` and `config/app.php`, defaulting to `America/Denver`.
-   Linked `Nerd Fonts` _(https://www.nerdfonts.com/cheat-sheet)_ to layout

#### Styles Added

-   `--borderColor` now set to `var(--bodyFG)` to match `body { color: ... }`.
-   Introduced `--important` and `--header` as aliases for `var(--warning)`.

---

## [1.0.0] - 2025-05-09 Initial Release

### Released

-   Basic scaffolding released. Data untracked **(sorry!! 😅)**
