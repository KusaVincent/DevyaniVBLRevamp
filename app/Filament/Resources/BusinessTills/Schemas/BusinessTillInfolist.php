<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class BusinessTillInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Till Information')
                    ->description('Till configuration and business assignment.')
                    ->icon(Heroicon::DevicePhoneMobile)
                    ->schema([
                        TextEntry::make('till')
                            ->label('Till Number')
                            ->weight('bold')
                            ->copyable()
                            ->icon(Heroicon::DevicePhoneMobile),
                        TextEntry::make('businessProfile.business_short_code')
                            ->label('Business')
                            ->badge()
                            ->icon(Heroicon::BuildingOffice),
                        TextEntry::make('for')
                            ->label('For')
                            ->placeholder('Not specified')
                            ->icon(Heroicon::User),
                        TextEntry::make('additional_details')
                            ->label('Additional Details')
                            ->placeholder('No additional details')
                            ->columnSpanFull(),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),

                Section::make('Record Information')
                    ->description('System record metadata.')
                    ->icon(Heroicon::InformationCircle)
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Created')
                            ->dateTime('M d, Y • H:i')
                            ->icon(Heroicon::Calendar),
                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime('M d, Y • H:i')
                            ->icon(Heroicon::Clock),
                    ])
                    ->columns()
                    ->columnSpanFull(),
            ]);
    }
}
