Phulp Underscore Filter
=======================

It's a third-party project that lets you filter out files that are prefixed by an
underscore which is a common practice to mark files that are included by other files.

## Installation

```bash
composer require nsrosenqvist/phulp-underscore-filter
```

## Usage

```php
<?php

use NSRosenqvist\Phulp\UnderscoreFilter;
use NSRosenqvist\Phulp\Assetic;

$phulp->task('styles', function ($phulp) {
    $phulp->src(['assets/styles/'], '/scss$/')
        ->pipe(new UnderscoreFilter)
        ->pipe(new Assetic([
            new \Assetic\Filter\ScssphpFilter,
            new \Assetic\Filter\CssMinFilter,
        ], 'theme.css'))
        ->pipe($phulp->dest('dist/styles/'));
});
```

## License
MIT
