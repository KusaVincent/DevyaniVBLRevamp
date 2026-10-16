<?php

declare(strict_types=1);

namespace App\Filament\Resources\SmsQueues\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class SmsQueueInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->schema([
                        Section::make('Recipient')
                            ->description('SMS recipient and originating customer.')
                            ->icon(Heroicon::User)
                            ->schema([
                                TextEntry::make('recipient_name')
                                    ->label('Recipient')
                                    ->weight('bold')
                                    ->icon(Heroicon::User),
                                TextEntry::make('recipient_mobile')
                                    ->label('Mobile Number')
                                    ->copyable()
                                    ->icon(Heroicon::Phone),
                                TextEntry::make('customer_name')
                                    ->label('Customer')
                                    ->icon(Heroicon::UserCircle),
                            ])
                            ->columns(3)
                            ->columnSpanFull(),

                        Section::make('Queue Status')
                            ->description('SMS processing state.')
                            ->icon(Heroicon::Clock)
                            ->schema([
                                Section::make()
                                    ->schema([
                                        TextEntry::make('status')
                                            ->label('Status')
                                            ->badge(),
                                        TextEntry::make('process')
                                            ->label('Process')
                                            ->badge(),
                                        TextEntry::make('attempts')
                                            ->label('Attempts')
                                            ->numeric(),
                                    ])
                                    ->columns(3),
                                Section::make()
                                    ->schema([
                                        TextEntry::make('next_retry_at')
                                            ->label('Next Retry')
                                            ->dateTime('M d, Y • H:i')
                                            ->placeholder('No retry scheduled'),
                                        TextEntry::make('processed_at')
                                            ->label('Processed At')
                                            ->dateTime('M d, Y • H:i')
                                            ->placeholder('Not processed'),
                                    ])
                                    ->columns(),
                            ])
                            ->columnSpanFull(),

                        Section::make('Transaction')
                            ->description('Payment and billing information.')
                            ->icon(Heroicon::Banknotes)
                            ->schema([
                                TextEntry::make('amount')
                                    ->label('Amount')
                                    ->money('KES')
                                    ->weight('bold'),
                                TextEntry::make('mpesa_ref')
                                    ->label('M-Pesa Reference')
                                    ->copyable()
                                    ->icon(Heroicon::Hashtag),
                                TextEntry::make('bill_reference')
                                    ->label('Bill Reference')
                                    ->copyable()
                                    ->icon(Heroicon::ReceiptPercent),
                            ])
                            ->columns(3)
                            ->columnSpanFull(),

                        Section::make('Processing Response')
                            ->description('Response returned during SMS processing.')
                            ->icon(Heroicon::ArrowPath)
                            ->schema([
                                TextEntry::make('response')
                                    ->label('Response')
                                    ->state(function ($record): string {
                                        $data = $record->response;

                                        // Decode until we get an array (handles double-encoded JSON)
                                        $attempts = 0;
                                        while (is_string($data) && $attempts++ < 3) {
                                            $decoded = json_decode(trim($data), true);

                                            if (json_last_error() !== JSON_ERROR_NONE) {
                                                break;
                                            }

                                            $data = $decoded;
                                        }

                                        if (! is_array($data)) {
                                            return blank($data) ? 'No response recorded' : (string) $data;
                                        }

                                        // Find a key at any depth, case-insensitive
                                        $find = function (array $arr, string $key) use (&$find) {
                                            foreach ($arr as $k => $v) {
                                                if (strcasecmp((string) $k, $key) === 0) {
                                                    return $v;
                                                }

                                                if (is_array($v)) {
                                                    $found = $find($v, $key);

                                                    if ($found !== null) {
                                                        return $found;
                                                    }
                                                }
                                            }

                                            return null;
                                        };

                                        $mobile = $find($data, 'mobile');

                                        $filtered = [
                                            'response-code'        => $find($data, 'response-code'),
                                            'response-description' => $find($data, 'response-description'),
                                            'mobile'               => [
                                                'message' => is_array($mobile) ? $find($mobile, 'message') : null,
                                            ],
                                        ];

                                        return json_encode(
                                            $filtered,
                                            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
                                        ) ?: 'No response recorded';
                                    })
                                    ->fontFamily('mono')
                                    ->extraAttributes(['style' => 'white-space: pre-wrap; word-break: break-word;'])
                                    ->copyable()
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),

                        Section::make('Processing Error')
                            ->description('Error information from the SMS processor.')
                            ->icon(Heroicon::ExclamationTriangle)
                            ->schema([
                                TextEntry::make('error')
                                    ->label('Error')
                                    ->placeholder('No error recorded')
                                    ->fontFamily('mono')
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),

                        Section::make('Record Information')
                            ->description('Queue timestamps.')
                            ->icon(Heroicon::InformationCircle)
                            ->schema([
                                TextEntry::make('created_at')
                                    ->label('Queued At')
                                    ->dateTime('M d, Y • H:i')
                                    ->icon(Heroicon::Calendar),

                                TextEntry::make('processed_at')
                                    ->label('Processed At')
                                    ->dateTime('M d, Y • H:i')
                                    ->placeholder('Not processed')
                                    ->icon(Heroicon::CheckCircle),
                            ])
                            ->columns()
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
