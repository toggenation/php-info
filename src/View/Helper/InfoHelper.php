<?php

declare(strict_types=1);

namespace PhpInfo\View\Helper;

use Cake\View\Helper;

/**
 * Info helper
 */
class InfoHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected $_defaultConfig = [];

    public function display()
    {
        ob_start();
        // to limit output use the INFO_ constants
        // and a `|' e.g.:
        // INFO_LICENSE | INFO_CREDITS
        phpinfo();
        $phpinfo = ob_get_contents();
        ob_end_clean();

        $phpinfo = preg_replace(
            '%^.*<div class="center">(.*)</div>.*$%ms',
            '$1',
            $phpinfo
        );

        $phpinfo = <<<HERE
        <div id="phpinfo">
        $phpinfo
        </div>
        HERE;

        return $phpinfo;
    }
}
