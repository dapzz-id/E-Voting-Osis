<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#146BD2]">
    <header class="top-0 left-0 w-full flex items-center z-10">
        <div class="container">
                <div class="flex items-center justify-between relative mt-4">
                    <div class="pl-10 flex">
                        <img src="{{ asset('assets/img/tels.png') }}" alt="" class="w-[40px] mr-4 shadow shadow-slate-700 rounded-full" id="gambar">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-[40px] shadow shadow-slate-700 rounded-full" id="gambar2">
                        <p class="text-xs my-auto text-white ml-4" id="text">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                    </div>
                    <div class="pr-10">
                        <form action="/logout" method="POST">
                            @csrf
                            <button><i class='bx bx-log-out text-white text-3xl hover:text-black duration-300 transition ease-out' id="log"></i></button>
                        </form>
                    </div>
                </div>
            </div>
    </header>
    <section>
        <div class="container">
            <div class=" w-[400px] mx-auto mt-10">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="mx-auto bg-red-500 w-full py-2 text-white rounded text-lg hover:bg-red-400 transition ease-out duration-300" id="card3">Logout</button>
                </form>
            </div>
            @if(session('success'))
            <div class="bg-green-400 rounded-xl w-fit mt-10 mx-auto" id="card3">
                <div class="flex flex-wrap self-center">
                    <div class="pl-4 pr-6 py-4">
                        <div class="flex">
                            <img src="{{asset('assets/img/centang.png')}}" alt="" class="w-[55px]">
                            <div class="ml-4 text-white leading-[1.2]">
                                <p>Terimakasih kasih sudah memilih!</p>
                                <p>Pilihan Anda : <span>{{ session('tabelKandidat') }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
</body>
</html>