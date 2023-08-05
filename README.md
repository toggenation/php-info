# PhpInfo plugin for CakePHP

Embeds the output of `phpinfo()` into a cake view.

## Usage

After making sure the PhpInfo module is loaded

```php
// in a view template
<?php

/**
 * @var App\View\AppView $this
 */

$this->loadHelper('PhpInfo.Info');
$this->Html->css('PhpInfo.styles', ['block' => 'css']);
?>

<h1>PHP Info Plugin - Demo</h1>

<?= $this->Info->display(); ?>

```
## VSCode Type Hinting

```php
// in src/View/AppView.php
/**
 * Application View
 *
 * Your application's default view class
 * @property \PhpInfo\View\Helper\InfoHelper $Info
 * @link https://book.cakephp.org/4/en/views.html#the-app-view
 */
class AppView extends View
{

```

In template:

```php
// add the @var line
<?php

/**
 * @var App\View\AppView $this
 */
```


## Installation
This package is not published on https://packagist.org/

You need to add to add the following `repositories` property to your `composer.json` and run `composer update`.

Or just add the `repositories` section and run composer require `toggenation/php-info:dev-master`

```json
  "license": "MIT",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/toggenation/php-info"
        }
    ],
    "require": {
         "toggenation/php-info": "dev-master"
    }
```

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```sh
composer require toggenation/php-info
```
