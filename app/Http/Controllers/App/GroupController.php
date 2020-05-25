<?php

namespace App\Http\Controllers\App;

// Requests
use App\Http\Requests\Group\CreateGroupRequest;
use App\Http\Requests\Group\EnterToGroupRequest;
use App\Http\Requests\Group\UpdateGroupRequest;
use App\Http\Requests\Group\GroupUserDeleteRequest;
use App\Http\Requests\Group\AddUserRequest;

// Models
use App\Models\Group;
use App\Models\Task;
use App\Models\User;

// Repositories
use App\Repositories\Group\GroupRepository;

class GroupController extends AppController
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function choose()
    {
        return view('group.choose');
    }

    public function create() 
    {
        return view('group.create');
    }

    public function enter(EnterToGroupRequest $request, GroupRepository $groupRepository)
    {
        $data = $request->validated();

        $group = $groupRepository->GroupById($data['id']);

        auth()->user()->group_id = $group->id;
        auth()->user()->save();

        return redirect('/group/home/' . $group->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGroupRequest $request)
    {
        $data = $request->validated();

        $user_id = auth()->user()->id;

        $group = auth()->user()->group()->create([
            'name' => $data['group_name'],
        ]);

        auth()->user()->group_id = $group->id;
        auth()->user()->save();

        return redirect('/group/home/' . $group->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group, GroupRepository $groupRepository)
    {
        $tasks = $groupRepository->TasksInGroup($group->id);
        $users = $groupRepository->UsersInGroup();

        return view('group.home', compact('group', 'tasks', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group, GroupRepository $groupRepository)
    {
        $users = $groupRepository->UsersInGroup();

        return view('group.edit', compact('users', 'group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $data = $request->validated();
        
        $group->update([
            'name' => $data['group_name'],
        ]);

        return redirect('/group/home/' . $group->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group, GroupRepository $groupRepository)
    {
        $users = $groupRepository->UsersInGroup();

        foreach ($users as $user) {
            $user->group_id = 0;
            $user->save();
        }

        $group->delete();

        return redirect('/');
    }

    public function groupUserDelete(GroupUserDeleteRequest $request, Group $group, GroupRepository $groupRepository)
    {
        $data = $request->validated();

        $user = $groupRepository->UserById($data['user_id']);

        if ($group->user_id == $user->id) 
        {
            $group->user_id = 0;
            $group->save();
        }

        $user->group_id = 0;
        $user->save();

        return redirect('/group/home/' . $group->id);
    }

    public function addUser(GroupUserDeleteRequest $request, Group $group, GroupRepository $groupRepository)
    {
        $data = $request->validated();

        $user = $groupRepository->UserById($data['user_id']);

        $user->group_id = $group->id;
        $user->save();

        return redirect('/group/home/' . $group->id);
    }
}
