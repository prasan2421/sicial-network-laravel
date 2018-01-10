@extends('client/layout/app')
@section('content')
<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
               <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <center><b>Select your Profile Picture:</b></center><br/> <center><input type="file" name="img"></center>
                </div>
               </div>
                
               <div id="later" class="checkbox">
                    <label>
                        <input type="checkbox" value="1"> I will add profile picture later
                    </label>
                </div>
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Register</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->
    @end section