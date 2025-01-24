<div id="slider" class="hero min-h-screen overflow-hidden relative">
    <div id="slides" class="absolute inset-0 flex transition-transform duration-1000">
        @foreach ($banners as $banner)
            <div class="hero-slide flex-shrink-0 w-full h-full bg-cover bg-center"
                style="background-image: url(/images/banner/{{ $banner['url'] }});"></div>
        @endforeach
    </div>
    <div class="hero-overlay bg-opacity-60" style="z-index: 1;"></div>
    <div class="hero-content text-white" style="z-index: 2;">
        <div class="lg:mx-10 mx-5">
            <h2 class="mb-5 lg:text-3xl text-xl font-bold">{{ $profile->banner1 }}</h2>
            <h1 class="mb-5 lg:text-5xl text-2xl font-bold">{{ $profile->banner2 }}</h1>
            <p class="mb-5 lg:text-lg text-base text-justify">{{ $profile->banner3 }}</p>
            <a href="/kendaraan" class="btn bg-sky-600 border-none text-white hover:bg-sky-400 mr-5">Pilih Kendaraan
                Sekarang
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5"
                    stroke="currentColor" class="size-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </a>
            <a href="/wisata" class="btn bg-sky-600 border-none text-white hover:bg-sky-400 mt-4">Paket Wisata
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5"
                    stroke="currentColor" class="size-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<script>
    const slides = document.getElementById('slides');
    const slideCount = document.querySelectorAll('.hero-slide').length;
    let currentIndex = 0;

    setInterval(() => {
        currentIndex = (currentIndex + 1) % slideCount; // Increment and loop back to start
        slides.style.transform = `translateX(-${currentIndex * 100}%)`; // Shift slides
    }, 5000); // Change every 5 seconds
</script>
