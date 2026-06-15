<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = ['group', 'key', 'value_en', 'value_ar'];

    public static function getGroup(string $group): array
    {
        return static::where('group', $group)
            ->pluck('value_en', 'key')
            ->toArray();
    }

    public static function getAllGrouped(): array
    {
        return static::all()
            ->groupBy('group')
            ->toArray();
    }
}
