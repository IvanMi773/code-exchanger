@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Додати код') }}</div>

                <div class="card-body">
                    <form method="POST" action="/task/update/{{ $task->id }}">
                        @csrf

                        <div class="form-group row mx-auto">
                            <code>
                                <textarea rows="20" cols="80" id="code" class="form-control @error('code') is-invalid @enderror" name="code" required></textarea>
                            </code>

                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                 <button type="submit" class="btn btn-dark">
                                    Додати код
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
