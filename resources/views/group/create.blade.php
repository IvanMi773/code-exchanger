@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Створити групу') }}</div>

                <div class="card-body">
                    <form method="POST" action="/group/store">
                        @csrf

                        <div class="form-group row">
                            <label for="group_name" class="col-md-4 col-form-label text-md-right">{{ __('Назва групи') }}</label>

                            <div class="col-md-6">
                                <input id="group_name" type="text" class="form-control @error('group_name') is-invalid @enderror" name="group_name" value="{{ old('group_name') }}" required autocomplete="group_name" autofocus>

                                @error('group_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                 <button type="submit" class="btn btn-dark">
                                     Створити
                                 </button>
                             </div>
                         </div>

                       <group-users />

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
