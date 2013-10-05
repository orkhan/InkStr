InkStr
======

Generate a URL friendly "slug" from a given string. (Skips ASCII)

## Installation

First, you'll need to add the package to the `require` attribute of your `composer.json` file:

```json
{
    "require": {
        "ink/ink-str": "dev-master"
    },
}
```

Afterwards, run `composer update` from your command line.

Then, add `'Ink\InkStr\InkStrServiceProvider',` to the list of service providers in `app/config/app.php`
and add `'InkStr' => 'Ink\InkStr\InkStr'` to the list of class aliases in `app/config/app.php`.

## Using

```php

$title = 'Türkçe yazılım. Azəricə yazılım';
$slug  = InkStr::slug($title);

echo $slug; // Returns "türkçe-yazılım-azəricə-yazılım"
```

## Copyright and License

InkTranslatable was written by Orkhan Maharramli and released under the MIT License. See the LICENSE file for details.

Copyright 2013 Orkhan Maharramli