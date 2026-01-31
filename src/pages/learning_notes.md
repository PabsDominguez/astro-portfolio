# Astro Portfolio - Learning Notes

## Project Overview
Building a personal portfolio website using Astro, learning modern web development workflow.

**Tech Stack:**
- Astro (framework)
- Tailwind CSS (styling)
- Cursor (IDE)
- GitHub (version control)
- Vercel (hosting)
- Node.js v20.11.1

**Domain:** pabsdominguez.com (Namecheap) → will point to Vercel

---

## The Modern Deployment Flow
```
YOUR COMPUTER:
Write code in Cursor
    ↓
Commit to Git (local)
    ↓
Push to GitHub
    ↓
GITHUB:
Stores your source code (backup + version control)
    ↓
VERCEL (triggered automatically):
1. Detects new push
2. Pulls your code
3. Runs npm install (gets dependencies)
4. Runs npm run build (creates static files)
5. Deploys static files to their CDN
    ↓
VISITOR'S BROWSER:
Loads plain HTML/CSS/JS (super fast!)
```

---

## Key Concepts Learned

### What is Node.js?
- JavaScript runtime for your computer (runs JS outside browsers)
- Powers dev servers, build tools, command-line apps
- Required to run Astro locally

### What is npm?
- **Registry:** Online library of JavaScript packages (npmjs.com)
- **CLI tool:** Downloads and manages packages for your project
- Installed automatically with Node.js

### Build Time vs Runtime
- **Build time:** Astro processes `.astro` files → outputs static HTML/CSS/JS (happens once)
- **Runtime:** Static files are served to visitors (no Node.js needed on server!)
- **Astro = Static Site Generator (SSG)** by default

### Hot Module Replacement (HMR)
- Dev server auto-updates browser when you save files
- No manual refresh needed
- Instant feedback while coding

---

## Phase 1: Local Development Setup ✅

### What we did:
1. ✅ Verified Node.js installation (v20.11.1)
2. ✅ Created project folder: `/Users/pablodominguez/Stuff/Projects/astro-portfolio`
3. ✅ Initialized Astro project with minimal template
4. ✅ Chose minimal template (to learn from scratch)
5. ✅ Installed dependencies
6. ✅ Initialized Git repository
7. ✅ Started dev server (`npm run dev`)
8. ✅ Viewed site at `http://localhost:4321/`
9. ✅ Made first edit to `src/pages/index.astro`
10. ✅ Experienced live reload/HMR

### Key files:
- `src/pages/index.astro` - Homepage (becomes `/` route)
- `package.json` - Project dependencies and scripts
- `astro.config.mjs` - Astro configuration
- `node_modules/` - Downloaded packages (don't commit to Git!)

### Commands learned:
```bash
node --version              # Check Node.js version
npm create astro@latest     # Create new Astro project
npm run dev                 # Start development server
pwd                         # Print working directory
cd [path]                   # Change directory
```

---

## Phase 2: Version Control & Deployment Pipeline
*Coming next...*

**Goals:**
- Push code to GitHub
- Connect Vercel to GitHub
- Deploy site automatically
- Understand Git workflow

---

## Phase 3: Build Your First Real Page
*To be documented...*

---

## Phase 4: Domain & Content Management
*To be documented...*

---

## Questions & Insights

### Why push source code to Vercel instead of building locally?
- **Automation:** Push to GitHub → auto-deploy
- **Consistency:** Standardized build environment
- **Collaboration:** Team can build from same source
- **Reliability:** Build logs, easy rollbacks, preview deployments
- **Modern workflow:** Industry standard (CI/CD)

*Note: You COULD build locally and upload static files, but automated deployment is more scalable and professional.*

---

## Useful Resources
- [Astro Docs](https://docs.astro.build/en/getting-started/)
- [Cursor Docs](https://cursor.com/docs)
- [Vercel Docs](https://vercel.com/docs)

---

*Last updated: Phase 1 complete*