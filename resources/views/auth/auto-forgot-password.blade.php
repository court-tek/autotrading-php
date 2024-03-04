<!-- resources/views/child.blade.php -->
@extends('layouts.front.app')
 
@section('title', 'Realestate App')
 
@section('content')
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
    <div class="auth">
        <div class="aligner">
            <div class="auth__form">
                <h3>Reset Password</h3>   
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="auth__email" value="{{ old('email') }}" name="email" placeholder="Your email">
                    </div>
                    @error('email')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror
                    <input type="submit" class="auth__submit" value="Password Reset Link">
                </form>

                <div class="auth__footer">
                    <div class="auth__footer-left auth__footer-item">
                        <a href="{{ route('login') }}" class="auth__register-link">Already registered?</a>
                    </div>
                    <div class="auth__footer-right auth__footer-item">
                        <a href="{{ route('register') }}" class="auth__register-link">Create An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection

{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
