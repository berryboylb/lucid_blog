<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>
<body>
    <div class="sign-container">
        <div class="finnish">
                <lottie-player class="scanner" src="https://assets8.lottiefiles.com/packages/lf20_jtvduiqm.json" background="transparent"  speed="1" loop autoplay></lottie-player>
    
            <form class="signup-form" action="" method="post">
                    <h2>Nice to have you back</h2>
                    <h4>Please fill in the following details.</h4>
                    <input class="input" id="email" type="email" placeholder="Email">
                    <input class="input" id="password" type="password" placeholder="Password">
    
                <button id="submit-btn" type="submit">Login</button>
                <h3>Don't have an account. Sign up here <a href="/signup">Signup</a></h3>
            </form>
        </div>
    </div> 
   
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>   
</body>
</html>