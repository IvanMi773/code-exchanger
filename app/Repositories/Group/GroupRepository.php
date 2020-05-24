<?php

namespace App\Repositories\Group;

use App\Models\User;
use App\Models\Group;

class GroupRepository
{
    public function UsersInGroup()
    {
        $group_id = auth()->user()->group_id;
        $users = User::where('group_id', '=', $group_id)->get();

        return $users;
    }
}
