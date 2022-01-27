<?php

namespace App\Policies;

use App\Models\Practice;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class PracticePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  User|null  $user
     * @param  Practice   $practice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(?User $user, Practice $practice)
    {
        return $practice->isPublished() || (Auth::check() && $user->can('moderate'));
    }

    /**
     * Determine whether the user can publish models.
     *
     * @param  User|null  $user
     * @param  Practice   $practice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function publish(?User $user, Practice $practice)
    {
        return (Auth::check() && $user->can('moderate')) && $practice->isProposed() && $practice->opinionOf($user);
    }
}
