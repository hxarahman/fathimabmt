<?php

if (!function_exists('t')) {
    function t(string $group, string $key): string
    {
        static $translations = null;

        if ($translations === null) {
            $translations = \App\Models\Translation::all()
                ->keyBy(fn ($item) => "{$item->group}.{$item->key}");
        }

        $isArabic = request()->cookie('Language') === 'Arabic';
        $entry = $translations["{$group}.{$key}"] ?? null;

        if (!$entry) {
            return "{$group}.{$key}";
        }

        return $isArabic ? $entry->value_ar : $entry->value_en;
    }
}

if (!function_exists('isArabic')) {
    function isArabic(): bool
    {
        return request()->cookie('Language') === 'Arabic';
    }
}
