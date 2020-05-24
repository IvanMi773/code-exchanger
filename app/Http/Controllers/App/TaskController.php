<?php

namespace App\Http\Controllers\App;

use App\Models\User;
use App\Models\Task;
use App\Http\Requests\Task\CreateTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;

use App\Repositories\Task\TaskRepository;

class TaskController extends AppController
{
    public function create(TaskRepository $taskRepository)
    {
        $group_id = auth()->user()->group_id;
        $users = $taskRepository->UsersByGroupId($group_id);

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

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $data = $request->validated();

        $task->update([
            'code' => trim($data['code']),
        ]);

        return redirect('/task/' . $task->id);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/group/home/' . $task->group_id);
    }
}
