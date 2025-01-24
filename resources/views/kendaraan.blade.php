<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:infoBanner>Sewa Mobil & Motor Yogyakarta</x-slot:infoBanner>
    <div class="bg-base-300 min-h-screen lg:py-16 lg:px-28 py-12 px-14" id="mobil">
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
    </div>


    {{-- Daftar Motor --}}
    <div class="bg-base-100 min-h-screen lg:py-16 lg:px-28 py-10 px-14" id="motor">
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
</x-layout>
