<?php

namespace TallAndSassy\AppBranding\Tests\Feature\Models;

use TallAndSassy\AppBranding\Models\AppBrandingModel;
use TallAndSassy\AppBranding\Tests\TestCase;

class AppBrandingModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model()
    {
        $model = AppBrandingModel::create(['name' => 'John']);
        $this->assertDatabaseCount('app-branding', 1);
        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }
}
