<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kandidat_1</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/tels.png')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <style>
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
            const logoutButton = document.getElementById('logoutButton');
            const formPopup = document.getElementById('formPopup');
            const logoutPopup = document.getElementById('logoutPopup');
            const popupOverlay = document.getElementById('popupOverlay');

            const formConfirmButton = document.getElementById('formConfirmButton');
            const formCancelButton = document.getElementById('formCancelButton');
            const logoutConfirmButton = document.getElementById('logoutConfirmButton');
            const logoutCancelButton = document.getElementById('logoutCancelButton');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah form dikirim langsung
                popupOverlay.style.display = 'block';
                formPopup.style.display = 'block';
            });

            logoutButton.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah logout langsung
                popupOverlay.style.display = 'block';
                logoutPopup.style.display = 'block';
            });

            formConfirmButton.addEventListener('click', function() {
                popupOverlay.style.display = 'none';
                formPopup.style.display = 'none';
                form.submit(); // Kirim form jika pengguna mengonfirmasi
            });

            formCancelButton.addEventListener('click', function() {
                popupOverlay.style.display = 'none';
                formPopup.style.display = 'none';
            });

            logoutConfirmButton.addEventListener('click', function() {
                popupOverlay.style.display = 'none';
                logoutPopup.style.display = 'none';
                // Arahkan ke route logout atau submit form logout
                document.getElementById('logoutForm').submit();
            });

            logoutCancelButton.addEventListener('click', function() {
                popupOverlay.style.display = 'none';
                logoutPopup.style.display = 'none';
            });
        });
    </script>
</head>
<body class="bg-[#146BD2]">
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
                        <form action="/logout" method="POST" id="logoutForm">
                            @csrf
                            <button id="logoutButton"><i class='bx bx-log-out text-white text-3xl hover:text-black duration-300 transition ease-out' id="log"></i></button>
                        </form>
                    </div>
                </div>
            </div>
    </header>
    <section class="md:pb-16 lg:pb-0">
        <div class="container md:mt-10 lg:mt-10">
            <div class="flex flex-wrap px-6">
                <div class="w-full self-end lg:w-1/2">
                    <div class="relative">
                        <img src="{{asset('assets/img/orang1.png')}}" alt="" class="z-10 relative max-w-full w-[432px] mx-auto" id="orang"/>
                    </div>
                </div>
                <div class="w-full self-center pr-10 lg:w-1/2 md:mt-20 lg:mt-0">
                    <h1 class="text-white font-bold text-3xl md:text-center lg:text-justify" id="judul">Haura Azalia Abdullah</h1>
                    <div class="h-[200px] overflow-auto pr-2">
                        <p class="text-white mt-5 font text-xl font-bold text-justify" id="judul2">VISI :</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">Menjadikan OSIS SMK Telekomunikasi Telesandi Bekasi sebagai wadah dan fasilitator bagi Siswa/i yang menampung aspirasi ide dan kreativitas Siswa. Serta menjadikan Warga SMK Telesandi memiliki kualitas dalam berbagai bidang.</p>
                        <p class="text-white mt-5 font text-xl font-bold text-justify" id="judul2">MISI :</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">1. Mendorong keaktifan para Siswa/i SMK Telesandi dalam berbagai kegiatan Sekolah maupun OSIS.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">2. Mendukung kegiatan pengembangan bakat dan potensi Siswa/i SMK Telesandi dalam bidang akademik maupun non-akademik.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">3. Menegakkan kedisplinan Siswa dengan mengurangi jumlah pelanggaran.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">4. Menjalin keharmonisan hubungan antar Siswa dengan Siswa maupun Siswa dengan Sekolah.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">5. Menerapkan suasana nyaman pada Warga Sekolah dengan program OSIS yang terlaksana.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">6. Merealisasikan program kerja yang belum terlaksanakan di periode sebelumnya.</p>
                        <p class="text-white mt-5 font text-xl font-bold text-justify" id="judul2">PROGRAM KERJA :</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">1. Memperingati hari besar Nasional.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">2. Memberi lebih banyak kesempatan bagi Siswa/i untuk menunjukan bakat.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">3. Mendukung Siswa untuk mengikuti lomba-lomba intra Sekolah maupun antar Sekolah.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">4. Melakukan penggalangan dana ketika ada Saudara yang terkena musibah.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">5. Mengevaluasi kegiatan pengurus OSIS.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">6. Mengambil keputusan berdasarkan Musyawarah Mufakat.</p>
                        <p class="text-slate-300 mt-2 font font-normal text-justify" id="judul2">7. Bekerja sama dengan Guru BK untuk melakukan Razia demi menetapkan ketertiban Sekolah.</p>
                    </div>
                    
                    <div class="flex w-full">
                        <div class="md:mx-auto lg:mx-0 flex flex-wrap">
                            <a href="/Pemilihan"><button id="tombol" class="bg-[#f4c304] py-2 px-16 rounded-lg mt-8 font-semibold text-lg mr-5 hover:bg-yellow-600 transition ease-out duration-300 hover:text-white">Kembali</button></a>
                            <form action="/kandidats1" method="POST" id="myForm">
                                @csrf
                                <input type="submit" id="tombol2" class="bg-[#f4c304] py-2 animate-bounce px-16 rounded-lg mt-8 font-semibold text-lg hover:bg-yellow-600 transition ease-out duration-300 hover:text-white" value="Pilih Saya">
                            </form>
                        </div>
                    </div>
                      {{-- Popup Overlay --}}
                    <div id="popupOverlay" class="popup-overlay"></div>

                     {{-- Popup --}}
                    <div id="formPopup"  class="popup px-10 py-8 rounded-md">
                        <p class="font-bold text-center text-lg mb-4">Apakah Anda yakin dengan pilihan Anda?</p>
                        <div class="text-center">
                            <button id="formConfirmButton" class="bg-[#146BD2] w-[120px] mr-2 py-1 text-white rounded-md hover:bg-blue-900">Ya</button>
                            <button id="formCancelButton" class="bg-[#146BD2] w-[120px] py-1 text-white rounded-md hover:bg-blue-900">Tidak</button>
                        </div>
                    </div>
                    
                     {{-- Popup --}}
                    <div id="logoutPopup" class="popup px-10 py-8 rounded-md">
                        <p class="font-bold text-center text-lg mb-4">Apakah Anda yakin ingin keluar dari halaman ini?</p>
                        <div class="text-center">
                        <button id="logoutConfirmButton" class="bg-[#146BD2] w-[120px] mr-2 py-1 text-white rounded-md hover:bg-blue-900">Ya</button>
                            <button id="logoutCancelButton" class="bg-[#146BD2] w-[120px] py-1 text-white rounded-md hover:bg-blue-900">Tidak</button>
                        </div>
                    </div> 
                    {{-- Tampilkan pesan sukses atau error --}}
                    @if (session('error'))
                    <div class="bg-red-500 rounded w-fit mt-10 md:mx-auto lg:mx-0" id="card3">
                        <div class="flex flex-wrap self-center">
                            <div class="pl-4 pr-6 py-4">
                                <div class="flex">
                                    <i class='bx bx-minus-circle text-3xl text-white my-auto'></i>
                                    <div class="ml-4 text-white leading-[1.2]">
                                        <p>Anda sudah memilih Kandidat!</p>
                                        <p>Pilihan Anda : <span>{{ session('tabelKandidat') }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</body>
</html>