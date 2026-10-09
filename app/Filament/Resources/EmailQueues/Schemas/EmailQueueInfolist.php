<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class EmailQueueInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->schema([
                        Section::make('Email')
                            ->description('Email content and delivery information.')
                            ->icon(Heroicon::Envelope)
                            ->schema([
                                TextEntry::make('subject')
                                    ->label('Subject')
                                    ->weight('bold')
                                    ->icon(Heroicon::ChatBubbleLeft),
                                TextEntry::make('header')
                                    ->label('Header')
                                    ->icon(Heroicon::Tag),
                                TextEntry::make('message')
                                    ->label('Message')
                                    ->prose()
                                    ->columnSpanFull(),
                                TextEntry::make('attachment')
                                    ->placeholder('No attachment')
                                    ->icon(Heroicon::PaperClip),
                                TextEntry::make('archived_at_file')
                                    ->label('File Archived_At')
                                    ->placeholder('No attachment')
                                    ->icon(Heroicon::PaperClip),
                            ])
                            ->columns()
                            ->columnSpan(2),

                        Section::make('Queue Status')
                            ->description('Current processing state.')
                            ->icon(Heroicon::Clock)
                            ->schema([
                                TextEntry::make('status')
                                    ->label('Status')
                                    ->badge(),
                                TextEntry::make('attempts')
                                    ->label('Attempts')
                                    ->numeric(),
                                TextEntry::make('next_retry_at')
                                    ->label('Next Retry')
                                    ->dateTime('M d, Y • H:i')
                                    ->placeholder('No retry scheduled'),
                                TextEntry::make('processed_at')
                                    ->label('Processed At')
                                    ->dateTime('M d, Y • H:i')
                                    ->placeholder('Not processed'),
                            ])
                            ->columnSpan(1),

                        Section::make('Recipients')
                            ->description('Email delivery recipients.')
                            ->icon(Heroicon::Users)
                            ->schema([
                                TextEntry::make('recipients')
                                    ->label('')
                                    ->formatStateUsing(function ($state): string {
                                        if (blank($state)) {
                                            return 'No recipients';
                                        }

                                        if (is_string($state)) {
                                            $decoded = json_decode($state, true);

                                            if (json_last_error() === JSON_ERROR_NONE) {
                                                $state = $decoded;
                                            }
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
                                    ->copyable()
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),

                        Section::make('Processing Response')
                            ->description('Response returned by the email processing service.')
                            ->icon(Heroicon::ArrowPath)
                            ->schema([
                                TextEntry::make('response')
                                    ->label('Response')
                                    ->placeholder('No response recorded')
                                    ->fontFamily('mono')
                                    ->prose()
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),

                        Section::make('Error')
                            ->description('Processing error information.')
                            ->icon(Heroicon::ExclamationTriangle)
                            ->schema([
                                TextEntry::make('error')
                                    ->label('Error')
                                    ->placeholder('No error recorded')
                                    ->fontFamily('mono')
                                    ->prose()
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),

                        Section::make('Record Information')
                            ->description('Queue record metadata.')
                            ->icon(Heroicon::InformationCircle)
                            ->schema([
                                TextEntry::make('created_at')
                                    ->label('Queued At')
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
