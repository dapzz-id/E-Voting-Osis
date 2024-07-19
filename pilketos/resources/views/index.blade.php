<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    <section class="md:pb-10">
        @error('loginerror')
        <div class="w-[430px] bg-red-500 mx-auto my-auto rounded-[10px]">
            <div class="px-4 py-4">
                <p class="text-center text-white font-bold text-lg">{{$message}}</p>
            </div>
        </div>
        @enderror
        @error('message')
        <div class="w-[430px] bg-red-500 mx-auto my-auto rounded-[10px]">
            <div class="px-4 py-4">
                <p class="text-center text-white font-bold text-lg">{{$message}}</p>
            </div>
        </div>
        @enderror
        <div class="container md:px-4">
            <div class="md:w-[430px] w-[300px] bg-white mx-auto my-auto rounded-[10px] mt-9 shadow-lg shadow-slate-700">
                <div class="md:px-12 px-8 py-6">
                    <h1 class="text-center md:text-3xl text-lg font-bold">Login</h1>
                    <div class="md:mt-10 mt-6">
                        <form action="/login" method="POST">
                            @csrf
                            <div>
                                <p class="mb-2 text-xs md:text-base text-gray-500 font-bold">NIS/NPK :</p>
                                <label class="block font-medium text-sm text-gray-700" for="NIS" value="NIS/NPK">
                                <input type="number" value="{{old('NIS')}}" name="NIS" placeholder="NIS/NPK" class="w-full rounded-md md:py-2.5 py-2 px-4 border text-xs border-black md:text-sm outline-[#146BD2]" required>
                            </div>
                            <div class="mt-4 mb-1">
                                <p class="mb-2 text-xs md:text-base text-gray-500 font-bold">Password :</p>
                                <label class="block font-medium text-sm text-gray-700" for="password" value="Password"></label>
                                <div class="relative">
                                    <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password" class='w-full text-xs rounded-md md:py-2.5 py-2 px-4 border border-black md:text-sm outline-[#146BD2]'>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                        <button type="button" id="togglePassword" class="text-gray-500 focus:outline-none focus:text-gray-600 hover:text-gray-600">
                                            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                                <path d="M12 4.998c-1.836 0-3.356.389-4.617.971L3.707 2.293 2.293 3.707l3.315 3.316c-2.613 1.952-3.543 4.618-3.557 4.66l-.105.316.105.316C2.073 12.382 4.367 19 12 19c1.835 0 3.354-.389 4.615-.971l3.678 3.678 1.414-1.414-3.317-3.317c2.614-1.952 3.545-4.618 3.559-4.66l.105-.316-.105-.316c-.022-.068-2.316-6.686-9.949-6.686zM4.074 12c.103-.236.274-.586.521-.989l5.867 5.867C6.249 16.23 4.523 13.035 4.074 12zm9.247 4.907-7.48-7.481a8.138 8.138 0 0 1 1.188-.982l8.055 8.054a8.835 8.835 0 0 1-1.763.409zm3.648-1.352-1.541-1.541c.354-.596.572-1.28.572-2.015 0-.474-.099-.924-.255-1.349A.983.983 0 0 1 15 11a1 1 0 0 1-1-1c0-.439.288-.802.682-.936A3.97 3.97 0 0 0 12 7.999c-.735 0-1.419.218-2.015.572l-1.07-1.07A9.292 9.292 0 0 1 12 6.998c5.351 0 7.425 3.847 7.926 5a8.573 8.573 0 0 1-2.957 3.557z"></path>
                                            </svg>
                                            <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="eyeClosed" class="w-6 h-6 hidden">
                                                <g stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="m1 12s4-8 11-8 11 8 11 8"/><path d="m1 12s4 8 11 8 11-8 11-8"/>
                                                    <circle cx="12" cy="12" r="3"/>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex md:mb-10 mb-6 justify-between relative">
                                <a href="/forgot-password" class="hover:underline md:text-sm text-[0.58rem] text-gray-600 hover:text-gray-900 rounded-md">
                                    Forgot password?
                                </a>
                                <a href="/register" class="md:text-sm text-[0.58rem] text-indigo-500 hover:text-indigo-700 hover:underline">
                                    Create Account
                                </a>
                            </div>
                            <input type="submit" class="bg-[#146BD2] text-white py-[0.44rem] md:py-2 text-xs md:text-base w-full rounded md:mb-9 mb-4 hover:bg-[#0051B1] transition ease-out duration-500" value="Login">
                        </form>
                    </div>
                </div>
            </div>
            @if (session('loginerror'))
            <div class="alert alert-danger">
                {{ session('loginerror') }}
            </div>
            @endif
            <p class="text-center mt-4 text-xs md:text-sm font-semibold text-white">SMK Telekomunikasi Telesandi Bekasi</p>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');
        const eyeOpenIcon = document.getElementById('eyeOpen');
        const eyeClosedIcon = document.getElementById('eyeClosed');

        togglePasswordButton.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            if (type === 'password') {
                eyeOpenIcon.classList.remove('hidden');
                eyeClosedIcon.classList.add('hidden');
            } else {
                eyeOpenIcon.classList.add('hidden');
                eyeClosedIcon.classList.remove('hidden');
            }
        });
        });
    </script> 
</body>
</html>