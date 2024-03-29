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
                @csrf
                    <h2>Welcome to Lucid Blog</h2>
                    <h4>Please fill in the following details.</h4>
                    <input class="input  @error('fname') is-invalid @enderror" id="firstname" name="fname" type="text" placeholder="First name">
                    @error('fname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="input @error('lname') is-invalid @enderror" id="lastname" name="lname" type="text" placeholder="Last name">
                    @error('lname')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="input @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                    <input class="input" id="password" name="password" type="password" placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="input @error('password_confirmation') is-invalid @enderror" id="con-password" name="password_confirmation" type="password" placeholder="Confirm Password">
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="terms">
                    <label class="containera">
                        <input id="sign-box" type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                   <p> By ticking this box you agree to our terms and conditions</p>
                </div>
    
                <button id="submit-btn" type="submit">Submit</button>
                <h3>Already have an account Login here. <a href="/">Login</a></h3>
            </form>
        </div>
        <img class="signup-blobs" src="{{ asset('images/blob (4).svg') }}" alt="blob">
         <img class="signup-blob-2" src="{{ asset('images/blob (4).svg') }}" alt="blob">
    </div> 
   
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>   
        <script>
            var signBox = document.querySelector('#sign-box');
            var submitBtn = document.querySelector('#submit-btn');
            var letter = "f";
            submitBtn.disabled = true;
            submitBtn.style.background = '#aaa';
           
            signBox.addEventListener('click', ()=>{
                if(letter == "f"){
                    submitBtn.disabled = false;
                    submitBtn.style.background = '#871E99';
                    letter = "g";
                }
                else{
                    letter = "f";
                    submitBtn.disabled = true;
                    submitBtn.style.background = '#aaa';
                }
            })
         </script> 
</body>
</html>