<!-- resources/views/child.blade.php -->
@extends('layouts.front.app')
 
@section('title', 'Realestate App')
 
@section('content')
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
    <div class="login">
        <div class="aligner">
            <div class="login__form">
                <h3>Sign In</h3>   
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="login__email" value="{{ old('email') }}" name="email" placeholder="Your email">
                    </div>
                    @error('email')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror
                    <div class="form-group">
                        <input type="password" class="login__password" name="password" placeholder="Your password">
                    </div>
                    @error('password')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                    @enderror
                    <input type="submit" class="login__submit" value="Sign In">
                </form>

                <div class="login__footer">
                    <div class="login__footer-left login__footer-item">
                        <a href="" class="login__register-link">Create An Account</a>
                    </div>
                    <div class="login__footer-right login__footer-item">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="login__forgot-password">Forgot Password?</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection
