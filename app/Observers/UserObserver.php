<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\User;
use App\Notifications\NewUserCredentialsNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserObserver
{
    public function creating(User $user): void
    {
        if (empty($user->password)) {
            $plainPassword = config('security.defaults.generate_random_password')
                ? Str::password(length: 16)
                : config('security.defaults.generic_password');

            $user->plainTextPasswordForNotification = $plainPassword;

            $user->password = Hash::make($plainPassword);
            $user->must_change_password = true;
        }
    }

    public function created(User $user): void
    {
        if (! empty($user->plainTextPasswordForNotification)) {
            $user->notify(new NewUserCredentialsNotification(
                $user->plainTextPasswordForNotification
            ));
        }
    }
}
