<?php


namespace TallAndSassy\AppBranding\Tests\Feature\Commands;

class AppBrandingCommandTest extends \TallAndSassy\AppBranding\Tests\TestCase
{
    /** @test */
    public function test_command_works()
    {
        $this->artisan('tassy:somecommand')->assertExitCode(0);
        $this->artisan('tassy:somecommand')->expectsOutput('TallAndSassy/AppBranding/hw/tbd');
    }
}
