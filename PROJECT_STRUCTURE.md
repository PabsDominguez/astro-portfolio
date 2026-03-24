# Project Structure

```
maxpetretta.com/
├── src/
│   ├── pages/          ← URL routes (each file = a page)
│   ├── components/     ← Reusable UI pieces
│   ├── layouts/        ← Page shell (header + footer wrapper)
│   ├── content/        ← Blog posts + images
│   ├── lib/            ← Config and utility functions
│   └── styles/         ← Global CSS
├── public/             ← Static files (favicons, robots.txt)
└── astro.config.ts     ← Framework settings
```

Pages are the rooms, layout is the building shell, components are the furniture, and content is what goes on the walls.

---

## Key files

| File | What it does |
|---|---|
| `src/lib/constants.ts` | Site-wide config: domain name and theme colors. Start here. |
| `src/layouts/Layout.astro` | Page shell — wraps every page. Contains `<head>`, SEO meta tags, Open Graph, structured data (JSON-LD), header, footer, and analytics. |
| `src/components/Header.astro` | Site title/logo and dark/light mode toggle. |
| `src/pages/index.astro` | Homepage: Now blurb, recent blog posts, Projects, Experience. |
| `src/components/Projects.astro` | Hardcoded array of projects — icon, name, description, link. |
| `src/components/Experiences.astro` | Hardcoded array of work history — title, dates, link. |
| `src/components/Footer.astro` | Hardcoded array of social/contact links. |
| `src/content/posts/` | Blog posts as `.mdx` files. Frontmatter (`---`) sets title, date, description. |

---

## What to change to make it yours — in order

| Priority | File | What to change |
|---|---|---|
| 1 | `src/lib/constants.ts` | `domain` and `url` |
| 2 | `src/layouts/Layout.astro` | Default title/description, your name in `personSchema`, social links in `sameAs`, Twitter handles |
| 3 | `src/components/Header.astro` | Site name |
| 4 | `src/components/Footer.astro` | `socials` array — email and links |
| 5 | `src/pages/index.astro` | "Now" section text, role, location |
| 6 | `src/components/Projects.astro` | Your own projects |
| 7 | `src/components/Experiences.astro` | Your work history |
| 8 | `src/content/posts/` | Delete existing posts, write your own |
| 9 | `public/favicons/` | Your own favicon |

---

## Watch out

`src/layouts/Layout.astro` line 151 has a **Cloudflare Analytics token** hardcoded to the original owner's account. Remove that `<script>` tag or replace the token with your own. Vercel Speed Insights (line 148) is fine — it uses your own Vercel account automatically.
