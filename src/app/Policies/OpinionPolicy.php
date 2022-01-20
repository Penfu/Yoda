<?php

namespace App\Policies;

use App\Models\Opinion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OpinionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Opinion $opinion)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Opinion $opinion)
    {
        return $user->id === $opinion->user_id || $user->can('moderate');
    }
}
