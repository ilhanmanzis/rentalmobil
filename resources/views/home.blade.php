<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <x-slot:profile>{{ $profile }}</x-slot:profile> --}}
    {{-- <x-slot:banner>
        <x-banner></x-banner>
    </x-slot:banner> --}}

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-36">
        <div class="hero bg-white min-h-screen">
            <div class="hero-content flex-col lg:flex-row-reverse">
                <img src="/images/home/feature_01.png" class="lg:max-w-sm rounded-lg lg:ml-6 " />
                <div>
                    <h1 class="text-3xl font-bold">{{ $profile->sekilas_tittle }}</h1>
                    <p class="py-6 text-justify">
                        <small class="text-base font-bold">{{ $profile->nama }}</small>
                        {{ $profile->sekilas }}
                    </p>
                    <a href="/kontak" class="btn bg-sky-500 text-white hover:bg-sky-700">Kontak Kami</a>
                </div>
            </div>
        </div>
    </div>

    {{-- paket wisata --}}
    <div class="bg-base-200 min-h-screen lg:py-16 lg:px-28 py-10 px-14">
        <div class="hero-content text-center lg:mb-5 mb-4">
            <h1 class="text-2xl lg:text-4xl font-bold">Paket Wisata</h1>
        </div>
        <div class="flex justify-between flex-wrap">
            @foreach ($wisatas as $wisata)
                <div class="card bg-base-100 w-80 shadow-xl my-5">
                    <figure class="w-full">
                        <img class="w-full" src="/images/wisata/{{ $wisata['foto'] }}" />
                    </figure>
                    <div class="card-body">
                        <h4 class="card-title">{{ $wisata['nama'] }}</h4>
                        <p><small class="text-base text-sky-500 font-semibold">Rp.
                                {{ number_format($wisata['harga'], 0, ',', '.') }}</small>/hari
                        </p>
                        <p>{{ $wisata->mobil->nama }}</p>
                        <small>Jam: {{ $wisata->mobil->jam_mulai }}-{{ $wisata->mobil->jam_selesai }}</small>
                        <small>Pintu: {{ $wisata->mobil->pintu }} | penumpang: {{ $wisata->mobil->penumpang }}</small>
                        <p class="text-sm">Wilayah {{ $wisata['wilayah'] }}</p>
                        <hr>
                        <p class="text-sm">Include: {{ $wisata['include'] }}</p>
                        <div class="card-actions justify-end mt-2">
                            <button href="#"class="btn bg-sky-500 hover:bg-sky-700 text-white">Sewa
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="hero-content text-center mt-3">
            <a href="/wisata" class="btn bg-sky-500 text-white hover:bg-sky-700">Lihat Selengkapnya</a>
        </div>
    </div>
    {{-- Daftar Mobil --}}
    <div class="bg-base-100 min-h-screen lg:py-16 lg:px-28 py-10 px-14">
        <div class="hero-content text-center lg:mb-5 mb-4">
            <h1 class="text-2xl lg:text-4xl font-bold">Daftar Mobil</h1>
        </div>
        <div class="hero-content text-center">
            <button id="lepas" class="btn lg:btn-md btn-sm bg-sky-400 text-white hover:bg-sky-700">Sewa mobil plus
                driver</button>
            <button id="driver" class="btn lg:btn-md btn-sm bg-sky-600 text-white hover:bg-sky-700">Sewa mobil lepas
                kunci</button>
        </div>
        <div id="lepasMobil" class="flex justify-between flex-wrap">
            @foreach ($mobils as $mobil)
                <div class="card bg-base-100 w-80 shadow-xl my-5">
                    <figure class="w-full">
                        <img class="w-full" src="/images/mobil/{{ $mobil['foto'] }}" />
                    </figure>
                    <div class="card-body">
                        <h4 class="card-title">{{ $mobil['nama'] }}</h4>
                        <p><small class="text-base text-sky-500 font-semibold">Rp.
                                {{ number_format($mobil['harga_driver'], 0, ',', '.') }}</small>/hari</p>
                        <small>Jam: {{ $mobil['jam_mulai'] }}-{{ $mobil['jam_selesai'] }}</small>
                        <small>Pintu: {{ $mobil['pintu'] }} | penumpang: {{ $mobil['penumpang'] }}</small>
                        <p class="text-sm">Wilayah {{ $mobil['wilayah'] }}</p>
                        <hr>
                        <p class="text-sm">Include: Driver, {{ $mobil['include'] }} </p>
                        <div class="card-actions justify-end mt-2">
                            <button href="#"class="btn bg-sky-500 hover:bg-sky-700 text-white">Sewa
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="driverMobil" class="flex justify-between flex-wrap">
            @foreach ($mobils as $mobil)
                <div class="card bg-base-100 w-80 shadow-xl my-5">
                    <figure style="width: 100%">
                        <img width="100%" src="/images/mobil/{{ $mobil['foto'] }}" />
                    </figure>
                    <div class="card-body">
                        <h4 class="card-title">{{ $mobil['nama'] }} </h4>
                        <p><small class="text-base text-sky-500 font-semibold">Rp.
                                {{ number_format($mobil['harga_lepas'], 0, ',', '.') }}</small>/hari</p>
                        <small>Jam: {{ $mobil['jam_mulai'] }}-{{ $mobil['jam_selesai'] }}</small>
                        <small>Pintu: {{ $mobil['pintu'] }} | penumpang: {{ $mobil['penumpang'] }}</small>
                        <p class="text-sm">Wilayah {{ $mobil['wilayah'] }}</p>
                        <hr>
                        <p class="text-sm">Include: Lepas Kunci, {{ $mobil['include'] }} </p>
                        <div class="card-actions justify-end mt-2">
                            <button href="#"class="btn bg-sky-500 hover:bg-sky-700 text-white">Sewa
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Ambil elemen tombol dan div
                const lepasButton = document.getElementById('lepas');
                const driverButton = document.getElementById('driver');
                const lepasMobil = document.getElementById('lepasMobil');
                const driverMobil = document.getElementById('driverMobil');

                // Fungsi untuk menampilkan lepasMobil dan menyembunyikan driverMobil
                const showLepasMobil = () => {
                    lepasMobil.style.display = 'flex'; // Tampilkan elemen lepasMobil
                    driverMobil.style.display = 'none'; // Sembunyikan driverMobil
                    // Tambahkan class aktif pada tombol lepas dan ubah class driver
                    driverButton.classList.add('bg-sky-600');
                    driverButton.classList.remove('bg-sky-400');
                    driverButton.classList.remove('border-gray-800');
                    lepasButton.classList.add('bg-sky-400');
                    lepasButton.classList.add('border-gray-800');
                    lepasButton.classList.remove('bg-sky-600');
                };

                // Fungsi untuk menampilkan driverMobil dan menyembunyikan lepasMobil
                const showDriverMobil = () => {
                    driverMobil.style.display = 'flex'; // Tampilkan elemen driverMobil
                    lepasMobil.style.display = 'none'; // Sembunyikan lepasMobil
                    // Tambahkan class aktif pada tombol driver dan ubah class lepas
                    lepasButton.classList.add('bg-sky-600');
                    lepasButton.classList.remove('bg-sky-400');
                    lepasButton.classList.remove('border-gray-800');
                    driverButton.classList.add('bg-sky-400');
                    driverButton.classList.add('border-gray-800');
                    driverButton.classList.remove('bg-sky-600');
                };

                // Tambahkan event listener untuk tombol
                lepasButton.addEventListener('click', showLepasMobil);
                driverButton.addEventListener('click', showDriverMobil);

                // Atur kondisi awal: tampilkan lepasMobil
                showLepasMobil();
            });
        </script>

        <div class="hero-content text-center mt-3">
            <a href="/kendaraan#mobil" class="btn bg-sky-600 text-white hover:bg-sky-700">Lihat
                Selengkapnya</a>
        </div>
    </div>
    {{-- Daftar Motor --}}
    <div class="bg-base-200 min-h-screen lg:py-16 lg:px-28 py-10 px-14">
        <div class="hero-content text-center lg:mb-5 mb-4">
            <h1 class="text-2xl lg:text-4xl font-bold">Daftar Motor</h1>
        </div>
        <div class="flex justify-between flex-wrap">
            @foreach ($motors as $motor)
                <div class="card bg-base-100 w-80 shadow-xl my-5">
                    <figure class="w-full">
                        <img class="w-full" src="/images/motor/{{ $motor['foto'] }}" />
                    </figure>
                    <div class="card-body">
                        <h4 class="card-title">{{ $motor['nama'] }}</h4>
                        <p><small class="text-base text-sky-500 font-semibold">Rp.
                                {{ number_format($motor['harga'], 0, ',', '.') }}</small>/hari</p>
                        <small>helm: {{ $motor['helm'] }}</small>
                        <small>Jam: {{ $motor['jam_mulai'] }}-{{ $motor['jam_selesai'] }}</small>
                        <p class="text-sm">Wilayah {{ $motor['wilayah'] }}</p>
                        <hr>
                        <p class="text-sm">Include: {{ $motor['include'] }}</p>
                        <div class="card-actions justify-end mt-2">
                            <button href="#"class="btn bg-sky-500 hover:bg-sky-700 text-white">Sewa
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="hero-content text-center mt-3">
            <a href="/kendaraan#motor" class="btn bg-sky-600 text-white hover:bg-sky-700">Lihat Selengkapnya</a>
        </div>
    </div>
    {{-- info kontak --}}
    <div class="card lg:card-side bg-base-100 shadow-xl lg:px-28 lg:py-10 px-10 py-5">
        <iframe class="lg:w-96 lg:h-96 w-60 h-60 mx-auto border-gray-900 border-collapse border-spacing-1 pr-10"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.722755701035!2d110.3879755!3d-7.8191425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a579e35d44d27%3A0x8e5770018882b!2sPralim%20Trans!5e0!3m2!1sid!2sid!4v1737466843804!5m2!1sid!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="">
            <h2 class="card-title lg:mt-0 mt-3">Alamat</h2>
            <p>{{ $profile->alamat }}</p>
            <div class="py-5 flex justify-start">
                <a href="{{ $sosmed->url_wa }}"><!-- Whatsapp -->
                    <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#128c7e] flex justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                            <path
                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                        <small class="text-lg px-2">{{ $sosmed->wa }}</small>
                    </span>
                </a>
            </div>
            <div class="flex justify-start">
                <a href="{{ $sosmed->url_fb }}">
                    <!-- Facebook -->
                    <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#1877f2] flex justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                            <path
                                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg>
                        <small class="text-lg px-2">{{ $sosmed->fb }}</small>
                    </span>
                </a>
            </div>
            <div class="py-5 flex justify-start">
                <a href="{{ $sosmed->url_ig }}"><!-- Instagram -->
                    <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#c13584] flex justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                        <small class="text-lg px-2">{{ $sosmed->ig }}</small>
                    </span>
                </a>
            </div>
            <div class="flex justify-start">
                <a href="{{ $sosmed->url_tt }}"><!-- TikTok -->
                    <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#6a76ac] flex justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                            <path
                                d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                        </svg>

                        <small class="text-lg px-2">{{ $sosmed->tt }}</small>
                    </span>
                </a>
            </div>
            <div class="py-5 flex justify-start">
                <a href="{{ $sosmed->url_x }}"><!-- X -->
                    <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-black flex justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                            <path
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                        </svg>
                        <small class="text-lg px-2">{{ $sosmed->x }}</small>
                    </span>
                </a>
            </div>
        </div>
    </div>


</x-layout>
