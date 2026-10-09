<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\CustomLogin;
use App\Filament\Pages\Auth\Profile;
use App\Http\Middleware\EnsurePasswordIsChanged;
use App\Http\Middleware\EnsureUserIsNotLocked;
use Filament\Auth\MultiFactor\App\AppAuthentication;
use Filament\Auth\MultiFactor\Email\EmailAuthentication;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Tapp\FilamentAuditing\FilamentAuditingPlugin;

final class MpesaPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->spa()
            ->profile(Profile::class)
            ->default()
            ->id('mpesa')
            ->passwordReset()
            ->path('mpesa')
            ->font('Poppins')
            ->sidebarCollapsibleOnDesktop()
            ->brandLogoHeight('3rem')
            ->login(CustomLogin::class)
            ->colors(['primary' => Color::Blue])
            ->emailVerification(isRequired: ! app()->isLocal())

            ->brandLogo(asset('logo.png'))
            ->favicon(asset('favicon.png'))
            ->maxContentWidth(Width::Full)
            ->globalSearchKeyBindings(['command+k', 'ctrl+k'])

            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')

            ->pages([Dashboard::class])

            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
                EnsureUserIsNotLocked::class,
                EnsurePasswordIsChanged::class,
            ])
            ->multiFactorAuthentication([
                AppAuthentication::make()
                    ->recoverable(),
                EmailAuthentication::make()
                    ->codeExpiryMinutes((int) config('auth.mfa_email_expiry', 5)),
            ],
                isRequired: (bool) config('auth.mfa_enabled', ! app()->isLocal())
            )
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('M-Pesa')
                    ->icon(Heroicon::OutlinedCurrencyDollar),
                NavigationGroup::make()
                    ->label('Queues')
                    ->icon(Heroicon::CommandLine),
                NavigationGroup::make()
                    ->label('Administration')
                    ->icon(Heroicon::OutlinedCog6Tooth),
            ])
            ->plugins([
                FilamentAuditingPlugin::make(),
            ]);
    }
}
