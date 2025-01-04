<?php

namespace App\Filament\Resources\BannerAdvertisementResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BannerAdvertisementResource;

class EditBannerAdvertisement extends EditRecord
{
    protected static string $resource = BannerAdvertisementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
