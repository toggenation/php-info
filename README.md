# PhpInfo plugin for CakePHP

Embeds the output of `phpinfo()` into a cake view using a custom Helper.

## Usage

After making sure the `PhpInfo` Plugin is loaded

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
### As an element

Use the element to pull in all of the above in one command

```php
// pulls in src/templates/element/php-info.php
<?= $this->element('PhpInfo.php-info');
```

## VSCode Type Hinting

Requires VSCode to have the `bmewburn.vscode-intelephense-client` extension from https://intelephense.com/

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
This package is published on https://packagist.org/ 

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```sh
composer require toggenation/php-info
```

## If you fork it and want to use your forked repo

You need to add to add the following `repositories` property to your `composer.json` and run `composer update`.

Or just add the `repositories` section and run composer require `your-git-hub-user-name/php-info:dev-master`

```json
  "license": "MIT",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/your-git-hub-user-name/php-info"
        }
    ],
    "require": {
         "toggenation/php-info": "dev-master"
    }
```

## Tests
None yet. To be added