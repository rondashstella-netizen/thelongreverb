# The Long Reverb — Deployment Status

Status: REPOSITORY BUILD READY / GITHUB PAGES SETTING BLOCKS DEPLOYMENT  
Date: 2026-09-04 America/Los_Angeles  
Repository: `rondashstella-netizen/thelongreverb`  
Default branch: `main`  
Custom domain file: `CNAME -> thelongreverb.com`

## Current repository build

- The Long Reverb remains the world/archive site.
- `books.html` routes the current book architecture.
- `hidden-current.html` is the unnumbered nonfiction title page for *The Hidden Current*.
- `architecture-of-resonance.html` is retained as an unnumbered development/archive page and is not part of a locked public sequence.
- `bardo-conditions.html` and `vera.html` are the two numbered Bardos pages.
- `chadpt.html` remains a related, unnumbered branch.
- Signal Tower Press remains the canonical public imprint.
- The homepage now features the approved Bardo Conditions and Hidden Current publication art already stored in the repository.

## Continuity locks

- **The Long Reverb is the unnumbered umbrella.**
- **The Hidden Current is unnumbered.** Do not label it Book 1, Volume 1, Hidden Current / 01, or use it to infer a Long Reverb Book 3.
- **The Architecture of Resonance is not assigned a public book number.** It remains development material unless Dash explicitly changes that status.
- **Bardos / 01: Bardo Conditions.**
- **Bardos / 02: Vera.**
- **No Bardos / 03 is assigned.** Do not manufacture a third number from adjacent projects.
- *ChadPt* is related and unnumbered.
- Signal Tower Press is the canonical imprint. `Signal House Press` and `Static Temple` are obsolete public-language errors.
- RonDashStella.com is the creator/store/services hub; TheLongReverb.com is the world/archive site.
- Radio/tuner-dial identity belongs to the Bardo signal world, not The Hidden Current.

## Deployment infrastructure

Present in the repository:

- `.nojekyll`
- `.github/workflows/pages.yml`
- `CNAME`
- `robots.txt`
- `sitemap.xml`

The Pages workflow is configured to deploy pushes to `main`.

## Verified blocker — 2026-09-04

Latest deployment run: `33872078715` on commit `48e363653a168c8220e42c6f0e0d9a7f8d720989` (`Feature approved book art on homepage`).

Verified step state:

- Checkout: **PASS**
- Configure Pages: **FAIL**
- Upload artifact: **SKIPPED**
- Deploy to GitHub Pages: **SKIPPED**

The Configure Pages log reports:

- `Get Pages site failed: Not Found`
- `Create Pages site failed: Resource not accessible by integration`

This is not a site-file, CNAME, or artwork failure. The repository still needs GitHub Pages enabled in repository **Settings → Pages** with the build/deployment source set to **GitHub Actions**. The workflow token can deploy Pages after the site exists, but the current integration cannot create/enable the Pages site itself.

## Shortest path to public serving

1. In this repository, enable GitHub Pages and select **GitHub Actions** as the deployment source.
2. Re-run workflow `33872078715` or push a no-content-change trigger after the setting is saved.
3. Require Configure Pages, artifact upload, and deploy to all pass.
4. Confirm `thelongreverb.com` resolves over HTTPS and the homepage plus one internal route return HTTP 200.

Do not alter the approved site files, CNAME, cover art, manuscript state, or public purchase claims to work around this blocker unless a new deployment log identifies a different failure.

## Other remaining work

- Continue replacing procedural art only where the final approved source/usage choice is already established.
- Add direct store/release destinations only when those exact external destinations are available.

## Operating rule

A stale file or old status note does not override the current production artifact or this corrected canon. Ordinary metadata/copy errors are edits, not reasons to stop the work.
