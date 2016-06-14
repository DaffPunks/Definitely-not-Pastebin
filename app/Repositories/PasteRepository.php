<?php

namespace App\Repositories;

use App\User;
use App\Paste;

class PasteRepository
{
    
    public function forUser(User $user)
    {
        return Paste::where('owner_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }

}