<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/tels.png')}}">
    @vite('resources/css/app.css')
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
</head>
<body class="bg-[#146BD2]">
    <header class="top-0 left-0 w-full flex items-center z-10">
        <div class="container">
                <div class="flex items-center justify-between relative mt-6">
                    <div class="md:pl-10 pl-2">
                        <img src="{{ asset('assets/img/tels.png') }}" alt="" class="md:w-[60px] w-[35px] shadow shadow-slate-700 rounded-full">
                    </div>
                    <div>
                        <p class="text-white md:text-2xl text-xs font-bold drop-shadow-2xl">PEMILIHAN KETUA OSIS 2024/2025</p>
                    </div>
                    <div class="md:pr-10 pr-2">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="md:w-[60px] w-[35px] shadow shadow-slate-700 rounded-full">
                    </div>
                </div>
            </div>
    </header>
    <section class="mb-6">
        <div class="container px-4">
            <div class="md:w-[430px] w-[300px] bg-white mx-auto my-auto rounded-[10px] mt-10 md:mt-5">
                <div class="md:px-12 px-8 py-6">
                    <h1 class="text-center md:text-2xl text-lg font-bold">Register</h1>
                    <div class="mt-5 md:mt-10">
                        <form action="/registers" method="POST">
                            @csrf
                            <div class="relative">
                                <p class="mb-2 text-xs md:text-base text-gray-500 font-bold">NIS/NPK :</p>
                                <input type="number" value="{{old('NIS')}}" name="NIS" placeholder="NIS/NPK" class="w-full rounded-md md:py-2.5 py-2 px-4 border-2 text-xs   md:text-sm outline-[#146BD2] @error('NIS') border-red-600 @enderror" required>
                                @error('NIS')
                                    <div class="absolute inset-y-0 right-0 pr-3 flex pt-3 items-center text-sm leading-5">
                                        <i class='bx bxs-error-circle text-red-500 text-xl'></i>
                                    </div>
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4 relative">
                                <p class="mb-2 text-xs md:text-base text-gray-500 font-bold">Name :</p>
                                <input type="text" name="name" value="{{old('name')}}" placeholder="name" class="w-full rounded-md md:py-2.5 py-2 px-4 border-2 text-xs  md:text-sm outline-[#146BD2] @error('name') border-red-600 @enderror" required>
                                @error('name')
                                    <div class="absolute inset-y-0 right-0 pr-3 flex pt-3 items-center text-sm leading-5">
                                        <i class='bx bxs-error-circle text-red-500 text-xl'></i>
                                    </div>
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <input type="hidden" name="role" value="siswa">
                            </div>
                            <div class="mt-4 md:mb-1 relative">
                                <p class="mb-2 text-xs md:text-base text-gray-500 font-bold">Password :</p>
                                <input type="text" name="password" placeholder="password" class="w-full rounded-md md:py-2.5 py-2 px-4 border-2 text-xs  md:text-sm outline-[#146BD2] @error('password') border-red-600 @enderror" required>
                                @error('password')
                                    <div class="absolute inset-y-0 right-0 pr-3 flex pt-3 items-center text-sm leading-5">
                                        <i class='bx bxs-error-circle text-red-500 text-xl'></i>
                                    </div>
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-7 md:mb-10">
                                <a href="/" class="text-[0.68rem] md:text-sm text-indigo-500 hover:text-indigo-700 hover:underline">Sudah punya akun</a>
                            </div>
                            <input type="submit" class="bg-[#146BD2] text-white py-[0.44rem] md:py-2 text-xs md:text-base w-full rounded md:mb-4 mb-2 hover:bg-[#0051B1] transition ease-out duration-500" value="Register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>