<div id="slider" class="hero lg:h-1/2 h-2/3 overflow-hidden relative">
    <div id="slides" class="absolute inset-0 flex transition-transform duration-1000">
        <div class="hero-slide flex-shrink-0 w-full h-full bg-cover bg-center"
            style="background-image: url(/images/banner/1.webp);"></div>
        <div class="hero-slide flex-shrink-0 w-full h-full bg-cover bg-center"
            style="background-image: url(/images/banner/2.jpeg);"></div>
        <div class="hero-slide flex-shrink-0 w-full h-full bg-cover bg-center"
            style="background-image: url(/images/banner/3.jpg);"></div>
    </div>
    <div class="hero-overlay bg-opacity-60" style="z-index: 1;"></div>
    <div class="hero-content text-white" style="z-index: 2;">
        <div class="mx-5 mt-32 mb-14">
            <h1 class="mb-5 lg:text-5xl text-2xl font-bold">{{ $slot }}
            </h1>
            <p class="mb-5 lg:text-lg text-base">
            </p>

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
