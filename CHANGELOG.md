# Changelog

## 2.1 — Dark / light mode

### Added
- Built-in **dark / light mode switch** in the header (sun/moon button).
  - Follows the visitor's system preference by default (`prefers-color-scheme`).
  - Lets the visitor override it; the choice is remembered in `localStorage`.
  - An early inline script in `<head>` sets the theme before first paint, so
    there is no flash of the wrong colours.
  - Full dark palette built on CSS custom properties; brand green is kept and
    links/buttons shift to accessible contrast in dark mode.
- New file `js/theme-toggle.js`; new `CHANGELOG.md`.

### Changed
- `style.css` gains the dark token set and `--header-bg` / `--btn-bg` / `--btn-fg`
  tokens; version bumped to **2.1**.
- `header.php` adds the toggle button and the no-flash script.
- `functions.php` enqueues `theme-toggle.js`.

## 2.0 — Modernisation

A full visual refresh of the OSM blog theme, restyled in place on the Twenty Twelve
base. No content, menu or widget data is affected by upgrading.

### Added
- Modern, card-based post layout with a subtle hover-lift (inspired by opensource.guide).
- Sticky site header with the OSM logo, blog title + tagline, primary menu and an RSS pill.
- Home-page hero band with a faint topographic contour-line texture.
- Signature "map route line" hover underline on links and post titles.
- Skip-to-content link, visible keyboard focus rings, and `prefers-reduced-motion` support.
- Inline SVG RSS icon (no icon font).

### Changed
- `style.css` rewritten as a lean (~480-line) modern stylesheet using CSS custom
  properties, Flexbox/Grid and a `clamp()` type scale. Body text raised to 17px.
- `header.php`, `footer.php` and `sidebar.php` re-marked-up for the new layout; the
  OSM logo/RSS moved from the sidebar to the header.
- Theme version bumped to **2.0**; "Tested up to" raised; description updated.

### Removed
- Dead IE7/IE8 conditional markup in `header.php`.
- Front-end enqueue of the legacy Twenty Twelve `blocks.css` (WordPress core still
  provides block layout) — lighter pages.

### Kept (compatibility)
- `Text Domain: twentytwelve`, all translation files, and the RTL stylesheet.
- All template logic, hooks, post formats, comment handling, menu location
  (`primary`) and widget areas (`sidebar-1/2/3`).

## 1.0 — Original
- Harry Wood's lightly-customised Twenty Twelve theme for blog.openstreetmap.org.
