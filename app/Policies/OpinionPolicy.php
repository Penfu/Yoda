<?php

namespace App\Policies;

use App\Models\Opinion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OpinionPolicy
{
    use HandlesAuthorization;

    public function voteUp(User $user, Opinion $opinion)
    {
        return $opinion->feedbacks->where('user_id', $user->id)->isEmpty() || $opinion->feedbacks->where('user_id', $user->id)->first()->points != 1;
    }

    public function unVote(User $user, Opinion $opinion)
    {
        return $opinion->feedbacks->where('user_id', $user->id)->isNotEmpty();
    }

    public function voteDown(User $user, Opinion $opinion)
    {
        return $opinion->feedbacks->where('user_id', $user->id)->isEmpty() || $opinion->feedbacks->where('user_id', $user->id)->first()->points != -1;
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
