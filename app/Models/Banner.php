<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'link',
        'active',
        'order',
        'start_date',
        'end_date',
    ];

    /**
     * Get the active banners.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function active()
    {
        return self::where('active', true)
            ->where(function ($query) {
                $query->whereNull('start_date')
                    ->orWhere('start_date', '<=', now());
            })
            ->where(function ($query) {
                $query->whereNull('end_date')
                    ->orWhere('end_date', '>=', now());
            });
    }
}
