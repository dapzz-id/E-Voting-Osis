<!DOCTYPE html>
<html lang="en" class="lg:h-[100%]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kandidat</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/tels.png')}}">
    @vite('resources/css/app.css')
    <style>
        body {
            background-image: url({{ asset('assets/img/bg.png') }});
        }
        body {
            background-size: cover;
            background-repeat: no-repeat;
        }
        /* Gaya dasar untuk popup */
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .popup-overlay {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('myForm');
            const popup = document.getElementById('popup');
            const popupOverlay = document.getElementById('popupOverlay');
            const confirmButton = document.getElementById('confirmButton');
            const cancelButton = document.getElementById('cancelButton');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah form dikirim langsung
                popupOverlay.style.display = 'block';
                popup.style.display = 'block';
            });

            confirmButton.addEventListener('click', function() {
                popupOverlay.style.display = 'none';
                popup.style.display = 'none';
                form.submit(); // Kirim form jika pengguna mengonfirmasi
            });

            cancelButton.addEventListener('click', function() {
                popupOverlay.style.display = 'none';
                popup.style.display = 'none';
            });
        });
    </script>
</head>
<body class="bg-[#146BD2] lg:h-[100%]">
    <header class="top-0 left-0 w-full flex items-center z-10">
        <div class="container">
                <div class="flex items-center justify-between relative lg:mt-4 md:mt-8">
                    <div class="pl-10 flex">
                        <img src="{{ asset('assets/img/tels.png') }}" alt="" class="w-[40px] mr-4 shadow shadow-slate-700 rounded-full" id="gambar">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-[40px] shadow shadow-slate-700 rounded-full" id="gambar2">
                        <p class="text-xs my-auto text-white ml-4" id="text">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                    </div>
                    <div class="pr-10 flex">
                        <i class='bx bx-user-circle text-[30px] my-auto text-slate-50 mr-2' id="gambar2"></i>
                        <p class="text-xs my-auto text-white mr-5" id="text"><span>{{Auth::user()->name}}</span></p>
                        <form action="/logout" method="POST" id="myForm">
                            @csrf
                            <button><i class='bx bx-log-out text-white text-3xl hover:text-black duration-300 transition ease-out' id="log"></i></button>
                        </form>
                    </div>
                </div>
            </div>
    </header>
    <section class="md:pb-12 md:mt-16 lg:mt-4">
        <div class="container">
            <div class="px-6">
                <h1 class="text-center text-white text-3xl font-bold" id="judul">PEMILIHAN OSIS 2024/2025</h1>
            </div>
            <div class="w-full">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-9 lg:w-[1000px] md:w-[330px]  mx-auto mt-10">
                    <div class="w-full bg-white rounded-lg lg:h-[420px] md:h-[430px] shadow-lg shadow-slate-700" id="card">
                        <div class="w-full pt-10">
                            <div class="w-[150px] h-[150px] rounded-full mx-auto">
                                <img src="{{asset('assets/img/orang1c.png')}}" alt="">
                            </div>
                        </div>
                        <div class="px-6">
                            <p class="text-center text-2xl font-bold mt-4">Haura Azalia</p>
                            <a href="/kandidat1"><button class="w-full bg-[#146BD2] hover:bg-blue-800 transition ease-out duration-300 text-white font-semibold py-2 mt-28 rounded-lg">Visi Misi</button></a>
                        </div>
                    </div>
                    <div class="w-full bg-white rounded-lg lg:h-[420px] md:h-[430px] shadow-lg shadow-slate-700" id="card2">
                        <div class="w-full pt-10">
                            <div class="w-[150px] h-[150px] rounded-full mx-auto">
                                <img src="{{asset('assets/img/orang2c.png')}}" alt="">
                            </div>
                        </div>
                        <div class="px-6">
                            <p class="text-center text-2xl font-bold mt-4">Rizky Fadillah</p>
                            {{-- <p class="text-center text-sm mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, vero!</p> --}}
                            <a href="/kandidat2"><button class="w-full bg-[#146BD2] hover:bg-blue-800 transition ease-out duration-300 text-white font-semibold py-2 mt-28 rounded-lg">Visi Misi</button></a>
                        </div>
                    </div>
                    <div class="w-full bg-white rounded-lg lg:h-[420px] md:h-[430px] shadow-lg shadow-slate-700" id="card3">
                        <div class="w-full pt-10">
                            <div class="w-[150px] h-[150px] rounded-full mx-auto">
                                <img src="{{asset('assets/img/orang3c.png')}}" alt="">
                            </div>
                        </div>
                        <div class="px-6">
                            <p class="text-center text-2xl font-bold mt-4">Bagas Haidar</p>
                            {{-- <p class="text-center text-sm mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, vero!</p> --}}
                            <a href="/kandidat3"><button class="w-full bg-[#146BD2] hover:bg-blue-800 transition ease-out duration-300 text-white font-semibold py-2 mt-28 rounded-lg">Visi Misi</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="popupOverlay" class="popup-overlay"></div>

    <!-- Popup -->
    <div id="popup" class="popup px-10 py-8 rounded-md">
        <p class="font-bold text-center text-lg mb-4">Apakah Anda yakin ingin keluar dari halaman ini?</p>
        <div class="text-center">
            <button id="confirmButton" class="bg-[#146BD2] w-[120px] mr-2 py-1 text-white rounded-md hover:bg-blue-900">Ya</button>
            <button id="cancelButton" class="bg-[#146BD2] w-[120px] py-1 text-white rounded-md hover:bg-blue-900">Tidak</button>
        </div>
    </div>
</body>
</html>