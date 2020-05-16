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
        dd($group_id);

        $task = new Task();
        $task->create([
            'task' => $data['task'],
            'user_id' => auth()->user(),
            'group_id' => $group_id,
        ]);

        // auth()->user()->group()->tasks()->create([
        //     'task' => $data['task']
        // ]);

        return redirect('/group/home/' . $group_id);
    }
}
