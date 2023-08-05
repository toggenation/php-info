<?php
declare(strict_types=1);

namespace PhpInfo\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use PhpInfo\View\Helper\InfoHelper;

/**
 * PhpInfo\View\Helper\InfoHelper Test Case
 */
class InfoHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PhpInfo\View\Helper\InfoHelper
     */
    protected $Info;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Info = new InfoHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Info);

        parent::tearDown();
    }
}
