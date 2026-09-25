<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessProfiles\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class BusinessProfileInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->schema([
                        Section::make('Business Profile')
                            ->description('Business identity and account configuration.')
                            ->icon(Heroicon::BuildingOffice)
                            ->schema([
                                TextEntry::make('business_short_code')
                                    ->label('Business Short Code')
                                    ->copyable()
                                    ->weight('bold')
                                    ->icon(Heroicon::Hashtag),
                                TextEntry::make('type')
                                    ->label('Business Type')
                                    ->badge()
                                    ->icon(Heroicon::BuildingOffice),
                                TextEntry::make('username')
                                    ->label('Username')
                                    ->copyable()
                                    ->icon(Heroicon::User),
                                TextEntry::make('credit_account')
                                    ->label('Credit Account')
                                    ->copyable()
                                    ->icon(Heroicon::Banknotes),
                                TextEntry::make('active')
                                    ->badge(),
                            ])
                            ->columns()
                            ->columnSpan(2),

                        Section::make('Authentication')
                            ->description('Integration authentication status.')
                            ->icon(Heroicon::LockClosed)
                            ->schema([
                                TextEntry::make('username')
                                    ->label('Username')
                                    ->copyable()
                                    ->icon(Heroicon::User),
                                TextEntry::make('password')
                                    ->label('Password')
                                    ->formatStateUsing(fn ($state): string => filled($state) ? '••••••••' : 'Not configured'
                                    )
                                    ->icon(Heroicon::Key),
                                TextEntry::make('secret_key')
                                    ->label('Secret Key')
                                    ->formatStateUsing(fn ($state): string => filled($state) ? '••••••••••••••••' : 'Not configured'
                                    )
                                    ->icon(Heroicon::LockClosed),
                            ])
                            ->columnSpan(1),

                        Section::make('SAP Configuration')
                            ->description('SAP integration and transaction settings.')
                            ->icon(Heroicon::Server)
                            ->schema([
                                TextEntry::make('sap_file')
                                    ->label('SAP File')
                                    ->copyable()
                                    ->icon(Heroicon::Document),
                                TextEntry::make('business_transaction')
                                    ->label('Business Transaction')
                                    ->copyable()
                                    ->icon(Heroicon::ArrowsRightLeft),
                                TextEntry::make('business_area')
                                    ->label('Business Area')
                                    ->copyable(),
                                TextEntry::make('profit_center')
                                    ->label('Profit Center')
                                    ->copyable(),
                                TextEntry::make('sap_headers')
                                    ->label('SAP Headers')
                                    ->formatStateUsing(function ($state): string {
                                        if (blank($state)) {
                                            return 'No headers configured';
                                        }

                                        if (is_array($state)) {
                                            return json_encode(
                                                $state,
                                                JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                                            );
                                        }

                                        return (string) $state;
                                    })
                                    ->fontFamily('mono')
                                    ->columnSpanFull(),
                            ])
                            ->columns()->columnSpanFull(),

                        Section::make('System Information')
                            ->description('Record metadata.')
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
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
