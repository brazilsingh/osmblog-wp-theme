# blog.openstreetmap.org wordpress theme (modernised)

A light, fast, accessible WordPress theme for **[blog.openstreetmap.org](https://blog.openstreetmap.org/)**, the main OpenStreetMap blog run by the Foundation.

This is the original `osmblog-wp-theme` (a lightly-customised *Twenty Twelve*) **restyled in place** , same OpenStreetMap identity and the same WordPress structure underneath, but with a modern, card-based layout inspired by [opensource.guide](https://opensource.guide/). Because the template logic, text domain, widgets, menus, post formats and comments are all unchanged, **your existing posts, pages, settings and widgets keep working** when you switch to it.

> **Upstream / official repo:** <https://github.com/osmfoundation/osmblog-wp-theme>

![Theme screenshot](screenshot.png)

---

## 1. What we did (summary)

| Decision | Choice |
|---|---|
| Approach | **Restyle in place** — keep OSM branding & colours, modernise layout + code |
| Scope | Keep it **OSM-specific** (for blog.openstreetmap.org), not a generic base |
| Design reference | [opensource.guide](https://opensource.guide/) — airy, card-based, friendly |
| Goal | **Fast & lightweight** but next-generation design, still installable in WordPress |
| Compatibility | Same `twentytwelve` text domain & template structure → **no data loss** |

In short: the blog now has a clean sticky header (OSM logo + title + menu + RSS), a welcoming hero on the home page, posts presented as cards with a subtle hover-lift, a comfortable reading column, and an OSM-green "route line" motif as the signature. No new web-fonts were added, and the old IE/legacy block CSS was dropped, so pages are lighter than before.

---

## 2. Features

**Design**

- **Modern card layout** — each post sits in a white card with a soft shadow and a gentle lift on hover, the way opensource.guide presents its guides.
- **Sticky site header** — OSM logo, blog title + tagline, the primary menu, and an RSS pill, all in one clean bar that stays in reach as you scroll.
- **Home hero** — a short welcome band with a faint topographic "contour-line" texture, shown only on the first page of the blog.
- **Signature motif: map "route" lines** — an OSM-green underline draws itself under links and post titles on hover (a path being traced on a map). It's the one bold flourish; everything else stays quiet.
- **Comfortable reading** — larger 17px body text, a ~44rem reading measure on single posts, and tidy styling for quotes, code, tables, captions, galleries and images.
- **Dark / light mode switch** — a sun/moon button in the header. It follows the visitor's system setting by default, lets them override it, remembers the choice (in their browser), and sets the theme before the page paints so there's no flash.

**Brand & colour**

- OSM logo green `#7EBC6F` as the single accent, with an accessible darker green `#2E6B27` for links/text on white and `#1D4A18` for hover.
- A barely-there green-tinted off-white canvas (`#F6F8F3`) that nods to map margins without being a generic cream.

**Performance & quality**

- **No external requests** — keeps the already-bundled, self-hosted **Open Sans**; adds no Google Fonts and no icon libraries (the RSS icon is inline SVG).
- **Lighter front end** — the legacy Twenty Twelve `blocks.css` is no longer enqueued (WordPress core still styles block layout), and dead IE-only markup was removed from the header.
- **Modern, lean CSS** — ~480 lines using CSS custom properties, Flexbox/Grid, and a `clamp()` type scale (down from the old ~1,850-line stylesheet).
- **Accessible** — visible keyboard focus rings, a skip-to-content link, `prefers-reduced-motion` support, semantic landmarks, and AA-contrast text.
- **Responsive** — two columns on desktop, single column with a collapsing hamburger menu on mobile.
- **Translation-ready & RTL-ready** — keeps the `twentytwelve` text domain, the bundled `.po/.mo` files, and the RTL stylesheet.

---

## 3. What changed, file by file

Only the visual layer and the header/footer markup were touched. **All loop logic, functions, hooks and widget areas were left intact**, which is what keeps your content safe.

| File | Change |
|---|---|
| `style.css` | **Rewritten** — new modern, lightweight stylesheet with a full **dark-mode** palette (kept the theme header block, **Version 2.1**, kept `Text Domain: twentytwelve`). |
| `header.php` | **Rewritten** — real sticky header (logo + title + menu + **dark/light toggle** + RSS) + home hero; an early no-flash theme script in `<head>`; removed dead IE7/IE8 markup; added a skip link. |
| `footer.php` | **Rewritten** — modern footer with OSM attribution + CC BY-SA note; kept the `twentytwelve_credits` hook and the privacy-policy link. |
| `sidebar.php` | **Simplified** — the logo/RSS moved to the header, so the sidebar now only renders the widget area (`sidebar-1`). |
| `js/theme-toggle.js` | **New** — wires up the dark/light button (persists the choice, respects the system setting). |
| `functions.php` | **Edits** — enqueues `theme-toggle.js`; bumped the stylesheet cache version; stopped enqueuing legacy `blocks.css`. Everything else unchanged. |
| `screenshot.png` | **Replaced** with a render of the new design (1200×900). |
| `CHANGELOG.md` | **New** — version history. |
| everything else | **Unchanged** — `content*.php`, `single.php`, `page.php`, `archive.php`, `comments.php`, `inc/`, `js/navigation.js`, `fonts/`, `languages/`, `images/`, etc. |

> The original files are preserved in the upstream repo's history, and you also still have your original `osmblog-wp-theme-master.zip`.

---

## 4. Install & activate — keeping all your data

**Your posts and pages live in the WordPress *database*, not in the theme.** Switching themes never deletes posts, pages, comments, media or users. The only things tied to a theme are **menus assigned to theme locations** and **widgets assigned to sidebars** — and because this theme keeps the *same* menu location (`primary`) and the *same* sidebar IDs (`sidebar-1/2/3`) as before, those reconnect automatically too.

Two safe ways to install, **all in the browser**:

### Option A — Upload the ZIP (simplest)

1. Log in to **WordPress Admin** → **Appearance → Themes**.
2. Click **Add New Theme → Upload Theme**.
3. Choose `osmblog-wp-theme.zip` and click **Install Now**.
4. **Don't click "Activate" yet** if this is the live site, test on staging first. On a staging site, click **Activate**.

### Option B — Live Preview first (zero risk)

1. After **Install Now**, click **Live Preview** instead of Activate.
2. The Customizer opens showing your real content in the new theme, **without** changing what visitors see.
3. Check the home page, a single post, an archive, and the menu. If happy, click **Publish/Activate** at the top.

### After activating — 2-minute checklist

- **Appearance → Menus**: confirm your menu is still assigned to **"Primary Menu."** (It should be; re-tick it if not.)
- **Appearance → Widgets**: confirm your sidebar widgets are still in **"Main Sidebar."**
- Open the **home page**, **one post**, and an **archive/category** page and glance over them.
- Hard-refresh once (`Ctrl/Cmd + Shift + R`) so the new CSS loads instead of a cached copy.

That's it, nothing else needs migrating.

---

## 6. Credits & licence

- Original theme: **Harry Wood**, a customised [Twenty Twelve](https://wordpress.org/themes/twentytwelve/).
- Modernisation: the OpenStreetMap community, inspired by the layout language of [opensource.guide](https://opensource.guide/).
- Fonts: **Open Sans** (Apache 2.0), self-hosted in `fonts/`.
- Theme licence: **GNU GPL v2 or later** — like WordPress itself.
- Blog content on blog.openstreetmap.org is licensed **CC BY-SA 2.0**.

*Use it to make something cool, have fun, and share what you've learned with others.*
