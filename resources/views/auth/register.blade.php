@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row my-5 pt-2"></div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center"><h2 class="font-weight-bold mb-0">{{ __('Register') }}</h2></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="firstName"
                                           class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('First Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="firstName" type="text"
                                               class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}"
                                               name="firstName" value="{{ old('firstName') }}" required autofocus>

                                        @if ($errors->has('firstName'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lastName"
                                           class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastName" type="text"
                                               class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                               name="lastName" value="{{ old('lastName') }}" required autofocus>

                                        @if ($errors->has('lastName'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 col-sm-12 offset-md-3">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
