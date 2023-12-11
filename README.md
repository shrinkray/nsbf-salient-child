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
