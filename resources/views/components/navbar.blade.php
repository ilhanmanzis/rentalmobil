<nav id="navbar-background"
    class="{{ $title == 'Home' ? '' : 'bg-gray-800' }} lg:bg-opacity-50 fixed top-0 left-0 w-full z-10"
    x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0 flex items-center justify-between">
                    <img class="size-14 pr-3 w-20" src="/images/logo/logo.png" alt="Your Company">
                    <a href="/" class="text-white rounded-md px-3 py-2 text-sm lg:text-lg font-bold "
                        aria-current="page">PRALIM TRANS <p class="text-sm font-normal">Solusi Rental Mobil
                            Motor
                            Cepat & Aman </p></a>
                </div>

            </div>
            <div class="flex items-center">

                <div class="hidden md:block ml-auto">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/kendaraan" :active="request()->is('kendaraan')">Daftar Kendaraan</x-nav-link>
                        <x-nav-link href="/wisata" :active="request()->is('wisata')">Paket Wisata</x-nav-link>
                        <x-nav-link href="/tentang" :active="request()->is('tentang')">Tentang Kami</x-nav-link>
                        <x-nav-link href="/kontak" :active="request()->is('kontak')">Kontak</x-nav-link>

                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 focus:ring-offset-sky-200"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'hidden': !isOpen, 'block': isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-sky-500 hover:text-white" -->
            <x-nav-link href="/" :active="request()->is('/')" mobile="true">Home</x-nav-link>
            <x-nav-link href="/kendaraan" :active="request()->is('kendaraan')" mobile="true">Daftar Kendaraan</x-nav-link>
            <x-nav-link href="/wisata" :active="request()->is('wisata')" mobile="true">Paket Wisata</x-nav-link>
            <x-nav-link href="/tentang" :active="request()->is('tentang')" mobile="true">Tentang Kami</x-nav-link>
            <x-nav-link href="/kontak" :active="request()->is('kontak')" mobile="true">Kontak</x-nav-link>
        </div>

    </div>
</nav>
