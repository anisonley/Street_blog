@extends('layout')

@section('main')
<section class="login-frame">
    <div class="center">
      <h1>Login</h1>
      <form method="POST" action="{{ route('login') }}">
        @csrf
         <!-- Email Address -->
        <div class="txt_field">
            <label for="email" :value="__('Email')" >E-mail</label>
            <input id="email_address" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  error :messages="$errors->get('email')" >
           
        </div>
        <!-- Password -->
        <div class="txt_field">
            <label for="password" :value="__('Password')" >Password</label>
            <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password" error :messages="$errors->get('password')" >
        </div>
        <!-- Remember Me -->
        <div class="pass">
          @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="btn">
              {{ __('Forgot your password?') }}
          </a>
            @endif
        </div>
        <button class="btn-login" type="submit" value="Login">
          {{ __('Log in') }}
        </button>
        
        <div class="signup_link">
          Not a member? <a class= "{{ Request::routeIs('register') ? 'active' : ' ' }}" href="{{ route('register') }}">Signup</a>
        </div>
      </form>
    </div>
</section>
@endsection