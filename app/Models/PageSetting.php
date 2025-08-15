<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'icon',
        'color_primary',
        'color_secondary',
        'color_tertiary',
        'background_color',
        'background_secondary_color',
        'header_color',
        'footer_color',
        'text_color',
    ];
}
