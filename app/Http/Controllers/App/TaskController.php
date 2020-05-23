<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Http\Requests\Task\CreateTaskRequest;

class TaskController extends AppController
{
    public function create()
    {
        $group_id = auth()->user()->group_id;
        $users = User::where('group_id', '=', $group_id)->get();

        return view('task.create', compact('users'));
    }

    public function store(CreateTaskRequest $request)
    {
        $data = $request->validated();
        $group_id = auth()->user()->group_id;

        $task = auth()->user()->tasks()->create([
            'task' => $data['task'],
            'group_id' => $group_id,
        ]);

        return redirect('/group/home/' . $group_id);
    }

    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }
}
