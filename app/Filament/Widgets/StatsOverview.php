<?php

namespace App\Filament\Widgets;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Enquiry;
use App\Models\Gallery;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $unsolved = Enquiry::where('is_solved', false)->count();

        return [
            Stat::make('Products', Product::count())
                ->description('Total products')
                ->descriptionIcon('heroicon-m-cube')
                ->color('primary'),

            Stat::make('Categories', Category::count())
                ->description('Product categories')
                ->descriptionIcon('heroicon-m-tag')
                ->color('primary'),

            Stat::make('Brands', Brand::count())
                ->description('Brand logos')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('primary'),

            Stat::make('Gallery', Gallery::count())
                ->description('Gallery images')
                ->descriptionIcon('heroicon-m-photo')
                ->color('primary'),

            Stat::make('Enquiries', $unsolved)
                ->description($unsolved > 0 ? 'Awaiting response' : 'All resolved')
                ->descriptionIcon($unsolved > 0 ? 'heroicon-m-exclamation-circle' : 'heroicon-m-check-circle')
                ->color($unsolved > 0 ? 'danger' : 'success'),
        ];
    }
}
