# The Long Reverb — Deployment Status

Status: RENDERED BUILD MERGED TO MAIN / PUBLIC DNS + HTTPS VERIFICATION PENDING  
Date: 2026-07-12 America/Los_Angeles  
Repository: `rondashstella-netizen/thelongreverb`  
Default branch: `main`  
Rendered-site merge: `8b10f8016fa5e5c68beffbc64f78e1dc840d8ece`  
Custom domain file: `CNAME -> thelongreverb.com`

## Current public build

- Rebuilt the homepage around the Long Reverb signal-archive visual direction.
- Added responsive desktop/mobile navigation and a shared visual system.
- Added `about.html`.
- Rebuilt `books.html` as the central book-routing page.
- Opened individual book rooms for:
  - `hidden-current.html`
  - `architecture-of-resonance.html`
  - `bardo-conditions.html`
  - `vera.html`
- Added the related, unnumbered `chadpt.html` branch.
- Rebuilt `archive.html` as the Visual Archive entry.
- Added `bardo-engine.html` as a controlled system page.
- Rebuilt `signal-tower-press.html` and `contact.html`.
- Added the signal mark, procedural hero artwork, responsive script, 404 page, and updated sitemap.

## Continuity locks enforced

- The Long Reverb is the unnumbered umbrella.
- Hidden Current Series: Book 1 is *The Hidden Current*; Book 2 is *The Architecture of Resonance*.
- Bardos Series: Book 1 is *Bardo Conditions*; Book 2 is *Vera*.
- *ChadPt* remains related and unnumbered; it is not Bardos Book 1.
- Signal Tower Press is the canonical public imprint.
- “Signal House Press” is obsolete in current public copy.
- Radio/tuner-dial identity belongs to the Bardo signal world, not The Hidden Current.

## Deployment infrastructure

- `.nojekyll`
- `.github/workflows/pages.yml`
- `CNAME`
- `robots.txt`
- `sitemap.xml`

The Pages workflow is configured to deploy on pushes to `main`. The rendered build is confirmed on `main`. The connector does not expose the push-triggered Pages run in this session, so public DNS resolution, the final Pages job, and HTTPS are not represented as verified yet.

## Remaining verification

1. Confirm GitHub Pages is using GitHub Actions as its build source.
2. Confirm the latest Pages workflow completed successfully.
3. Confirm `thelongreverb.com` resolves to GitHub Pages and HTTPS is active.
4. Perform a browser QA pass on desktop and mobile.
5. Replace procedural web artwork with approved MASTER_ART only after source, rights, continuity, and provenance review.
6. Add store/release links only after the exact product destinations are approved.

## Editorial pass

The public text is cleaned enough for routing and structure. Biography, final synopses, release claims, excerpts, and product language still require page-by-page editorial approval before promotion.