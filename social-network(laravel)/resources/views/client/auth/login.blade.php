@extends('client/layout/app')
@section('content')
<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="#" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="{{route('client.login.store')}}">
                {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" id="email" class="form-control " placeholder="Email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Password" required>
                @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Login</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
             <a href="{{route('client.register')}}" class="forgot-password" style="float: right;">
                Register account
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    @endsection