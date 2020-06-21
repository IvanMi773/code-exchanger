@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4" id="sidebar">
        <div class="ml-4">
            <h2>Сторінка групи {{ $group->name }}</h2>

            <h4>Завдання:</h4>

            <ul class="list-group mb-4">
                @foreach ($tasks as $task)
                    <a href="/task/{{ $task->id }}" class="link">
                        <li class="list-group-item task-list" title="Це завдання робить {{ $task->user_id }} учасник">{{ $task->task }}</li>
                    </a>
                @endforeach
            </ul>

            <h4>Учасники</h4>
            <ul class="list-group mb-4">
                @foreach ($users as $user)
                    <li class="list-group-item task-list">{{ $user->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="col-8 ml-auto">
        <div class="row p-3 mx-auto">
            @if (auth()->user()->group_id == $group->id)
                <div class="mr-auto">
                    <a href="/task/create">
                        <button class="btn btn-primary">Створити Завдання</button>
                    </a>
                </div>
            @endif

            @if (auth()->user()->id == $group->user_id)
                <div class="ml-auto">
                    <a href="/group/edit/{{ $group->id }}">
                        <button class="btn btn-primary">Редагувати групу</button>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
