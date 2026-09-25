<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues\Tables;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Models\EmailQueue;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EmailQueuesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject')
                    ->label('Subject')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->limit(50)
                    ->icon(Heroicon::Envelope),
                TextColumn::make('header')
                    ->label('Header')
                    ->searchable()
                    ->limit(40)
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('attempts')
                    ->label('Attempts')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                TextColumn::make('next_retry_at')
                    ->label('Next Retry')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->placeholder('—'),
                TextColumn::make('processed_at')
                    ->label('Processed')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->placeholder('Not processed'),
                TextColumn::make('attachment')
                    ->label('Attachment')
                    ->searchable()
                    ->limit(35)
                    ->placeholder('None')
                    ->toggleable(),

                TextColumn::make('message')
                    ->label('Message')
                    ->searchable()
                    ->limit(60)
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Queued')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),

                Action::make('retry')
                    ->label('Retry')
                    ->icon(Heroicon::ArrowPath)
                    ->color('warning')
                    ->visible(
                        fn (EmailQueue $record): bool =>
                            auth()->user()?->can('retry-queues') &&
                            ($record->status === Status::PROCESSED ||  $record->status === Status::ABANDONED)
                    )
                    ->requiresConfirmation()
                    ->modalHeading('Retry Email')
                    ->modalDescription(
                        'This will change the email status from Processed back to Pending.'
                    )
                    ->modalSubmitActionLabel('Retry')
                    ->action(function (EmailQueue $record): void {
                        $record->update([
                            'status' => Status::PENDING,
                        ]);
                    }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
