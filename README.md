# NSBF WP Boilerplate

This is a [Salient child theme](https://themeforest.net/item/salient-responsive-multipurpose-theme/4363266), with:

- Laravel Mix - for frontend asset tooling
- Lots of developer friendly, handy tooling such as Dart Sass, eslint, editorconfig and more

## Requirements

For code consistency, please ensure you have the following installed in your environment/IDE:

- `editor config` (for `.editorconfig`) to share editor config for the project
- `eslint` for JS linting ([how to →](https://medium.com/pvtl/linting-for-react-native-bdbb586ff694#df4e))
- `npm` to compile frontend assets


---

## Commands

| Command | Description |
| --- | --- |

| `yarn dev` | Compiles/copies assets to /dist |
| `yarn watch` | Watches your directory and compiles/copies assets to /dist each time you press save on a SCSS or JS file. Uses LiveReload to automatically inject assets into any open browser. Note that it polls a live reload server on port 3000. |
| `yarn production`<br />or<br />`yarn prod` | Compiles/minifies/copies assets to /dist ready for production |
| `yarn lint-js` | Provides a report on your JS, against the code styleguide |

---

## Structure

| Directory          | Description |
|--------------------| --- |
| `/scss`              | Frontend assets (scss) working files |
| `/dist`            | Compiled frontend asset code (that you should not touch - but should be committed to the repo) |

---
