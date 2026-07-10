# The Long Reverb — Deployment Status

Status: CODE COMMITTED / PUBLIC DEPLOYMENT NOT YET VERIFIED  
Date: 2026-07-10 America/Los_Angeles  
Repository: `rondashstella-netizen/thelongreverb`  
Default branch: `main`  
Custom domain file: `CNAME -> thelongreverb.com`

## Completed in the current build

- Replaced the static holding page with a navigable Long Reverb homepage.
- Added a shared responsive visual system at `assets/site.css`.
- Added `books.html` with the locked series separation:
  - Hidden Current Series: *The Hidden Current* and *The Architecture of Resonance*.
  - Bardos Series: *Bardo Conditions* and *Vera*.
  - *ChadPt* remains unnumbered until editorial placement is approved.
- Added `archive.html` for Signal Ledger, visual memory, witness, listening, field notes, and Robin/Wren archive lanes.
- Added `signal-tower-press.html` with Signal Tower Press as the canonical public imprint.
- Added `contact.html` with the controlled fallback route `signal@rondashstella.com`.
- Added `sitemap.xml` and connected it from `robots.txt`.
- Added a project-specific `404.html`.
- Preserved approval gates around manuscripts, store claims, the Bardo Engine, private archives, proprietary audio methods, credentials, and unreleased assets.

## Continuity locks enforced

- The Long Reverb is the umbrella world, not one numbered book series.
- Hidden Current and Bardos numbering remain separate.
- Signal Tower Press is the public imprint.
- “Signal House Press” and “Static Temple Press” are superseded public names.
- Radio/tuner-dial identity belongs to Bardo signal language, not The Hidden Current.
- RonDashStella.com remains the creator/store/services hub; TheLongReverb.com remains the world/archive site.
- Ghost OS and Signal Bridge remain operating infrastructure, not homepage spectacle.

## Deployment infrastructure present

- `.nojekyll`
- `.github/workflows/pages.yml`
- `CNAME`
- `robots.txt`
- `sitemap.xml`

The Pages workflow is configured to deploy on pushes to `main`. The repository commits are confirmed. The current connector did not return a workflow run for the latest push, so deployment, DNS, and HTTPS are not represented as verified.

## Verification still required

1. Confirm GitHub Pages uses **GitHub Actions** as its build source.
2. Confirm the latest Pages workflow completed successfully.
3. Confirm DNS for `thelongreverb.com` points to GitHub Pages.
4. Confirm the custom domain resolves and HTTPS is active.
5. Confirm `signal@rondashstella.com` receives mail before promoting it broadly.
6. Add treated MASTER_ART assets only after source, rights, continuity, and provenance review.
7. Add public release/store links only after Dash explicitly approves the exact product and destination.

## Next safe build units

1. Route approved MASTER_ART hero and book assets into the five current pages.
2. Build the first three public Signal Ledger entries.
3. Build a controlled Listening Room shell without exposing protected 7OA/Coconut128 routing logic.
4. Add a newsletter or audience-capture route after the receiving account and privacy language are verified.
5. Build SignalTowerPress.com and RonDashStella.com as separate fronts rather than overloading this site.

## Public gate

This website structure may be deployed as public project footing. It does not publish manuscripts, KDP files, paid products, private archives, proprietary system details, or third-party copyrighted assets.
