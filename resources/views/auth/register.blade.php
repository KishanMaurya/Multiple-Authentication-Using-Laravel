@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success"> 
                    <h5 class="card-title setColor text-white font-weight-bold">
                        {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}
                    </h5>
                </div>

                    <div class="card-body">
                        @isset($url)
                        <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                        @else
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @endisset
                            @csrf
                        <label for="name">{{ __('Name') }}</label>
                        <div class="form-group">
                            

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <label for="password">{{ __('Password') }}</label>
                        <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-success font-weight-bold">
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
@endsection
<style>
    label{
        font-weight: bold;
    }
    .setBack{
        background: #41B883 !important;
        color: white;
    }
    .btnColor{
        background: #41B883 !important;
    }
</style>