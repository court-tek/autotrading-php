<!-- resources/views/child.blade.php -->
@extends('layouts.app')
 
@section('title', 'Realestate App')
 
@section('content')
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
    <div class="auth">
        <div class="aligner">
            <div class="aligner__title">
                <a href="{{ route('register') }}" class="aligner__home-link">jdm autotrader</a>
            </div>
            <div class="auth__form">
                <h3>Sign In</h3>   
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="auth__email" value="{{ old('email') }}" name="email" placeholder="Your email">
                    </div>
                    @error('email')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror
                    <div class="form-group">
                        <input type="password" class="auth__password" name="password" placeholder="Your password">
                    </div>
                    @error('')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror
                    <input type="submit" class="auth__submit" value="Sign In">
                </form>

                <div class="auth__footer">
                    <div class="auth__footer-right auth__footer-item">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="auth__forgot-password">Forgot Password?</a>
                        @endif
                    </div>
                    <div class="auth__footer-left auth__footer-item">
                        <a href="{{ route('register') }}" class="algner__register-link">Create An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection
