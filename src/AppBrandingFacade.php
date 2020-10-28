<?php

namespace TallAndSassy\AppBranding;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TallAndSassy\AppBranding\AppBranding
 */
class AppBrandingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'app-branding';
    }
}
