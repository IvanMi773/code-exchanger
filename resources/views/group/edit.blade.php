@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Редагувати групу') }}</div>

                <div class="card-body">
                    <form method="POST" action="/group/update/{{ $group->id }}">
                        @csrf

                        <div class="form-group row mx-auto">
                            <label for="group_name" class="col-form-label text-md-right">{{ __('Назва групи') }}</label>

                            <input id="group_name" type="text" class="form-control @error('group_name') is-invalid @enderror" name="group_name" value="{{ old('group_name') }}" required autocomplete="group_name" autofocus>

                            @error('group_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                 <button type="submit" class="btn btn-dark">
                                     Змінити
                                 </button>
                             </div>
                         </div>
                    </form>

                    <form method="POST" action="/group/user/delete/{{ $group->id }}">
                        @method('DELETE')
                        @csrf

                        <div class="form-group row mx-auto">
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
    
                        <div class="form-group row mx-auto">
                            <button type="submit" class="btn btn-danger">Видалити учасника</button>
                        </div>
                    </form>

                    <form method="POST" action="/group/user/add/{{ $group->id }}">
                        @csrf

                        <div class="form-group row mx-auto">
                            <label for="user_id" class="col-form-label text-md-right">{{ __('ID учасника') }}</label>

                            <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus>

                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group row mx-auto">
                            <button type="submit" class="btn btn-primary">Додати учасника</button>
                        </div>
                    </form>

                    <div class="form-group row mx-auto">
                        <form method="POST" action="/group/delete/{{ $group->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Видалити групу</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
