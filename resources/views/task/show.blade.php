@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4" id="sidebar">
        <div class="ml-4">
            <h2>Опис завдання:</h2>

            <h4>{{ $task->task }}</h4>
        </div>
    </div>

    <div class="col-8 ml-auto">
        <div class="row p-3 mx-auto">
            <div class="mr-auto">
                <a href="/task/edit/{{ $task->id }}">
                    <button class="btn btn-primary">Додати код завдання</button>
                </a>
            </div>

            <div class="ml-auto">
                <a href="/task/delete/{{ $task->id }}">
                    <button class="btn btn-danger">Видалити завдання</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
