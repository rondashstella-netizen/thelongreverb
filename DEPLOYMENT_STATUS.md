# The Long Reverb — Deployment Status

Status: REPOSITORY BUILD READY / ONE-TIME GITHUB PAGES SETTING STILL REQUIRED  
Date: 2026-09-22 America/Los_Angeles  
Repository: `rondashstella-netizen/thelongreverb`  
Default branch: `main`  
Custom domain file: `CNAME -> thelongreverb.com`

## Current repository state

- Static site files are present at repository root.
- `.nojekyll`, `CNAME`, `robots.txt`, and `sitemap.xml` are present.
- The failed custom GitHub Actions Pages workflow was removed on 2026-09-22.
- The intended publication method is now GitHub Pages **Deploy from a branch**, using `main` and `/(root)`.
- RonDashStella.com remains the creator / commercial hub. TheLongReverb.com remains the public book / signal / archive property.
- Signal Tower Press remains the canonical publishing imprint.

## 2026-09-22 visual/content refresh

The supplied Long Reverb, Bardo Conditions, and Signal Tower Press artboards were used as the visual direction lock for the public-facing refresh.

Updated in the repository:

- `index.html` — rebuilt around the dark teal / brass signal language, four-work presentation, Visual Signal Archive, Bardo Engine, and Signal Tower Press.
- `bardo-conditions.html` — rebuilt as a record / witness / signal page and no longer presents the repository placeholder Bardo cover as approved public art.
- `signal-tower-press.html` — expanded into a complete launch page for the imprint.
- `assets/site.css` — added responsive styling for the refreshed Long Reverb, Bardo Conditions, and Signal Tower Press pages.

The exact uploaded raster art has not been substituted into the repository asset folder yet. Until that binary asset transfer is completed, the refreshed pages use the existing repository signal artwork and CSS-built motifs rather than falsely presenting a placeholder as approved cover art.

## Book/publication cautions

- Bardo Conditions remains identified publicly as **Bardos / Book 1**.
- Vera remains in development/reconciliation.
- Hidden Currents remains a separate nonfiction title.
- No new cover should be generated or substituted for Bardo Conditions.
- No purchase link should be presented for Bardo Conditions until the publication artifact and checkout destination are actually ready.
- Do not infer new series numbering or rewrite current canon from old status notes.

## Verified deployment blocker

The former GitHub Actions workflow failed at **Configure Pages** before artifact upload or deployment:

- `Get Pages site failed: Not Found`
- `Create Pages site failed: Resource not accessible by integration`

The workflow has now been removed because this static site does not need a custom build pipeline.

## Shortest path to public serving

In GitHub for this repository:

1. **Settings → Pages**
2. Under **Build and deployment**, choose **Deploy from a branch**
3. Branch: **main**
4. Folder: **/(root)**
5. Save
6. Under **Custom domain**, set **thelongreverb.com**
7. Save and enable HTTPS when GitHub makes the option available

After those repository-level settings are saved, pushes to `main` will publish the root static site without the removed Actions workflow.

## Current proof

Branch `main` is four commits ahead of the workflow-removal baseline and contains the refreshed public files. Latest verified head after the refresh:

`ad1b5aec2749f420372314b6daf805298eb6307f`

Files changed in that refresh:

- `assets/site.css`
- `bardo-conditions.html`
- `index.html`
- `signal-tower-press.html`

## Next lane

1. Enable branch-based GitHub Pages for The Long Reverb.
2. Verify `https://thelongreverb.com/` and at least one internal route over HTTPS.
3. Create the standalone Signal Tower Press GitHub repository and publish its independent domain.
4. Continue the RonDashStella.com payment-hub build using only verified sell-now services and verified deliverables.
