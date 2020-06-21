<?php

namespace App\Http\Controllers\App;

use App\Models\User;
use App\Models\Task;
use App\Models\Group;
use App\Http\Requests\Task\CreateTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;

use Illuminate\Support\Facades\Gate;

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
        $group = Group::find($group_id);

        if (Gate::allows('create-task', $group)) {
            $task = auth()->user()->tasks()->create([
                'task' => $data['task'],
                'group_id' => $group_id,
            ]);

            return redirect('/group/home/' . $group_id);
        } else {
            return back();
        }
    }

    public function show(Task $task)
    {
        $group = Group::find($task->group_id);

        return view('task.show', compact('task', 'group'));
    }

    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        if (Gate::allows('update-task', $task)) {
            $data = $request->validated();
    
            $task->update([
                'code' => trim($data['code']),
                'code_language' => $data['code_language'],
            ]);
    
            return redirect('/task/' . $task->id);
        } else {
            return back();
        }
    }

    public function destroy(Task $task)
    {
        if (Gate::allows('delete-task', $task)) {
            $task->delete();
    
            return redirect('/group/home/' . $task->group_id);
        } else {
            return back();
        }
    }
}
