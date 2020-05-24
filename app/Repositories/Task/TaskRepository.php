<?php

namespace App\Repositories\Task;

use App\Models\User;
use App\Models\Group;
use App\Models\Task;

class TaskRepository
{
    public function UsersByGroupId($group_id)
    {
        $users = User::where('group_id', '=', $group_id)->get();

        return $users;
    }
}