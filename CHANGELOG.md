# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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
- Linked `Nerd Fonts` *(https://www.nerdfonts.com/cheat-sheet)* to layout

#### Styles Added
- `--borderColor` now set to `var(--bodyFG)` to match `body { color: ... }`.
- Introduced `--important` and `--header` as aliases for `var(--warning)`.

---

## [1.0.0] - 2025-05-09 Initial Release

### Released
- Basic scaffolding released. Data untracked **(sorry!! 😅)**
