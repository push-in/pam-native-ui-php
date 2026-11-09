<div align="center">

<picture>
  <source media="(prefers-color-scheme: dark)" srcset=".github/assets/banner-dark.svg">
  <img src=".github/assets/banner-light.svg" width="880" alt="pam-native-ui-php: The PAM Native UI 1.0.7 Composer distribution. Development continues in pam-native-ui.">
</picture>

**Use [push-in/pam-native-ui](https://github.com/push-in/pam-native-ui): it is where PAM Native UI is developed and released.**<br>
This repository holds the PAM Native UI 1.0.7 Composer distribution (`VERSION` 1.0.7). Packagist's `pushinbr/pam-native-ui` now resolves from push-in/pam-native-ui, which ships the newer releases.

![PHP 8.5](https://img.shields.io/badge/php-8.5-777bb4)
[![CI](https://img.shields.io/github/actions/workflow/status/push-in/pam-native-ui-php/verify.yml?branch=main&label=ci)](https://github.com/push-in/pam-native-ui-php/actions/workflows/verify.yml)
[![License](https://img.shields.io/github/license/push-in/pam-native-ui-php?color=1f6feb)](LICENSE)

[Install](#install) · [Contents](#contents) · [Docs](#docs) · [Current repository](https://github.com/push-in/pam-native-ui)

</div>

<a id="install"></a>
## <picture><img src=".github/assets/icons/terminal.svg" width="22" height="22" alt=""></picture> Install

Install the current package inside a PAM Native project:

```sh
pam init my-app --template native-ui
cd my-app
pam dev
```

Or add it to an existing PAM Native project with `pam composer require pushinbr/pam-native-ui`. See the [PAM Native UI README](https://github.com/push-in/pam-native-ui#readme).

<a id="platform-support"></a>
## <picture><img src=".github/assets/icons/grid.svg" width="22" height="22" alt=""></picture> Platform support

| Platform | Support | Notes |
| --- | --- | --- |
| Android | API 26+ | From this repo's `pam-native.plugin.json` (1.0.7) |
| iOS | 15.0+ | From `pam-native.plugin.json` |
| PAM Native | 1.0.0 to < 2.0.0 | From `pam-native.plugin.json`; PHP 8.5+ |

<a id="contents"></a>
## <picture><img src=".github/assets/icons/box.svg" width="22" height="22" alt=""></picture> What is in this repository

The source of the 1.0.7 distribution: the PHP library (`src/`), the Android (`android/`) and iOS (`ios/`, `Package.swift`) renderers, the kitchen-sink example, tests, benchmarks and documentation (`docs/`). The README of that release is preserved verbatim in **[docs/distribution-readme.md](docs/distribution-readme.md)**; nothing was removed. Changes are listed in [CHANGELOG.md](CHANGELOG.md).

Issues and contributions go to [push-in/pam-native-ui](https://github.com/push-in/pam-native-ui/issues).

<a id="docs"></a>
## <picture><img src=".github/assets/icons/book.svg" width="22" height="22" alt=""></picture> Docs

- [Previous README (1.0.7 distribution)](docs/distribution-readme.md)
- [PAM Native UI (current)](https://github.com/push-in/pam-native-ui)
- [PAM Native overview](https://push-in.github.io/pam-docs/native/overview/)
- [Changelog](CHANGELOG.md)

<a id="pam-ecosystem"></a>
## <picture><img src=".github/assets/icons/plug.svg" width="22" height="22" alt=""></picture> Part of the PAM ecosystem

<p align="center"><picture>
  <source media="(prefers-color-scheme: dark)" srcset=".github/assets/pam-wordmark-dark.svg">
  <img src=".github/assets/pam-wordmark-light.svg" height="56" alt="PAM">
</picture></p>

PAM runs PHP natively on servers, desktops and phones. This repository is one piece of it.

| [**PAM**](https://github.com/push-in/pam) | [**PAM Desktop**](https://github.com/push-in/pam-desktop) | [**PAM Native**](https://github.com/push-in/pam-native) | [**Ecosystem**](https://github.com/push-in/pam#ecosystem) |
| --- | --- | --- | --- |
| the runtime and CLI | native desktop apps in PHP | native Android and iOS apps in PHP | every official package and plugin |

<sub>Docs: [push-in.github.io/pam-docs](https://push-in.github.io/pam-docs/introduction/) · [Issues](https://github.com/push-in/pam-native-ui-php/issues)</sub>

<p align="center"><sub><a href="LICENSE">Apache-2.0</a>, see also <a href="LICENSING.md">LICENSING.md</a> · Made in Brazil by Pushin</sub></p>
