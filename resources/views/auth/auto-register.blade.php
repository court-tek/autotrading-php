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
                <h3>Register</h3>   
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="auth__name" value="{{ old('name') }}" name="name" placeholder="Your name">
                    </div>
                    @error('name')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror

                    <div class="form-group">
                        <input type="email" class="auth__email" value="{{ old('name') }}" name="email" placeholder="Your email">
                    </div>
                    @error('email')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror

                    <div class="form-group">
                        <input type="password" class="auth__password" name="password" placeholder="Your password">
                    </div>
                    @error('password')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror
            
                    <div class="form-group">
                        <input type="password" class="auth__password_confirmation" name="password_confirmation" placeholder="Your password confirmation">
                    </div>
                    @error('password_confirmation')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror
                    <input type="submit" class="auth__submit" value="Register">
                </form>

                <div class="auth__footer">
                    <div class="auth__footer-left auth__footer-item">
                        <a href="{{ route('login') }}" class="auth__register-link">Already registered?</a>
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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="" href="">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

