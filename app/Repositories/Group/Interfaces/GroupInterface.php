<?php

namespace App\Repositories\Group\Interfaces;

interface GroupInterface
{
    public function UsersInGroup();
    public function TasksInGroup($group_id);
    public function UserById($id);
    public function GroupById($id);
}