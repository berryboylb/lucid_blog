<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>
<body>
    <div class="sign-container">
        <div class="finnish">
                <lottie-player class="scanner" src="https://assets8.lottiefiles.com/packages/lf20_jtvduiqm.json" background="transparent"  speed="1" loop autoplay></lottie-player>
    
            <form class="signup-form" action="" method="post">
                @csrf
                    <h2>Nice to have you back</h2>
                    <h4>Please fill in the following details.</h4>
                    <input class="input @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger" style="margin-top: 2%">{{ $message }}</div>
                    @enderror
                    <input class="input" id="password" name="password" type="password" placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger" style="margin-top: 2%">{{ $message }}</div>
                    @enderror
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="terms">
                        <label class="containera">
                            <input id="sign-box" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                       <p>Remember Me</p>
                    </div>
    
                <button id="submit-btn" type="submit">Login</button>
                <h3>Don't have an account. Sign up here <a href="/register">Signup</a></h3>
            </form>
        </div>
    </div> 
   
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>   
    <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>