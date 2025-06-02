# NSBF WP Boilerplate

This is a [Salient child theme](https://themeforest.net/item/salient-responsive-multipurpose-theme/4363266), with:

- Laravel Mix - for frontend asset tooling
- Lots of developer friendly, handy tooling such as Dart Sass, eslint, editorconfig and more

## Requirements

Node use at least 16.18.0

- `nvm use 16.18.0`
- Have `.nvmrc` set for this value

This theme requires Composer

- `composer update` to update dependencies
- `composer install` to install dependencies

For code consistency, please ensure you have the following installed in your environment/IDE:

- `editor config` (for `.editorconfig`) to share editor config for the project
- `eslint` for JS linting ([how to →](https://medium.com/pvtl/linting-for-react-native-bdbb586ff694#df4e))
- `pnpm` (performant npm)to compile frontend assets

- Running `pnpm install` listed out of date dependencies
- Run `pnpm update packagename` to update them.
- Do not update `tailwindcss` as it would affect classes we currently use.

---

## Commands

| Command | Description |
| --- | --- |

| `pnpm run dev` | Compiles/copies assets to /dist |
| `pnpm run watch` | Watches your directory and compiles/copies assets to /dist each time you press save on a SCSS or JS file. Uses LiveReload to automatically inject assets into any open browser. Note that it polls a live reload server on port 3000. |
| `pnpm run production` or `pnpm run prod` | Compiles/minifies/copies assets to /dist ready for production |
| `pnpm run prettier` | Runs prettier on all files in the project |

---

## Structure

| Directory          | Description |
|--------------------| --- |
| `/scss`              | Frontend assets (scss) working files |
| `/dist`            | Compiled frontend asset code (that you should not touch - but should be committed to the repo) |

---

## WordPress-Compliant Directory Structure

```
theme-root/
├── template-parts/                  # WordPress standard for template parts
│   ├── byway/                       # Byway-specific components
│   │   ├── content/                 # Content components (with variations)
│   │   │   ├── detail.php
│   │   │   ├── detail-state.php
│   │   │   ├── directions.php
│   │   │   ├── itinerary.php
│   │   │   ├── overview.php
│   │   │   ├── overview-state.php
│   │   │   ├── points.php
│   │   │   ├── story.php
│   │   │   ├── story-state.php
│   │   │   └── visitor.php
│   │   ├── navigation/
│   │   │   └── back-button.php
│   │   └── state/                   # (Currently empty)
│   │
│   ├── map/
│   │   ├── national.php
│   │   └── state.php
│   │
│   ├── list/
│   │   ├── national.php
│   │   └── state.php
│   │
│   ├── partner/
│   │   ├── local.php
│   │   ├── local-state.php
│   │   └── state.php
│   │
│   ├── image/
│   │   ├── current.php
│   │   ├── current-state.php
│   │   ├── sub.php
│   │   └── sub-state.php
│   │
│   └── seo/
│       └── state-flexy.php
│
├── page-templates/                  # WordPress page templates
│   ├── webinar-page-template.php
│   ├── training-webinar-page-template.php
│   └── newsletter-page-template.php
│
├── inc/                             # Theme includes
│   └── template-functions.php
│
├── includes/partials/single-post/   # (Legacy or special-case partials)
│   └── post-content-nsbf-board.php
│
├── single-national_byway.php
├── single-state_byway.php
├── single-state.php
└── ...
```

**Legend:**
- `*-state.php`, `*-national.php`: Variations for state/national context.
- Comments after `#` explain directory purpose.
- Empty directories are noted.

## WordPress Template Hierarchy Compliance

1. **Single Post Templates**
   - Keep `single-state_byway.php`, `single-national_byway.php`, and `single-state.php` in theme root
   - These follow WordPress template hierarchy for custom post types

2. **Page Templates**
   - Keep in `page-templates/` directory
   - Follow WordPress page template naming convention
   - Include template name in file header:
     ```php
     /**
      * Template Name: Webinar Page.
      */
     ```

3. **Template Parts**
   - Use `get_template_part()` for includes:
     ```php
     // Old.
     require_once 'page-templates/partials/byway-detail-sb.php';
     
     // New (with optional arguments).
     nsbf_get_template_part( 'template-parts/byway/content/detail', 'state', [$args] );
     // Offers fallbacks and enables the ability to pass optional arguments to the template part.
     ```

## WordPress Coding Standards

1. **File Organization**
   - Follow WordPress template hierarchy
   - Use `template-parts/` for reusable components
   - Keep template files in theme root for hierarchy compliance
   - Use `inc/` for theme functions and helpers

2. **Naming Conventions**
   - Use lowercase with hyphens for file names
   - Use descriptive prefixes for template parts
   - Follow WordPress template part naming patterns

3. **Template Part Usage**
   - Use `get_template_part()` for better flexibility
   - Support template part variations
   - Follow WordPress template part hierarchy

## Implementation Steps

1. **Create Directory Structure**
   ```bash
   mkdir -p template-parts/{byway/{content,navigation,state},map,list,partner,image,seo}
   ```

2. **Move Components**
   - Move partials to appropriate `template-parts/` subdirectories
   - Update file names to follow WordPress conventions
   - Keep template files in theme root

3. **Update Includes**
   - Replace `require_once` with `get_template_part()`
   - Add template part variations where needed
   - Update template part paths

4. **Add Template Functions**
   - Create `inc/template-functions.php`
   - Add helper functions for template parts
   - Register template functions in `functions.php`

## Example Template Part Usage

```php
// In single-state_byway.php
get_header();
?>

<main class="container-wrap">
    <div class="container main-content">
        <?php
        get_template_part( 'template-parts/byway/content/detail', 'state' );
        get_template_part( 'template-parts/byway/content/overview', 'state' );
        get_template_part( 'template-parts/map/state' );
        get_template_part( 'template-parts/partner/local', 'state' );
        ?>
    </div>
</main>

<?php
get_footer();
```

## Benefits of WordPress-Compliant Structure

1. **Better Compatibility**
   - Follows WordPress template hierarchy
   - Uses standard WordPress functions
   - Better integration with core features

2. **Improved Maintainability**
   - Standard WordPress organization
   - Clear separation of concerns
   - Better template part management

3. **Enhanced Flexibility**
   - Support for template part variations
   - Better child theme support
   - Easier to extend and modify

4. **Better Performance**
   - WordPress template part caching
   - Optimized template loading
   - Better resource management

## Notes
- Maintain WordPress template hierarchy compliance
- Use WordPress template functions and hooks
- Follow WordPress coding standards
- Support child theme overrides
- Consider template part variations
- Use proper escaping and sanitization

## Handling Fallback Templates

### Option 1: Custom Template Loader Function
```php
// In inc/template-functions.php
function nsbf_get_template_part($template_path, $fallback_path = '') {
    // Try WordPress template part first
    if (locate_template($template_path . '.php')) {
        get_template_part($template_path);
        return;
    }
    
    // Fallback to direct include if specified
    if (!empty($fallback_path) && file_exists(get_template_directory() . '/' . $fallback_path)) {
        require_once get_template_directory() . '/' . $fallback_path;
    }
}
```

### Option 2: Template Part with Fallback
```php
// In single-state_byway.php
<?php
// Try template part first
get_template_part('template-parts/byway/content/detail', 'state');

// Fallback to direct include if needed
if (!function_exists('nsbf_byway_detail_content')) {
    require_once 'page-templates/partials/byway-detail-sb.php';
}
?>
```

## Implementation Strategy

1. **Gradual Migration**
   - Keep existing `require_once` statements initially
   - Add WordPress template parts alongside existing includes
   - Test both methods in parallel
   - Remove `require_once` only after confirming template parts work

2. **Template Part Structure**
   ```
   template-parts/
   ├── byway/
   │   ├── content/
   │   │   ├── detail.php          # Base template
   │   │   ├── detail-state.php    # State-specific variation
   │   │   └── detail-national.php # National-specific variation
   │   └── ...
   ```

3. **Fallback Handling**
   - Use template part variations for different contexts
   - Maintain direct includes as fallbacks
   - Add error logging for missing templates
   - Consider adding template existence checks

4. **Example Implementation**
   ```php
   // In single-state_byway.php
   <?php
   // Primary method: WordPress template part
   get_template_part('template-parts/byway/content/detail', 'state');
   
   // Fallback method: Direct include
   if (!function_exists('nsbf_byway_detail_content')) {
       require_once 'page-templates/partials/byway-detail-sb.php';
   }
   ?>
   ```

## Migration Steps

1. **Create Template Parts**
   - Create new template part structure
   - Copy existing partial content to template parts
   - Add template part variations

2. **Add Fallback Support**
   - Implement fallback handling
   - Add error logging
   - Test both methods

3. **Update Templates**
   - Add template part calls
   - Keep existing includes
   - Test thoroughly

4. **Remove Old Includes**
   - Only after confirming template parts work
   - Keep fallback mechanism
   - Update documentation

## Testing Strategy

1. **Template Part Testing**
   - Test each template part
   - Verify variations work
   - Check fallback behavior

2. **Fallback Testing**
   - Test direct includes
   - Verify error handling
   - Check logging

3. **Performance Testing**
   - Compare load times
   - Check memory usage
   - Verify caching

## Notes
- Maintain fallback functionality
- Use WordPress template parts where possible
- Keep direct includes as safety net
- Add proper error handling
- Document fallback behavior
- Consider performance implications

TO-DO:
1. Add documentation about the fallback system.