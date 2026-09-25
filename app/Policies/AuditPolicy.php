<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;
use OwenIt\Auditing\Models\Audit;

final class AuditPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->isAdmin();
    }

    public function view(User $user, Audit $audit): bool
    {
        return $user->isAdmin();
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Audit $audit): bool
    {
        return false;
    }

    public function delete(User $user, Audit $audit): bool
    {
        return false;
    }
}
