# NSBF Theme Template Map

## Main Template Files

### Single Post Templates
- `single-state_byway.php` - Template for individual state byway posts
  - Includes: `byway-map-state.php`
  - Includes: `byway-detail-sb.php`
  - Includes: `byway-overview-sb.php`
  - Includes: `byway-local-partners-sb.php`

- `single-national_byway.php` - Template for individual national byway posts
  - Similar structure to state byway but with national-specific components

- `single-state.php` - Template for state pages
  - Includes: `state-byway-list.php`
  - Includes: `state-seo-flexy.php`
  - Includes: `state-partners.php`

### Page Templates
Located in `/page-templates/`:
- `webinar-page-template.php` - Template for webinar pages
- `training-webinar-page-template.php` - Template for training webinar pages
- `newsletter-page-template.php` - Template for newsletter pages

## Partial Templates
Located in `/page-templates/partials/`:

### Byway Detail Components
- `byway-detail.php` - Main byway detail component
- `byway-detail-sb.php` - State byway detail component
- `byway-overview.php` - Byway overview section
- `byway-overview-sb.php` - State byway overview section
- `byway-story.php` - Byway story section
- `byway-story-sb.php` - State byway story section
- `byway-points.php` - Points of interest section
- `byway-directions.php` - Directions section
- `byway-itinerary.php` - Itinerary section

### Map Components
- `byway-map-state.php` - State byway map component
- `byway-map-national.php` - National byway map component

### List Components
- `state-byway-list.php` - List of state byways
- `national-byway-list.php` - List of national byways

### Partner Components
- `byway-local-partners.php` - Local partners section
- `byway-local-partners-sb.php` - State byway local partners section
- `state-partners.php` - State partners section

### Image Components
- `current-detail-image.php` - Current detail image component
- `current-detail-image-sb.php` - State byway current detail image
- `sub-detail-image.php` - Sub detail image component
- `sub-detail-image-sb.php` - State byway sub detail image

### Navigation Components
- `byway-back-button.php` - Back button component

### SEO Components
- `state-seo-flexy.php` - State SEO flexible content component

## Template Hierarchy

```
single-state_byway.php
├── byway-map-state.php
├── byway-detail-sb.php
├── byway-overview-sb.php
└── byway-local-partners-sb.php

single-national_byway.php
├── byway-map-national.php
├── byway-detail.php
├── byway-overview.php
└── byway-local-partners.php

single-state.php
├── state-byway-list.php
├── state-seo-flexy.php
└── state-partners.php
```

## Notes
- Files with `-sb` suffix are specifically for state byways
- The theme follows WordPress template hierarchy conventions
- All templates use TailwindCSS for styling
- Templates are organized in a modular way for easy maintenance
- Partial templates are used to maintain consistency across different byway types 