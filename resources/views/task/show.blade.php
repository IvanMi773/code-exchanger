@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4 d-block" id="sidebar">
        <div class="ml-4">
            <h2>Опис завдання:</h2>

            <h4>{{ $task->task }}</h4>
        </div>
    </div>

    <div class="col-8 ml-auto">
        @if (auth()->user()->id == $task->user_id)
            <div class="row p-3 mx-auto">
                <div class="mr-auto">
                    <a href="/task/edit/{{ $task->id }}">
                        <button class="btn btn-primary">Додати код завдання</button>
                    </a>
                </div>

                <div class="ml-auto">
                    <form action="/task/delete/{{ $task->id }}" method="POST">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-danger">Видалити завдання</button>
                    </form>
                </div>
            </div>
        @endif

        <div class="row">
            <pre>
                <code class="{{ $task->code_language }} border">
                    {{ $task->code }}
                </code>
            </pre>
        </div>
    </div>
</div>
@endsection
