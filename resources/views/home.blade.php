@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="text-left col-md-3 col-form-label">{{ __('Name') }}</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control my-form-control" name="name" value="" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="text-left col-md-3 col-form-label">Email</label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control my-form-control" name="email" value="" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-danger">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
