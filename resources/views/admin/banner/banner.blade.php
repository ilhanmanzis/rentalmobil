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

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table One Start -->
            <a href="#" class="btn btn-info w-40 text-white">Tambah data</a>
            <div
                class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
                    Daftar {{ $title }}
                </h4>

                <table class="w-full">
                    <tr class="text-center bg-gray-2 dark:bg-meta-4">
                        <td class="p-2.5 xl:p-5">
                            <h5 class="text-sm font-medium xsm:text-base">No</h5>
                        </td>
                        <td class="p-2.5 xl:p-5">
                            <h5 class="text-sm font-medium xsm:text-base">Foto</h5>
                        </td>
                        <td class="p-2.5 xl:p-5">
                            <h5 class="text-sm font-medium xsm:text-base">Aksi</h5>
                        </td>
                    </tr>

                    <?php $no = 1; ?>
                    @foreach ($banners as $banner)
                        <tr class="border-b border-stroke dark:border-strokedark">
                            <td class="text-center font-medium text-black dark:text-white py-3">{{ $no++ }}</td>
                            <td class="text-center font-medium text-black dark:text-white py-3"><img
                                    src="{{ url('/') }}/images/banner/{{ $banner['url'] }}" class="w-44 mx-auto"
                                    alt=""></td>
                            <td class="text-center font-medium text-black dark:text-white py-3">
                                <a href="#"
                                    class="inline-flex items-center justify-center rounded-md bg-meta-3 px-1 py-1 text-center font-medium text-white hover:bg-opacity-90 lg:px-1 xl:py-1">
                                    <svg class="w-5 fill-white" viewBox="0 0 448 512"
                                        xmlns="http://www.w3.org/2000/svg">

                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                        </path>


                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex items-center justify-center rounded-md bg-red-700 px-1 py-1 text-center font-medium text-white hover:bg-opacity-90 lg:px-1 xl:py-1">
                                    <svg class="w-5 fill-white" viewBox="0 0 448 512"
                                        xmlns="http://www.w3.org/2000/svg">

                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z">
                                        </path>

                                    </svg>
                                </a>
                            </td>

                        </tr>
                    @endforeach


                </table>
            </div>

            <!-- ====== Table One End -->


        </div>
        <!-- ====== Table Section End -->
    </div>
</x-admin.layout>
