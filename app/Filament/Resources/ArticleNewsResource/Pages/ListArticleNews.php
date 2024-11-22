<?php

namespace App\Filament\Resources\ArticleNewsResource\Pages;

use Filament\Actions;
use App\Models\ArticleNews;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleNewsResource;

class ListArticleNews extends ListRecords
{
    protected static string $resource = ArticleNewsResource::class;

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
            ->badge(ArticleNews::query()->count()),
            
            'Featured' => Tab::make()
                ->icon('heroicon-m-check-circle')
                ->badgeColor('success')
                ->badge(ArticleNews::query()->where('is_featured', 'featured')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_featured', 'featured')),
                
            'Not Featured' => Tab::make()
                ->icon('heroicon-m-x-circle')
                ->badgeColor('danger')
                ->badge(ArticleNews::query()->where('is_featured', 'not_featured')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_featured', 'not_featured')),
        ];
    }
}
