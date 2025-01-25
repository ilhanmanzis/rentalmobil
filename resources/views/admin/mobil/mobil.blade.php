<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                {{ $title }}
            </h2>

            <nav>
                <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-medium" href="{{ url('/') }}/admin">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">{{ $title }}</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->
        @if (session('success'))
            <div
                class="flex w-full mb-3 border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-2 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                            fill="white" stroke="white"></path>
                    </svg>
                </div>
                <div class="w-full">
                    <h5 class="text-lg font-bold text-black dark:text-[#34D399]">
                        {{ session('success') }}
                    </h5>
                </div>
            </div>
        @endif

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table One Start -->
            <a href="{{ url('/admin/mobil/create') }}" class="btn btn-info w-40 text-white">Tambah data</a>
            <div
                class="rounded-sm border border-stroke bg-white pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:pb-1">
                <h4 class="ml-4 mb-6 text-xl font-bold text-black dark:text-white">
                    Daftar {{ $title }}
                </h4>

                <div id="lepasMobil" class="flex justify-center lg:justify-start flex-wrap">
                    @foreach ($mobils as $mobil)
                        <div class="card w-72 shadow-xl my-5 lg:mx-6 mx-0">
                            <figure class="w-full">
                                <img class="w-full" src="{{ url('/') }}/images/mobil/{{ $mobil['foto'] }}" />
                            </figure>
                            <div class="card-body">
                                <h4 class="card-title dark:text-white">{{ $mobil['nama'] }}</h4>
                                <p class="dark:text-white"><small class="text-base text-sky-500 font-semibold">Rp.
                                        {{ number_format($mobil['harga_lepas'], 0, ',', '.') }}</small>/hari (lepas
                                    kunci)</p>
                                <p class="dark:text-white"><small class="text-base text-sky-500 font-semibold">Rp.
                                        {{ number_format($mobil['harga_driver'], 0, ',', '.') }}</small>/hari (plus
                                    Driver)
                                </p>
                                <small class="dark:text-white">Jam:
                                    {{ $mobil['jam_mulai'] }}-{{ $mobil['jam_selesai'] }}</small>
                                <small class="dark:text-white">Pintu: {{ $mobil['pintu'] }} | penumpang:
                                    {{ $mobil['penumpang'] }}</small>
                                <p class="text-sm dark:text-white">Wilayah {{ $mobil['wilayah'] }}</p>
                                <hr>
                                <p class="text-sm dark:text-white">Include: {{ $mobil['include'] }} </p>
                                <div class="card-actions justify-end mt-2">
                                    <a href="{{ url('/') }}/admin/mobil/edit/{{ $mobil['id_mobil'] }}"
                                        class="inline-flex items-center justify-center rounded-md bg-meta-3 px-2 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-2 xl:py-2">
                                        <svg class="w-5 fill-white" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">

                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                            </path>


                                        </svg>
                                    </a>
                                    <form action="{{ route('mobil.delete', ['id' => $mobil['id_mobil']]) }}"
                                        onsubmit="return confirm('Apakah anda yakin ingin menghapus data?')"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="bg-red-700 rounded-md">
                                            <button type="submit"
                                                class="inline-flex items-center justify-center rounded-md bg-red-700 px-2 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-2 xl:py-2">
                                                <svg class="w-5 fill-white" viewBox="0 0 448 512"
                                                    xmlns="http://www.w3.org/2000/svg">

                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path
                                                        d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z">
                                                    </path>

                                                </svg>
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

            <!-- ====== Table One End -->


        </div>
        <!-- ====== Table Section End -->
    </div>
</x-admin.layout>
