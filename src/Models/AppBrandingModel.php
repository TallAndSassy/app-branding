<?php

namespace TallAndSassy\AppBranding\Models;

use Illuminate\Database\Eloquent\Model;

class AppBrandingModel extends Model
{
    public $gaurded = [];// Defualt to no mass assignements
    public $fillable = ['name'];
    public $table = 'app-branding';

    public function getUpperCasedName() : string
    {
        return strtoupper($this->name);
    }
}
