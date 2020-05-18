@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Виберіть потрібну дію') }}</div>

                <div class="card-body ml-3">
                    <form method="GET" action="/group/enter">
                        <div class="form-group row">
                            <label for="id" class=" col-form-label text-md-right">{{ __('ID групи') }}</label>
    
                            <div class="">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>
    
                                @error('id')
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
                    </form>

                    Або

                    <div class="form-group row mb-0">
                        <div class="">
                            <a href="{{ route('group.create') }}">
                                <button class="btn btn-dark">
                                    {{ __('Створити групу') }}
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection