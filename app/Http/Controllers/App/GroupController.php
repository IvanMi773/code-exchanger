<?php

namespace App\Http\Controllers\App;

// Requests
use App\Http\Requests\Group\CreateGroupRequest;
use App\Http\Requests\Group\EnterToGroupRequest;
use App\Http\Requests\Group\UpdateGroupRequest;

// Models
use App\Models\Group;
use App\Models\Task;
use App\Models\User;

class GroupController extends AppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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

    public function enter(EnterToGroupRequest $request)
    {
        $data = $request->validated();

        $group = Group::find($data['id']);

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
    public function show(Group $group)
    {
        $tasks = Task::where('group_id', '=', $group->id)->get();

        return view('group.home', compact('group', 'tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $group_id = auth()->user()->group_id;
        $users = User::where('group_id', '=', $group_id)->get();

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
    public function destroy($id)
    {
        //
    }
}
