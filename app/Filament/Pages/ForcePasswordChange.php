<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Models\User;
use App\Rules\NotInPasswordHistory;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Throwable;

/**
 * @property mixed $form
 */
class ForcePasswordChange extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    #[\Override]
    protected static bool $shouldRegisterNavigation = false;

    #[\Override]
    protected string $view = 'filament.pages.force-password-change';

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->schema([
                        Section::make('Change Password')
                            ->description('Update your account password securely.')
                            ->schema([
                                TextInput::make('current_password')
                                    ->label('Current Password')
                                    ->password()
                                    ->required()
                                    ->revealable()
                                    ->currentPassword(),

                                TextInput::make('new_password')
                                    ->label('New Password')
                                    ->password()
                                    ->required()
                                    ->revealable()
                                    ->rule(
                                        Password::min(8)
                                            ->letters()
                                            ->mixedCase()
                                            ->numbers()
                                            ->symbols()
                                            ->uncompromised()
                                    )
                                    ->rule(new NotInPasswordHistory(3))
                                    ->different('current_password'),

                                TextInput::make('new_password_confirmation')
                                    ->label('Confirm New Password')
                                    ->password()
                                    ->required()
                                    ->revealable()
                                    ->same('new_password'),
                            ])
                            ->columnSpan(1),
                    ]),
            ])
            ->statePath('data');
    }

    /**
     * @throws Throwable
     */
    public function submit(): void
    {
        $data = $this->form->getState();

        /** @var User $user */
        $user = auth()->user();

        DB::transaction(function () use ($user, $data): void {
            $user->recordPasswordHistory($data['new_password']);

            $user->update([
                'password_changed_at' => now(),
                'must_change_password' => false,
                'password' => $data['new_password'],
                'password_expiry_reminder_sent_at' => null,
            ]);

            Auth::guard(filament()->getAuthGuard())->logoutOtherDevices($data['new_password']);
        });

        Notification::make()
            ->title('Password updated successfully.')
            ->success()
            ->send();

        $this->redirect(filament()->getHomeUrl());
    }
}
