<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class CustomerReferenceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Customer Reference')
                    ->description('Customer identification and contact information.')
                    ->icon(Heroicon::UserCircle)
                    ->schema([
                        TextEntry::make('reference')
                            ->label('Reference')
                            ->weight('bold')
                            ->copyable()
                            ->icon(Heroicon::Hashtag),
                        TextEntry::make('name')
                            ->label('Customer Name')
                            ->icon(Heroicon::User),
                        TextEntry::make('mobile')
                            ->label('Mobile Number')
                            ->copyable()
                            ->icon(Heroicon::Phone),
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
