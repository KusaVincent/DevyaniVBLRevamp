<?php

namespace App\Providers;

use App\Contracts\Email\EmailServiceInterface;
use App\Contracts\Logging\LogArchiveServiceInterface;
use App\Contracts\Logging\LoggingServiceInterface;
use App\Contracts\Sap\SapArchiveServiceInterface;
use App\Contracts\Sms\CelcomSmsServiceInterface;
use App\Contracts\Sms\SmsMessageBuilderInterface;
use App\Services\Email\EmailService;
use App\Services\Logging\LogArchiveService;
use App\Services\Logging\LoggingService;
use App\Services\Sap\SapArchiveService;
use App\Services\Sms\CelcomSmsService;
use App\Services\Sms\SmsMessageBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(EmailServiceInterface::class, EmailService::class);
        $this->app->singleton(LoggingServiceInterface::class, LoggingService::class);
        $this->app->singleton(CelcomSmsServiceInterface::class, CelcomSmsService::class);
        $this->app->singleton(SmsMessageBuilderInterface::class, SmsMessageBuilder::class);
        $this->app->singleton(SapArchiveServiceInterface::class, SapArchiveService::class);
        $this->app->singleton(LogArchiveServiceInterface::class, LogArchiveService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB::prohibitDestructiveCommands(
            $this->app->isProduction(),
        );

        Model::shouldBeStrict();
        Model::automaticallyEagerLoadRelationships();
        DB::prohibitDestructiveCommands($this->app->isProduction());
        Model::preventAccessingMissingAttributes($this->app->isProduction());

        if ($this->app->isProduction()) {
            URL::forceScheme('https');
        }
    }
}
