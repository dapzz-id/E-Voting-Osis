<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Admin</title>
</head>
<body class="">
    <nav class="sidebar close shadow-lg">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('assets/img/tels.png') }}" alt="logo">
                </span>
                <div class="text header-text">
                    <span class="name">SMK Telesandi</span>
                    <span class="profession">Pilketos Database</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/admin" class="">
                            <i class="bx bx-home-alt icons"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/daftar_1" class="">
                            <i class='bx bx-table icons'></i>
                            <span class="text nav-text">Haura Azalia</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/daftar_2" class="">
                            <i class='bx bx-table icons'></i>
                            <span class="text nav-text">Risky Fadillah</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/daftar_3" class="">
                            <i class='bx bx-table icons'></i>
                            <span class="text nav-text">Bagas haidar</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/Pemilihan" class="">
                            <i class='bx bx-clipboard icons' ></i>
                            <span class="text nav-text">Pemilihan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <form action="/logout" method="POST" class="w-full h-full">
                        @csrf
                        <a>
                            <button class="flex w-full">
                                <i class="bx bx-log-out icons" ></i>
                                <span class="text nav-text">Logout</span>
                            </button>
                        </a>
                    </form>
                </li>
            </div>
        </div>
    </nav>
    <section class="kotak">
        <div class="flex justify-between">
            <div class="flex mt-1">
                <P class="text-2lg text-white font-bold">Login As : <span>{{Auth::user()->name}}</span></P>
            </div>
        </div>
    </section>
    <section class="home">
        @yield('content')
    </section>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>