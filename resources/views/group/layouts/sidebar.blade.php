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