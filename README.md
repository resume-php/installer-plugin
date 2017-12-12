![resume-cli-installer-plugin](:hero)

# Resume Cli Installer Plugin

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-circleci]][link-circleci]
[![StyleCI][ico-styleci]][link-styleci]

This is the composer plugin used to install themes for [Resume Cli](https://github.com/svenluijten/resume-cli)
in the right place. 

## Index
- [Installation](#installation)
  - [Downloading](#downloading)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation
You'll have to follow a couple of simple steps to install this package.

### Downloading
Via [composer](http://getcomposer.org):

```bash
$ composer require sven/resume-cli-installer-plugin
```

Or add the package to your dependencies in `composer.json` and run
`composer update` on the command line to download the package:

```json
{
    "require": {
        "sven/resume-cli-installer-plugin": "^1.0"
    }
}
```

## Usage
This plugin isn't meant to be used independently from [Resume Cli](https://github.com/svenluijten/resume-cli).
The plugin does all the work behind the scenes to make everything about that work smoothly.

## Contributing
All contributions (pull requests, issues and feature requests) are
welcome. Make sure to read through the [CONTRIBUTING.md](CONTRIBUTING.md) first,
though. See the [contributors page](../../graphs/contributors) for all contributors.

## License
`sven/resume-cli-installer-plugin` is licensed under the MIT License (MIT). Please see the
[license file](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sven/resume-cli-installer-plugin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-green.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sven/resume-cli-installer-plugin.svg?style=flat-square
[ico-circleci]: https://img.shields.io/circleci/project/github/svenluijten/resume-cli-installer-plugin.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/:styleci/shield

[link-packagist]: https://packagist.org/packages/sven/resume-cli-installer-plugin
[link-downloads]: https://packagist.org/packages/sven/resume-cli-installer-plugin
[link-circleci]: https://circleci.com/gh/svenluijten/resume-cli-installer-plugin
[link-styleci]: https://styleci.io/repos/:styleci
