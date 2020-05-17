@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4" id="sidebar">
        <div class="ml-4">
            <h2>Сторінка групи {{ $group->name }}</h2>

            <h4>Завдання:</h4>

            <ul class="list-group mb-4">
                @foreach ($tasks as $task)
                    <li class="list-group-item task-list">{{ $task->task }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="col-8 ml-auto">
        <div class="row p-3 mx-auto">
            <div class="mr-auto">
                <a href="/task/create">
                    <button class="btn btn-primary">Створити Завдання</button>
                </a>
            </div>

            <div class="ml-auto">
                <button class="btn btn-primary">Редагувати групу</button>
                {{-- <button class="btn btn-danger">Видалити учасника</button>
                <button class="btn btn-danger">Видалити групу</button> --}}
            </div>
        </div>
    </div>
</div>
@endsection
