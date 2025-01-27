<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:infoBanner>Paket Wisata Yogyakarta</x-slot:infoBanner>
    {{-- paket wisata --}}
    <div class="bg-base-100 min-h-screen lg:py-26 lg:px-28 py-14 px-14">
        <div class="hero-content text-center lg:mb-5 mb-4">
            <h1 class="text-2xl lg:text-4xl font-bold">Daftar Paket Wisata</h1>
        </div>
        <div class="flex justify-start flex-wrap">
            @foreach ($wisatas as $wisata)
                <div class="card bg-base-100 w-80 shadow-xl my-5 lg:mx-6 mx-0">
                    <figure class="w-full">
                        <img class="w-full" src="{{ url('/') }}/images/wisata/{{ $wisata['foto'] }}" />
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
                        <p class="text-sm dark:text-white font-semibold">Include: <span
                                class="text-sm dark:text-white font-normal"><?php $listItems = explode(',', $wisata['include']); ?>
                                <ul class="text-sm dark:text-white font-normal pl-5" style="list-style: circle;">
                                    @foreach ($listItems as $item)
                                        <li>{{ trim($item) }}</li>
                                    @endforeach
                                </ul>
                            </span>
                        </p>
                        <hr>
                        <p class="text-sm dark:text-white font-semibold">Daftar Wisata: <span
                                class="text-sm dark:text-white font-normal"><?php $listWisatas = explode(',', $wisata['daftar_wisata']); ?>
                                <ul class="text-sm dark:text-white font-normal pl-5" style="list-style: circle;">
                                    @foreach ($listWisatas as $item)
                                        <li>{{ trim($item) }}</li>
                                    @endforeach
                                </ul>
                            </span>
                        </p>
                        <div class="card-actions justify-end mt-2">
                            <a target="blank"
                                href="https://web.whatsapp.com/send?phone={{ $sosmed->wa }}&text=Hallo...%20{{ $profile->nama }}%20Yogyakarta%20saya%20mau%20sewa%20{{ $wisata['nama'] }}"
                                class="btn bg-sky-500 hover:bg-sky-700 text-white">Sewa
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
