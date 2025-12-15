# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html)

---

## [1.16.0] - 2025-12-15
## Cleanup
- Moved some style files around
- Renamed some css variables
  - `--borderNav`, `--borderDanger`, `--borderClickable`, `--borderClickableHover`

---

## [1.15.0, 1] - 2025-10-29
### Updated
- `kit` to ask if `NativePHP` will be used
  - If `y`, it will `composer require nativephp/desktop` and then `php artisan native:install` automatically
- `kit-commit` to allow `-n` and `-v` to be optional
  - If `-v` is omitted, it will attempt to locate the next tag sequence and use that
- README.md

---

## [1.14.0] - 2025-10-29
### Updated
- Added theme colors for `--navBorder`, `--dangerBorder`, and `--alert`

### Updated
- Updated README.md

---

## [1.13.0] - 2025-10-29
### Added
- `chaoswd/laravel-mongo-models` package which adds command `php artisan make:mongo:model {name} --collection="{collectionName}"`

### Updated
- Updated README.md

---

## [1.12.2] - 2025-10-29
### Fixed
- Fixed `render()` method of `FormInput.php`

---

## [1.12.1] - 2025-10-29
### Deleted
- Removed command for making view and scss files due to using `Livewire` instead of views

### Updated
- Updated `config/filesystems.php` disks from `local` to `private` for location of `storage/app/private`
- Moved component `x-form.input` to `x-form-input` and updated blade to match

### Cleanup
- Updated README.md
- `.env.example`: cleared `APP_NAME` and updated `APP_URL`

---

## [1.11.2] - 2025-09-23
### Fix
- `_layout.scss ` `@use` connection to bootstrap
- `.env` and `.env.example` DB_HOST fixed to `127.0.0.1` instead of `mysql`

---

## [1.11.1] - 2025-09-18
### Cleanup
- Updated description to `MakeViewSCSSCommand.php`

## [1.11.0] - 2025-09-18
### Changes
- Moved `resources/styles/_layout.scss` to `resources/styles/views/_layout.scss` and `@forward` from inside `views.scss`

---

## [1.10.0] - 2025-09-03

### Added
- MongoDB Compatability
  - Added to `config.database`
  - Added (commented out) to `.env` and `.env.example`

---

## [1.9.4] - 2025-09-03

### Cleanup
- `kit` - Cleaned up flow - no end-user changes

---

## [1.9.3] - 2025-09-03

### Retracted
- Reversed changes to kit-commit as they did not function appropriately.

---

## [1.9.2] - 2025-09-03

### Added
- Console command for `php artisan make:vs NAME`. Creates a `view` and a `.scss` file. Automatically appends the new `.scss` file to `views/views.scss`.

### Updated
- `kit-commit` will auto-increment the 'patch' part of the most recent tagged version if the -v argument is not passed.

---

## [1.9.1] - 2025-09-03

### Added
- Component Form/Input as a wrapper for inputs that are preceeded by a label and succeeded by an `@error` block
- `Auth::check()` conditional in `routes/_dev.php` for logging out an authenticated user
- Console Command `php artisan make:mms NAME` to make a `model`,`migration`, and `seeder` with the given model `NAME`

### Combined
- Moved `resources/scripts/bootstrap.js` content to `resources/scripts/app.js`

### Deleted
- `resources/scripts/bootstrap.js`
- All `Form/*` components except the new `Input` one (blade and component files)

---

## [1.9.0] - 2025-09-03

### Updated
- Replaced old styles with new - same styles but different file structure

### Added
- Default route for `/` => `App\Livewire\Dashboard::class`

---

## [1.8.0] - 2025-07-29

### Removed
- Authentication related views, livewire, and styles.
- Routing files for `_admin.php`, `_auth.php`, `_guest.php`, and `_open.php`

---

## [1.7.3] - 2025-07-25

### Changed
- `kit` to include `php artisan storage:link` in its list of commands.
- `kit-commit` has a fallback for `-n` now to include the version with a leading `v`. `-name`/`-n` is optional.

---

## [1.7.2] - 2025-07-22

### Changed
- General Style Refractoring

---

## [1.7.1] - 2025-07-22

### Fixed
- Linked `routes/_guest.php` to `routes/web.php`

### Changed
- Updated styles for `login` and `register` views.
- Updated `login` view and component with commented out 'username' versions (current is e-mail).
  - **NOTE: Migration/Seeder/Factory/Model are not set for username. Adjust these as needed.**

---

## [1.7.0] - 2025-07-22

### Added (Routes)

- Files for each basic type of routing requirement `guest`, `auth`, `open`, `dev`, `console`

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

- `Form/Date`
- `Form/Number`
- `Form/Time`
- `Link`

### Updated (Laravel Components)

- `Form/Email`
- `Form/Password`
- `Form/Text`

---

## [1.4.0] - 2025-06-24

### Removed

- Existing styles except `views/*`
- Removed `resources/styles/views` directory including the `views.scss` file
  - `views` styles will now be partials inside `resources/styles/` and forwarded via `app.scss`

### Added

- Installed `cwd-scss` via `npm i cwd-scss`

### Changed

- `bootstrap.js` to include `import "cwd-scss";`
- Moved `resources/styles/views/_auth.scss` to `resources/styles/_auth.scss` and updated `app.scss` `@forward`
- `dashboard.blade.php` updated to include placeholder content
- `composer.json`-->`minimum-stability` set to `dev`

---

## [1.3.2] - 2025-06-24

### Added

- Git helper file `kit-commit` for automated add/commit/tag/push. [See usage in the README](README.md#git)

### Next Up

- Moving static styles to new library (to be built)

---

## [1.3.1] - 2025-06-24

### Removed from **Composer**

- `laravel/pail`
- `laravel/pint`
- `laravel/sail`

### Next Up

- Moving static styles to new library (to be built)

---

## [1.3.0] - 2025-06-24

### Changed

- Re-enabled `session` and `cache` via database (uncommented migrations)
- Updated `MAIL` configuration in `.env`
- Minor updates to `User` model, including added `username` field
- Moved user seeding logic to a dedicated `UserSeeder` and updated `DatabaseSeeder` accordingly
- Updated `UserFactory` to generate `username`
- Secured debugging routes to ensure `APP_ENV` is set to **local**, not **production**

### Next Up

- Migrating static styles to a new custom library

---

## [1.2.0] - 2025-06-04

### Changed

- Fixed migration name (removed `copy` from sessions table creation filename).
- Routes to include `guest`, `auth`, and open route sections.
- Fixed `form` styling to add `fieldset` with adjusted padding and borders

### Added

- `Login` Livewire component and blade
- `Register` Livewire component and blade
- Routes for `Login` and `Register`
- Routes for debugging: `/debug/clear` runs `php artisan optimize:clear` and logs any users out. Redirects to dashboard upon completion.

#### Laravel Components

- Added 3 `form` components: `E-Mail`, `Password`, `Text`
  - Each must have a `name` attribute passed
  - Optional attributes passed include: `id`, `model`, `label` (label is the text displayed within the `label` element)

---

## [1.1.0] - 2025-06-02

### Changed

- Moved Livewire layout back to `views/components/layouts/app.blade.php` from `views/layouts/app.blade.php`.
- Switched database driver from `sqlite` to `mysql`.

#### Styles Changed

- Updated `form` styling from `flex-column` to a 2x2 `grid` layout.
- Changed button styling from `.btn-*` to `.btn.*` for types like `primary`, `secondary`, `danger`, etc.

### Added

- `APP_TIMEZONE` support in `.env` and `config/app.php`, defaulting to `America/Denver`.
- Linked `Nerd Fonts` _(<https://www.nerdfonts.com/cheat-sheet>)_ to layout

#### Styles Added

- `--borderColor` now set to `var(--bodyFG)` to match `body { color: ... }`.
- Introduced `--important` and `--header` as aliases for `var(--warning)`.

---

## [1.0.0] - 2025-05-09 Initial Release

### Released

- Basic scaffolding released. Data untracked **(sorry!! 😅)**
