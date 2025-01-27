<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:infoBanner>Tentang Kami</x-slot:infoBanner>
    <div class="card lg:card-side bg-base-100 shadow-xl lg:px-28 lg:py-10 px-10 py-5 lg:items-start items-center">
        <img class="size-64 pr-3" src="{{ url('/') }}/images/logo/{{ $profile->logo }}" alt="Your Company">
        <div class="lg:ml-16 lg:my-8 my-10">
            <h2 class="card-title text-4xl mb-2">{{ $profile->nama }}</h2>
            <p class="text-justify">{{ $profile->tentang }}</p>
            <p class="mt-2 font-semibold text-xl">Mengapa Memilih Pralim Trans?</p>
            <p class="text-justify">{{ $profile->tentang_mengapa }}</p>
        </div>
    </div>
</x-layout>
