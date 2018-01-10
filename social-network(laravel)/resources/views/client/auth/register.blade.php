@extends('client/layout/app')
@section('content')
<div class="container">
        <div class="card2 card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="{{route('client_register.store')}}">
              {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <div class="row">
                  <div class="col-sm-12 col-md-4 col-lg-4"> <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" required autofocus></div>
                  <div class="col-sm-12 col-md-4 col-lg-4"><input type="text" id="middlename" name="middlename" class="form-control" placeholder="Middle name" required autofocus></div>
                  <div class="col-sm-12 col-md-4 col-lg-4"><input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" required autofocus></div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-4 col-lg-4">@if ($errors->has('firstname'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                        @endif</div>
                  <div class="col-sm-12 col-md-4 col-lg-4"></div>
                  <div class="col-sm-12 col-md-4 col-lg-4">@if ($errors->has('lastname'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                        @endif</div>
                </div>
                
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
               <div class="row">
                 <div class="col-sm-3 col-md-3 col-lg-3" style="color: gray;">Birthday:</div>
                 <div class="col-sm-9 col-md-9 col-lg-9" > 
                  <input type="date" name="bday" id="bday" class="dropdate ">
                 
                </div>
                        @if ($errors->has('bday'))
                            <span class="help-block">
                                  <strong>{{ $errors->first('bday') }}</strong>
                            </span>
                        @endif  
            
               </div>
                 <div class="row">
        <div class="radio radio-primary">
           <div class="col-sm-3 col-md-3 col-lg-3" style="color: gray;">Gender:</div>
           <input type="hidden" name="birthday" value="dobday">
           <div class="col-sm-3 col-md-3 col-lg-3" style="color: gray;"><input type="radio" id="gender" name="gender" value="0" checked=""> Male</div>
           <div class="col-sm-3 col-md-3 col-lg-3" style="color: gray;"><input type="radio" id="gender" name="gender" value="1"> Female</div>
           <div class="col-sm-3 col-md-3 col-lg-3" style="color: gray;"><input type="radio" id="gender" name="gender" value="2"> Other</div>
            
  
  
        </div>
        </div>
                <input type="password" id="password" name="password" class="form-control top-bottom-10px" placeholder="Password" required autofocus>
@if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                
                 <input type="password" id="repassword" class="form-control" placeholder="Retype Password" required>
                 @if ($errors->has('repassword'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('repassword') }}</strong>
                                    </span>
                        @endif
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="agree" id="agree" value="remember-me"> I agree to Terms and Condition
                    </label>
                </div>
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Register</button>
            </form><!-- /form -->
            <a href="{{route('client.login')}}" class="forgot-password">
                Back to Login
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->

    @endsection