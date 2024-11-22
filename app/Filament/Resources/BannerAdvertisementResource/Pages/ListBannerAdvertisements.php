<?php

namespace App\Filament\Resources\BannerAdvertisementResource\Pages;

use Filament\Actions;
use App\Models\BannerAdvertisement;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BannerAdvertisementResource;

class ListBannerAdvertisements extends ListRecords
{
    protected static string $resource = BannerAdvertisementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make()
                ->badge(BannerAdvertisement::query()->count()),

            'Active' => Tab::make()
                ->icon('heroicon-m-check-circle')
                ->badgeColor('success')
                ->badge(BannerAdvertisement::query()->where('is_active', 'active')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_active', 'active')),

            'Not Active' => Tab::make()
                ->icon('heroicon-m-x-circle')
                ->badgeColor('danger')
                ->badge(BannerAdvertisement::query()->where('is_active', 'not_active')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_active', 'not_active')),
        ];
    }
}
