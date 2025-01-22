<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>

<body class="h-full">

    {{-- navbar --}}
    <x-navbar>
        <x-slot:title>{{ $title }}</x-slot:title>
    </x-navbar>
    {{-- banner --}}
    <?php if($title == 'Home'){ ?>
    <x-banner></x-banner>
    <?php }else{?>
    <x-banner1>{{ $infoBanner }}</x-banner1>
    <?php }
    ?>

    {{-- <x-banner></x-banner> --}}

    <main class="bg-white">
        {{ $slot }}
    </main>

    <x-footer></x-footer>

</body>

<script>
    document.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar-background');
        const main = document.querySelector('main');
        const mainPosition = main.offsetTop; // Posisi awal elemen <main>
        const scrollPosition = window.scrollY; // Posisi scroll saat ini

        if (scrollPosition >= mainPosition) {
            navbar.classList.add('bg-gray-800');
        } else {
            navbar.classList.remove('bg-gray-800');
        }
    });
</script>

</html>
