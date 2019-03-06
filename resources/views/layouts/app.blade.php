<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">

    <link rel="stylesheet" href="{{asset('css/hover.css')}}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script>

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-border-orange", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-border-orange";
            document.getElementById('showing').style.display = "none";

        }
        function showMore(){
          document.getElementById('more').style.display='block';
          document.getElementById('less').style.display='block';
          document.getElementById('hide').style.display='none';
        }
        function showLess(){
          document.getElementById('more').style.display='none';
          document.getElementById('less').style.display='none';
          document.getElementById('hide').style.display='block';
        }

    </script>


    
</body>
</html>