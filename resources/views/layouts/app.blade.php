<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <header>
        @include('partials.header')
    </header>

             @yield('content')

    <footer>
        @include('partials.footer')
     </footer>
     <script>
         const dropDown = document.querySelector('#dropDown');
         const dropDownContent = document.querySelector('.dropdown-content');

        const myFunction = () => {
            dropDown.addEventListener('click', ()=>{
            console.log('hi');
            dropDownContent.classList.toggle('activate-dropdown');
        });
        }

        myFunction();
     </script>
</body>
</html>