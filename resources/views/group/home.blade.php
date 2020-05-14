@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4" id="sidebar">
        <div class="ml-4">
            <h2>Сторінка групи {{ $group->name }}</h2>

            <h4>Завдання:</h4>
        </div>
    </div>

    <div class="col-8">
        <div class="row p-3 mx-auto" id="home">
            <div class="mr-auto">
                <button class="btn btn-primary">Створити Завдання</button>
            </div>

            <div class="ml-auto">
                <button class="btn btn-danger">Видалити учасника</button>
                <button class="btn btn-danger">Видалити групу</button>
            </div>
        </div>
    </div>
</div>
@endsection
