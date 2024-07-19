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
                            <span class="text nav-text">Bagas Haidar</span>
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
        <div class="grid lg:grid-cols-3 gap-8 w-full md:grid-cols-1">
            <div class="bg-blue-500 rounded-lg h-[180px] px-4 shadow-lg">
                <div class="grid grid-cols-2 gap-0 w-full h-full">
                    <div class="mx-auto w-full my-auto">
                        <img src="{{asset('assets/img/orang1c.png')}}" alt="" class="w-[120px] mx-auto">
                    </div>
                    <div class="text-center items-center my-auto">
                        <p class="text-white font-bold text-xl mb-4">Haura Azalia</p>
                        <P class="text-white font-bold text-5xl">{{$kandidat1}}</P>
                        <p class="text-white font-bold">Voting</p>
                    </div>
                </div>
            </div>
            <div class="bg-green-500 rounded-lg h-[180px] px-4 shadow-lg">
                <div class="grid grid-cols-2 gap-0 w-full h-full">
                    <div class="mx-auto w-full my-auto">
                        <img src="{{asset('assets/img/orang2c.png')}}" alt="" class="w-[120px] mx-auto">
                    </div>
                    <div class="text-center items-center my-auto">
                        <p class="text-white font-bold text-xl mb-4">Rizky Fadillah</p>
                        <P class="text-white font-bold text-5xl">{{$kandidat2}}</P>
                        <p class="text-white font-bold">Voting</p>
                    </div>
                </div>
            </div>
            <div class="bg-red-600 rounded-lg h-[180px] px-4 shadow-lg">
                <div class="grid grid-cols-2 gap-0 w-full h-full">
                    <div class="mx-auto w-full my-auto">
                        <img src="{{asset('assets/img/orang3c.png')}}" alt="" class="w-[120px] mx-auto">
                    </div>
                    <div class="text-center items-center my-auto">
                        <p class="text-white font-bold text-xl mb-4">Bagas Haidar</p>
                        <P class="text-white font-bold text-5xl">{{$kandidat3}}</P>
                        <p class="text-white font-bold">Voting</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap mt-10 w-full">
            <div class="w-1/3">
                <div class="bg-white w-[97%] rounded p-4 shadow-lg">
                    <div style="width: 75%; margin: auto;">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="w-2/3">
                <div class="bg-white w-[97%] rounded float-right p-4 shadow-lg">
                    <div style="width: 71%; margin: auto;">
                        <canvas id="myCharta"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart').getContext('2d');
            var chartData = @json($chartData);

            new Chart(ctx, {
                type: 'doughnut', // Tipe chart doughnut
                data: chartData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Jumlah Vote'
                        }
                    }
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myCharta').getContext('2d');
            var chartDatas = @json($chartDatas);

            new Chart(ctx, {
                type: 'bar', // Tipe chart doughnut
                data: chartDatas,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Jumlah Vote'
                        }
                    }
                }
            });
        });
    </script>
    <script>
        // Auto-refresh every 3 minutes
        setInterval(function() {
            location.reload();
        }, 20000);
    </script>
</body>
</html>