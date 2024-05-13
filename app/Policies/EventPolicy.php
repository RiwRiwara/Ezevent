<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }


    public function view(User $user, Event $event) : bool
    {
        $is_own = $user->user_id === $event->organizer_id;
        $is_admin = $user->role_id == 1;
        return $is_own || $is_admin;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Event $event): bool
    {

        $is_own = $user->user_id === $event->organizer_id;
        $is_admin = $user->role === 'admin';
        return $is_own || $is_admin;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Event $event): bool
    {
        $is_own = $user->user_id === $event->organizer_id;
        $is_admin = $user->role === 'admin';
        return $is_own || $is_admin;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Event $event): bool
    {
        return true;
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Event $event): bool
    {
        return true;
        //
    }
}
