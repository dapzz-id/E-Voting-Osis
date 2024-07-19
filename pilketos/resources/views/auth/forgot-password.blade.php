<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/tels.png')}}">
    <style>
        /* Hapus panah up dan down pada Chrome, Safari, Edge, dan Opera */
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Hapus panah up dan down pada Firefox */
        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>
    <title>Lupa Password</title>
</head>
<body class="bg-[#146BD2]">
    <div class="container">
        <header class="top-0 left-0 w-full flex items-center z-10">
            <div class="container">
                    <div class="flex items-center justify-between relative mt-6">
                        <div class="pl-10">
                            <img src="{{ asset('assets/img/tels.png') }}" alt="" class="w-[60px] shadow shadow-slate-700 rounded-full">
                        </div>
                        <div>
                            <p class="text-white text-2xl font-bold drop-shadow-2xl">PEMILIHAN KETUA OSIS 2024/2025</p>
                        </div>
                        <div class="pr-10">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-[60px] shadow shadow-slate-700 rounded-full">
                        </div>
                    </div>
                </div>
        </header>
        <div class="w-[430px] bg-white mx-auto my-auto rounded-[10px] mt-9 shadow-lg shadow-slate-700">
            <div class="px-12 py-6">
                <h1 class="text-center text-xl font-bold">Lupa Password</h1>
                <div class="mt-10">
                    <form action="{{ url('/forgot-password') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <p class="mb-2 text-gray-500 font-bold">NIS/NPK :</p>
                            <input type="number" id="nis" name="nis" placeholder="NIS/NPK" class="w-full rounded-md py-2.5 px-4 border-2 text-sm outline-[#146BD2]" required>
                        </div>
                        <div class="mb-10">
                            <p class="mb-2 text-gray-500 font-bold">Name : </p>
                            <input type="text" id="security_question" name="name" placeholder="Name" class="w-full rounded-md py-2.5 px-4 border-2 text-sm outline-[#146BD2]" required>
                        </div>
                        <input type="submit" class="bg-[#146BD2] text-white py-2 w-full rounded mb-6 hover:bg-[#0051B1] transition ease-out duration-500" value="Next">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
