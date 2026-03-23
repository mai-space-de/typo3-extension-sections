# maispace/sections — TYPO3 Sections

[![CI](https://github.com/mai-space-de/typo3-extension-sections/actions/workflows/ci.yml/badge.svg)](https://github.com/mai-space-de/typo3-extension-sections/actions/workflows/ci.yml)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-blue)](https://www.php.net/)
[![TYPO3](https://img.shields.io/badge/TYPO3-13.4%20LTS-orange)](https://typo3.org/)
[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)

A TYPO3 extension that provides a simple way to create sections for your website using [b13/container](https://github.com/b13/container) and the [Visual Editor](https://github.com/FriendsOfTYPO3/visual-editor).

**Requires:** TYPO3 13.4 LTS · PHP 8.2+

---

## Features

- **Section containers** — Define reusable content sections powered by `b13/container`
- **Visual Editor integration** — Edit sections comfortably with the Visual Editor backend module
- **TypoScript-driven configuration** — Control rendering via standard TYPO3 TypoScript setup
- **TYPO3 13.4 LTS ready** — Built for the current TYPO3 long-term support release

---

## Installation

```bash
composer require maispace/mai-sections
```

Include the TypoScript setup in your site package:

```typoscript
@import 'EXT:mai_sections/Configuration/TypoScript/setup.typoscript'
```

---

## Configuration

After installation, include the static TypoScript template in your site's root TypoScript template or site package. Section containers are registered automatically on TYPO3 bootstrap via `ext_localconf.php`.

---

## Development

Install development dependencies:

```bash
composer install
```

Run all linters:

```bash
composer lint:check
```

Auto-fix code style issues:

```bash
composer lint:fix
```

Run unit tests:

```bash
composer test:unit
```

---

## License

This extension is published under the [GNU General Public License v2.0](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html) or later.
