<?php

namespace App\Repositories\Group;

use App\Models\User;
use App\Models\Group;
use App\Models\Task;

use App\Repositories\Group\Interfaces\GroupInterface;

class GroupRepository implements GroupInterface
{
    public function UsersInGroup()
    {
        $group_id = auth()->user()->group_id;
        $users = User::where('group_id', '=', $group_id)->get();

        return $users;
    }

    public function TasksInGroup($group_id)
    {
        $tasks = Task::where('group_id', '=', $group_id)->get();

        return $tasks;
    }

    public function UserById($id)
    {
        $user = User::find($id);

        return $user;
    }

    public function GroupById($id)
    {
        $group = Group::find($id);

        return $group;
    }
}
