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
    <div class="my-container">
        <nav>
            <div class="title"> <img src="{{ asset('images/'. $Ui_designs->header_logo) }}" alt=""><h3>{{ $Ui_designs->site_name }}</h3></div>
            <ul class="navlist">
                <div class="">
                   <div class="link">
                        <a href="#">Login</a>
                   </div>
                </div>
            </ul>
        </nav>
        <div>
            <h2>Welcome to Lucid Blog</h2>
            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_jtvduiqm.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        </div>

        <form action="" method="post">
            <div>
                <label for="firstname"></label>
                <input id="firstname" type="text" placeholder="First name">
            </div>
            <div>
                <label for="lastname"></label>
                <input id="lastname" type="text" placeholder="Last name">
            </div>
            <div>
                <label for="email"></label>
                <input id="email" type="email" placeholder="Email">
            </div>
            <div>
                <label for="password"></label>
                <input id="password" type="password" placeholder="Password">
            </div>
            <div>
                <label for="newpassword"></label>
                <input id="newpassword" type="password" placeholder="Confirm Password">
            </div>
            <div>
                <input type="checkbox" name="" id="">
               <p> By ticking this box you agree to our terms and conditions</p>
            </div>

            <button type="submit">Submit</button>
            <h3>Already have an account Login here. <a href="">Login</a></h3>
        </form>
    </div> 
    <svg width="1440" height="826" viewBox="0 0 1440 826" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1440 96L1392 85.3C1344 75 1248 53 1152 69.3C1056 85 960 139 864 144C768 149 672 107 576 101.3C480 96 384 128 288 170.7C192 213 96 267 48 293.3L0 320V0H48C96 0 192 0 288 0C384 0 480 0 576 0C672 0 768 0 864 0C960 0 1056 0 1152 0C1248 0 1344 0 1392 0H1440V96Z" fill="#871E99"/>
        <path d="M0 730L48 740.7C96 751 192 773 288 756.7C384 741 480 687 576 682C672 677 768 719 864 724.7C960 730 1056 698 1152 655.3C1248 613 1344 559 1392 532.7L1440 506V826H1392C1344 826 1248 826 1152 826C1056 826 960 826 864 826C768 826 672 826 576 826C480 826 384 826 288 826C192 826 96 826 48 826H0V730Z" fill="#871E99"/>
        </svg>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>    
</body>
</html>