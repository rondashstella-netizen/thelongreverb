# The Long Reverb — Deployment Status

Status: REPOSITORY BUILD READY / GITHUB PAGES SETTING BLOCKS DEPLOYMENT  
Date: 2026-09-05 America/Los_Angeles  
Repository: `rondashstella-netizen/thelongreverb`  
Default branch: `main`  
Custom domain file: `CNAME -> thelongreverb.com`

## Current repository build

- The Long Reverb remains the world/archive site.
- `books.html` routes the current book architecture.
- `hidden-current.html` is the unnumbered nonfiction title page for **Hidden Currents**.
- `architecture-of-resonance.html` is retained as the unnumbered **Architecture of Resonance** development/archive page.
- `bardo-conditions.html` and `vera.html` are the two numbered Bardos pages.
- `chadpt.html` remains a related, unnumbered branch.
- Signal Tower Press remains the canonical public imprint.
- The homepage and book pages use the approved Bardo Conditions and Hidden Currents publication art already stored in the repository.
- The Vera page now uses recovered book identity and text-only presentation; no generic replacement cover is being presented as approved art.
- Hidden Currents now exposes the actual eight-movement book architecture and the Carriers / Declassified Listening Notes positioning rather than placeholder copy.

## Continuity locks

- **The Long Reverb is the unnumbered umbrella.**
- **Hidden Currents is unnumbered.** Do not label it Book 1, Volume 1, Hidden Current / 01, or use it to infer a Long Reverb Book 3.
- **Architecture of Resonance is unnumbered.** It remains development material unless Dash explicitly changes that status.
- **Bardos / 01: Bardo Conditions.**
- **Bardos / 02: Vera.**
- **No Bardos / 03 is assigned.** Do not manufacture a third number from adjacent projects.
- *ChadPt* is related and unnumbered.
- Signal Tower Press is the canonical imprint. `Signal House Press` and `Static Temple` are obsolete public-language errors.
- RonDashStella.com is the creator/store/services hub; TheLongReverb.com is the world/archive site.
- Radio/tuner-dial identity belongs to the Bardo signal world, not Hidden Currents.

## Bardo publication recovery status

A separate recovery map is now maintained in Google Drive as `BARDO_FINAL_RECOVERY_MAP_2026-09-05`. The recovered terminal movement resolves the apparent Chux/Myth conflict as **Chux Myth** and restores the Unit 7 / fan-still-running / next-receiver ending without overwriting the 2026-08-31 rebuilt source. Bardo Conditions remains Book 1 and uses the single approved cover supplied by Dash.

## Deployment infrastructure

Present in the repository:

- `.nojekyll`
- `.github/workflows/pages.yml`
- `CNAME`
- `robots.txt`
- `sitemap.xml`

The Pages workflow is configured to deploy pushes to `main`.

## Verified deployment blocker

The last independently inspected deployment attempts failed in **Configure Pages** before artifact upload or deployment. The log reported:

- `Get Pages site failed: Not Found`
- `Create Pages site failed: Resource not accessible by integration`

This is not a site-file, CNAME, title, or artwork failure. The repository needs GitHub Pages enabled in repository **Settings → Pages** with the build/deployment source set to **GitHub Actions**. Content commits do not bypass that repository-level setting.

## Shortest path to public serving

1. In this repository, enable GitHub Pages and select **GitHub Actions** as the deployment source.
2. Re-run the latest Pages workflow or push a no-content-change trigger after the setting is saved.
3. Require Configure Pages, artifact upload, and deploy to all pass.
4. Confirm `thelongreverb.com` resolves over HTTPS and the homepage plus one internal route return HTTP 200.

Do not alter the approved CNAME, cover art, manuscript state, or public purchase claims to work around this setting-level blocker unless a new deployment log identifies a different failure.

## Other remaining work

- Add direct store/release destinations only when those exact external destinations are available.
- Continue Bardo manuscript recovery/QA from the preserved source copy rather than replacing originals.
- Keep Vera cover/public-release metadata gated until final assets are approved.

## Operating rule

A stale file or old status note does not override the current production artifact or this corrected canon. Ordinary metadata/copy errors are edits, not reasons to stop the work.
