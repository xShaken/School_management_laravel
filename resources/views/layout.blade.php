<!DOCTYPE html>
<html>

<head>
    <title>Laravel - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
        }

        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .container-div {
            display: flex;
            padding: 0;
            margin: 0;
        }

        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding-right: 2.5rem;
            background: transparent;
            backdrop-filter: blur(40px);
            box-shadow: rgba(0, 0, 0, 0.30) 2.4px 2.4px 3.2px;
            position: fixed;
            width: 100%;
            height: 3rem;
            z-index: 1;
        }

        .header .acc {
            display: flex;
            height: fit-content;
            justify-content: flex-end;
            flex-direction: row;
            text-align: center;
            align-items: center;
            gap: .70rem;
        }

        .header .acc div i {
            font-size: 29px;
            color: #ffffff;
        }

        .header .acc div h6 {
            font-size: 12px;
            margin: 0;
            color: #FBB040;
        }

        .face {
            display: flex;
            align-items: center;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 80px;
            min-width: 80px;
            height: 100%;
            background: transparent;
            backdrop-filter: blur(40px);
            border-right: 2px solid rgba(0, 0, 0, 0.2);
            box-shadow: rgba(0, 0, 0, 0.30) 2.4px 2.4px 3.2px;
            padding: 6px 14px;
            transition: .5s;
            z-index: 1;
        }

        .sidebar.active {
            width: 280px;
            min-width: 280px;
        }

        .sidebar .logo-menu {
            display: flex;
            align-items: center;
            width: 100%;
            height: 70px;
        }

        .sidebar .logo-menu .logo {
            font-size: 25px;
            color: #FBB040;
            pointer-events: none;
            opacity: 0;
            transition: .3s;
        }

        .sidebar.active .logo-menu .logo {
            opacity: 1;
            transition-delay: .2s;
        }

        .sidebar .logo-menu .toggle-btn {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            font-size: 22px;
            color: #FBB040;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
            transition: .5s;
        }

        .sidebar.active .logo-menu .toggle-btn {
            left: 90%;
        }

        .sidebar .nav-list {
            margin-top: 10px;
            padding: 0;
        }

        .nav-list .list-item {
            list-style: none;
            width: 100%;
            height: 50px;
            margin: 5px 0;
            line-height: 50px;
        }

        .nav-list .list-item a {
            display: flex;
            align-items: center;
            font-size: 15px;
            color: #FBB040;
            font-weight: bold;
            text-decoration: none;
            border-radius: 6px;
            white-space: nowrap;
            transition: .5s;
        }

        .nav-list .list-item.active a,
        .nav-list .list-item a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .nav-list .list-item a i {
            min-width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
        }

        .sidebar .link-name {
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s;
        }

        .sidebar.active .link-name {
            opacity: 1;
            pointer-events: auto;
        }

        div hr {
            color: #FBB040;
            background-color: #FBB040;
        }

        .menu nav ul div p {
            font-size: .75em;
            color: #FBB040;
        }

        .men-p {
            display: flex;
            justify-content: center;
            padding: 0;
        }

        .invi-div {
            width: 80px;
            min-width: 80px;
            height: 100%;
            transition: .5s;
        }

        .invi-div.active {
            width: 280px;
            min-width: 280px;
        }

        .content {
            padding-bottom: 5rem;
        }

        .contents-div {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            padding: 0 0 1rem 2rem;
            gap: 1rem;
            row-gap: 1rem;
            transition: .5s;
            margin:-4rem 0 0 0 !important;
        }

        .contents-div.active {
            padding: 0 0 1rem 1.5rem;
            gap: 1rem;
        }

        .dashboard-content {
            display: flex;
            background-color: #ffffff;
            justify-content: flex-start;
            border-radius: 5px !important;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 20px;
            position: relative;
            width: 450px;
            min-width: 400px;
            height: 150px;
            top: 5rem;
            transition: .5s;
        }

        .dashboard-content.active {
            width: 390px;
            min-width: 350px;
        }

        .st{
            position: relative;
          width: 100%;
          padding: 1rem;
           
        }
        td{
            
         width: 40%;
         
        }
        th{

        width: 40%;
        }

        .dashboard-content p {
            font-size: 1em;
            font-weight: bold;
            color: #FBB040;
            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
            background-color: transparent;
            height: 30px;
            padding: 0 10px;
            padding-top: 5px;
            border-radius: 5px;
            transform: translatex(-5px);
            z-index: 1;
        }

        
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container m-8">
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        const sidebar = document.querySelector('.sidebar');
        const invi = document.querySelector('.invi-div');
        const condiv = document.querySelector('.contents-div');
        const dashcon = document.querySelectorAll('.dashboard-content');
        const toggleBtn = document.querySelector('.toggle-btn');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            invi.classList.toggle('active');
            condiv.classList.toggle('active');

            dashcon.forEach(content => {
                content.classList.toggle('active');
            });
        });
    </script>
</body>

</html>