@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Виберіть потрібну дію') }}</div>

                <div class="card-body ml-3">
                    <div class="form-group row">
                        <label for="group_id" class=" col-form-label text-md-right">{{ __('ID групи') }}</label>

                        <div class="">
                            <input id="group_id" type="text" class="form-control @error('group_id') is-invalid @enderror" name="group_id" value="{{ old('group_id') }}" required autocomplete="group_id" autofocus>

                            @error('group_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Увійти в існуючу групу') }}
                            </button>
                        </div>
                    </div>

                    Або

                    <div class="form-group row mb-0">
                        <div class="">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Створити групу') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection