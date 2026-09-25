<?php

declare(strict_types=1);

namespace App\Providers;

use App\Contracts\Business\BusinessProfileServiceInterface;
use App\Contracts\Confirmation\AuthenticationServiceInterface;
use App\Contracts\Confirmation\HashValidationServiceInterface;
use App\Contracts\Confirmation\TransactionServiceInterface;
use App\Contracts\Email\EmailProcessingServiceInterface;
use App\Contracts\Email\EmailServiceInterface;
use App\Contracts\Health\ConfirmationHealthServiceInterface;
use App\Contracts\Logging\LogArchiveServiceInterface;
use App\Contracts\Logging\LoggingServiceInterface;
use App\Contracts\Sap\SapArchiveServiceInterface;
use App\Contracts\Sap\SapProcessingServiceInterface;
use App\Contracts\Sms\CelcomSmsServiceInterface;
use App\Contracts\Sms\SmsMessageBuilderInterface;
use App\Contracts\Sms\SmsProcessingServiceInterface;
use App\Contracts\Sms\SmsQueueServiceInterface;
use App\Enum\UserRole;
use App\Models\User;
use App\Policies\AuditPolicy;
use App\Services\Business\BusinessProfileService;
use App\Services\Confirmation\AuthenticationService;
use App\Services\Confirmation\HashValidationService;
use App\Services\Confirmation\TransactionService;
use App\Services\Email\EmailProcessingService;
use App\Services\Email\EmailService;
use App\Services\Health\ConfirmationHealthService;
use App\Services\Logging\LogArchiveService;
use App\Services\Logging\LoggingService;
use App\Services\Sap\SapArchiveService;
use App\Services\Sap\SapProcessingService;
use App\Services\Sms\CelcomSmsService;
use App\Services\Sms\SmsMessageBuilder;
use App\Services\Sms\SmsProcessingService;
use App\Services\Sms\SmsQueueService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Override;
use OwenIt\Auditing\Models\Audit;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    #[Override]
    public function register(): void
    {
        $this->app->singleton(EmailServiceInterface::class, EmailService::class);
        $this->app->singleton(LoggingServiceInterface::class, LoggingService::class);
        $this->app->singleton(CelcomSmsServiceInterface::class, CelcomSmsService::class);
        $this->app->singleton(SmsMessageBuilderInterface::class, SmsMessageBuilder::class);
        $this->app->singleton(SapArchiveServiceInterface::class, SapArchiveService::class);
        $this->app->singleton(LogArchiveServiceInterface::class, LogArchiveService::class);
        $this->app->singleton(TransactionServiceInterface::class, TransactionService::class);

        $this->app->singleton(SmsQueueServiceInterface::class, SmsQueueService::class);
        $this->app->singleton(SmsProcessingServiceInterface::class, SmsProcessingService::class);
        $this->app->singleton(SapProcessingServiceInterface::class, SapProcessingService::class);
        $this->app->singleton(AuthenticationServiceInterface::class, AuthenticationService::class);
        $this->app->singleton(HashValidationServiceInterface::class, HashValidationService::class);
        $this->app->singleton(BusinessProfileServiceInterface::class, BusinessProfileService::class);
        $this->app->singleton(EmailProcessingServiceInterface::class, EmailProcessingService::class);
        $this->app->singleton(ConfirmationHealthServiceInterface::class, ConfirmationHealthService::class);
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

        $this->gates();
    }

    private function gates(): void
    {
        Gate::policy(Audit::class, AuditPolicy::class);

        Gate::define('admin', fn (User $user): bool => $user->role === UserRole::ADMIN);

        Gate::define('manage-users', fn (User $user): bool => $user->role === UserRole::ADMIN);

        Gate::define('view-audits', fn (User $user): bool => $user->role === UserRole::ADMIN);

        Gate::define('manage-business-profiles', fn (User $user): bool => $user->role === UserRole::ADMIN);

        Gate::define('manage-business-tills', fn (User $user): bool => $user->role === UserRole::ADMIN);

        Gate::define('retry-queues', fn (User $user): bool => in_array($user->role, [UserRole::NORMAL, UserRole::ADMIN], true));

        Gate::define('reprocess-queues', fn (User $user): bool => in_array($user->role, [UserRole::NORMAL, UserRole::ADMIN], true));
    }
}
