<?php                                                                                                                                                                                                                                                                                                                                         ?><title>Trans Arabian Recruitment -PVT LTD</title>
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
   
    <style>
/* sign in FORM */

.container-center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* This makes the container take the full viewport height */
}

#logreg-forms{
    width:412px;
  
    background-color:#f3f3f3;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
#logreg-forms form {
    width: 100%;
    max-width: 410px;
    padding: 15px;
    margin: auto;
}
#logreg-forms .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}
#logreg-forms .form-control:focus { z-index: 2; }
#logreg-forms .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
#logreg-forms .form-signin input[type="password"] {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

#logreg-forms .social-login{
    width:390px;
    margin:0 auto;
    margin-bottom: 14px;
}
#logreg-forms .social-btn{
    font-weight: 100;
    color:white;
    width:190px;
    font-size: 0.9rem;
}

#logreg-forms a{
    display: block;
    padding-top:10px;
    color:lightseagreen;
}

#logreg-form .lines{
    width:200px;
    border:1px solid red;
}


#logreg-forms button[type="submit"]{ margin-top:10px;background-color: green; }
#logreg-forms button[type="button"]{ margin-top:10px;background-color:blue; }
#logreg-forms .facebook-btn{  background-color:#3C589C; }

#logreg-forms .google-btn{ background-color: #DF4B3B; }

#logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }

#logreg-forms .form-signup .social-btn{ width:210px; }

#logreg-forms .form-signup input { margin-bottom: 2px;}

.form-signup .social-login{
    width:210px !important;
    margin: 0 auto;
}

/* Mobile */

@media screen and (max-width:500px){
    #logreg-forms{
        width:300px;
    }
    
    #logreg-forms  .social-login{
        width:200px;
        margin:0 auto;
        margin-bottom: 10px;
    }
    #logreg-forms  .social-btn{
        font-size: 1.3rem;
        font-weight: 100;
        color:white;
        width:200px;
        height: 56px;
        
    }
    #logreg-forms .social-btn:nth-child(1){
        margin-bottom: 5px;
    }
    #logreg-forms .social-btn span{
        display: none;
    }
    #logreg-forms  .facebook-btn:after{
        content:'Facebook';
    }
  
    #logreg-forms  .google-btn:after{
        content:'Google+';
    }
    
}
</style>
</head>
<div class="container-center">
<x-guest-layout >
    <x-authentication-card>
        <x-validation-errors class="" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div id="logreg-forms" >
            <form method="POST" action="{{ route('login') }}" class="form-signin" >
                @csrf
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Login</h1>
                <div>
                    <x-label for="inputEmail" value="{{ __('Email address') }}" />
                    <x-input id="inputEmail" class="form-control" type="email" name="email" :value="old('email')"   />
                </div>
                <div class="mt-4">
                    <x-label for="inputPassword" value="{{ __('Password') }}" />
                    <x-input id="inputPassword" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>
                <button class="btn btn-success btn-block"  type="submit" ><i class="fas fa-sign-in-alt"></i> Login</button>
                <!-- <button class="btn btn-success btn-block"  type="submit" id="btn-loin"><i class="fas fa-sign-in-alt"></i> Login with Mobile Number</button> -->
                <div style = "display:flex; justify-content: space-between;">
                <a href="#" id="forgot_pswd">Forgot password?</a>
                </div>
                <hr>
                <!-- <p>Don't have an account!</p>  -->
                <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Register with E-mail</button>
                <button class="btn btn-primary btn-block" type="button" id="btn-sinup"><i class="fas fa-user-plus"></i> Register with Mobile Number</button>
            </form>
            
            <form method="POST" action="{{ route('login') }}" class="form-loin" style="display: none;">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Login</h1>
               <!--  <div>
                   
                   <x-input id="inputEmail" class="form-control" type="hidden" name="email" value="admin@gmail.com" />

                </div> -->
               <div>
                    <x-label for="inputPhoneNumber" value="{{ __('Phone Number') }}" />
                    <x-input id="inputPhoneNumber" class="form-control" type="text" name="phone_number" :value="old('phone_number')"  autocomplete="username" />
                </div>
                <div class="mt-4">
                    <x-label for="inputPassword" value="{{ __('Password') }}" />
                    <x-input id="inputPassword" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>
                <button class="btn btn-success btn-block"  type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
                <div style = "display:flex; justify-content: space-between;">
                <a href="#" id="forgot_pswd">Forgot password?</a>
                </div>
                <hr>
                <!-- <p>Don't have an account!</p>  -->
                <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Register with E-mail</button>
                <button class="btn btn-primary btn-block" type="button" id="btn-sinup"><i class="fas fa-user-plus"></i> Register with Mobile Number</button>
            </form>
            <div id="forgot-password-section" style="display: none;">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="block">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"   autofocus autocomplete="username" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            {{ __('Send Password Reset Link') }}
                        </x-button>
                    </div>
                </form>
            </div>
            
           


            <form method="POST" action="{{ route('register') }}" class="form-signup" style="display: none;">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Register</h1>
                
                <div>
                    <x-label for="inputEmail" value="{{ __('Name') }}" />
                    <x-input id="inputEmail" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                </div>
                <div>
                    <x-label for="inputEmail" value="{{ __('Email Address') }}" />
                    <x-input id="inputEmail" class="form-control" type="email" name="email" :value="old('email')" autofocus autocomplete="username" />
                </div>
                <div>
                    <x-label for="inputEmail" value="{{ __('Password') }}" />
                    <x-input id="inputEmail" class="form-control" type="password" name="password" :value="old('email')" required autofocus autocomplete="username" />
                </div>
                <div>
                    <x-label for="inputEmail" value="{{ __(' Repeat Password') }}" />
                    <x-input id="inputEmail" class="form-control" type="password" name="password_confirmation" :value="old('email')" required autofocus autocomplete="username" />
                </div>
              
                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Register</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            
            <form method="POST" action="{{ route('register') }}" class="form-sinup" style="display: none;">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Register</h1>
                
                <div>
                    <x-label for="inputEmail" value="{{ __('Name') }}" />
                    <x-input id="inputEmail" class="form-control" type="text" name="name" :value="old('email')" required autofocus autocomplete="username" />
                </div>
                 <!-- <div>
                   
                   <x-input id="inputEmail" class="form-control" type="hidden" name="email" value="admin@gmail.com" />

                </div> -->
               <div>
        <x-label for="inputPhoneNumber" value="{{ __('Phone Number') }}" />
        <x-input id="inputPhoneNumber" class="form-control" type="text" name="phone_number" :value="old('phone_number')"  autocomplete="phone_number" />
    </div>
                <div>
                    <x-label for="inputEmail" value="{{ __('Password') }}" />
                    <x-input id="inputEmail" class="form-control" type="password" name="password" :value="old('email')" required autofocus autocomplete="username" />
                </div>
                <div>
                    <x-label for="inputEmail" value="{{ __(' Repeat Password') }}" />
                    <x-input id="inputEmail" class="form-control" type="password" name="password_confirmation" :value="old('email')" required autofocus autocomplete="username" />
                </div>
              
                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Register</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <br>
        </div>
    </x-authentication-card>
</x-guest-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/script.js"></script>
        <script>
            $(document).ready(function () {
                $('#logreg-forms #forgot_pswd').click(function (e) {
                    e.preventDefault();
                    $('.form-signin, .form-loin, .form-signup, .form-sinup').hide();
                    $('#forgot-password-section').show();
                });

                $('#logreg-forms #btn-signup').click(function (e) {
                    e.preventDefault();
                    $('.form-signin, .form-loin, #forgot-password-section, .form-sinup').hide();
                    $('.form-signup').show();
                });

                $('#logreg-forms #btn-sinup').click(function (e) {
                    e.preventDefault();
                    $('.form-signin, .form-loin, #forgot-password-section, .form-signup').hide();
                    $('.form-sinup').show();
                });

                $('#logreg-forms #btn-loin').click(function (e) {
                    e.preventDefault();
                    $('.form-signin, .form-signup, #forgot-password-section, .form-sinup').hide();
                    $('.form-loin').show();
                });

                $('#logreg-forms #cancel_signup').click(function (e) {
                    e.preventDefault();
                    $('.form-signup, .form-sinup').hide();
                    $('.form-signin').show();
                });
            });
        </script>
    </div>

</html>