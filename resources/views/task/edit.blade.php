@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Додати код') }}</div>

                <div class="card-body">
                    <form method="POST" action="/group/update/{{ $task->id }}">
                        @csrf

                        <div class="form-group row mx-auto">
                            <pre>
                            <code data-language="python">
                                <textarea rows="20" cols="40" id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" required>

                                </textarea>
                            </code>
                            </pre>


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
