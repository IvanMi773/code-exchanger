@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('task.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="task" class="col-md-4 col-form-label text-md-right">{{ __('Текст задачі') }}</label>

                            <div class="col-md-6">
                                <input id="task" type="text" class="form-control @error('task') is-invalid @enderror" name="task" value="{{ old('task') }}" required autocomplete="task" autofocus>

                                @error('task')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Учасник') }}</label>

                            <div class="col-md-6">
                                <select name="user_id" id="user_id" class="@error('user_id') is-invalid @enderror">
                                    <option value="0">-Виберіть учасника-</option>
                                    @foreach ($users as $user)
                                       <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>

                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Додати задачу') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
