<?php


namespace TallAndSassy\AppBranding\Tests\Feature\Http\Controllers;

class AppBrandingControllerTest extends \TallAndSassy\AppBranding\Tests\TestCase
{
    /** @test */
    public function global_urls_returns_ok()
    {
        // Test hard-coded routes...
        $this
            ->get('/grok/TallAndSassy/AppBranding/sample_string')
            ->assertOk()
            ->assertSee('Hello AppBranding string via global url.');
        $this
            ->get('/grok/TallAndSassy/AppBranding/sample_blade')
            ->assertOk()
            ->assertSee('Hello AppBranding from blade in TallAndSassy/AppBranding/groks/sample_blade');
        $this
            ->get('/grok/TallAndSassy/AppBranding/controller')
            ->assertOk()
            ->assertSee('Hello AppBranding from: TallAndSassy\AppBranding\Http\Controllers\AppBrandingController::sample');
    }


    /** @test */
    public function prefixed_urls_returns_ok()
    {
        // Test user-defined routes...
        // Reproduce in routes/web.php like so
        //  Route::tassy('staff');
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppBranding/string
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppBranding/blade
        //  http://test-tallandsassy.test/staff/TallAndSassy/AppBranding/controller
        $userDefinedBladePrefix = $this->userDefinedBladePrefix; // user will do this in routes/web.php Route::tassy('url');

        // string
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppBranding/sample_string")
            ->assertOk()
            #->assertSee('hw(TallAndSassy\AppBranding\Http\Controllers\AppBrandingController)');
        ->assertSee('Hello AppBranding string via blade prefix');

        // blade
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppBranding/sample_blade")
            ->assertOk()
            ->assertSee('Hello AppBranding from blade in TallAndSassy/AppBranding/groks/sample_blade');

        // controller
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/AppBranding/controller")
            ->assertOk()
            ->assertSee('Hello AppBranding from: TallAndSassy\AppBranding\Http\Controllers\AppBrandingController::sample');
    }
}
