<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Chirp;

class ChirpPolicy
{
    public function delete(User $user, Chirp $chirp)
    {
        // Only the user who created the chirp can delete it
        return $user->id === $chirp->user_id;
    }
    public function update(User $user, Chirp $chirp)
    {
        // Only the user who created the chirp can delete it
        return $user->id === $chirp->user_id;
    }


}