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
                        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
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

        <!-- ====== Form Elements Section Start -->
        <form action="{{ route('setting.edit', ['id' => $profile['id']]) }}" method="post">
            @csrf
            @method('put')

            <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
                <div class="flex flex-col gap-9">
                    <!-- Input Fields -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <h3 class="font-medium text-black dark:text-white">
                                Profile
                            </h3>
                        </div>
                        <div class="flex flex-col gap-5.5 p-6.5">
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Nama Perusahaan
                                </label>
                                <input type="text" placeholder="..." name="nama" value="{{ $profile['nama'] }}"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Slogan
                                </label>
                                <input type="text" placeholder="..." name="slogan" value="{{ $profile['slogan'] }}"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Alamat
                                </label>
                                <textarea rows="6" placeholder="..." name="alamat"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $profile['alamat'] }}</textarea>
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Logo </label>
                                <input type="file" name="logo" id="logoInput"
                                    class="w-full rounded-md border border-stroke p-3 outline-none transition file:mr-4 file:rounded file:border-[0.5px] file:border-stroke file:bg-[#EEEEEE] file:px-2.5 file:py-1 file:text-sm file:font-normal focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-strokedark dark:file:bg-white/30 dark:file:text-white"
                                    onchange="previewFile()" />
                            </div>
                            <!-- Tampilan Gambar -->
                            <div class="mb-3">
                                <img id="previewImage" src="/images/logo/<?php echo $profile['logo']; ?>" alt="Logo Preview"
                                    class="w-32 h-32 object-cover rounded-md border border-stroke dark:border-strokedark" />
                            </div>
                            <script>
                                function previewFile() {
                                    const fileInput = document.getElementById('logoInput');
                                    const previewImage = document.getElementById('previewImage');

                                    // Periksa apakah ada file yang diunggah
                                    const file = fileInput.files[0];
                                    if (file) {
                                        // Buat URL sementara untuk file yang diunggah
                                        const fileURL = URL.createObjectURL(file);

                                        // Tampilkan file ke elemen gambar
                                        previewImage.src = fileURL;
                                    }
                                }
                            </script>

                        </div>
                    </div>
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <h3 class="font-medium text-black dark:text-white">
                                Banner
                            </h3>
                        </div>
                        <div class="flex flex-col gap-5.5 p-6.5">
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Kata 1
                                </label>
                                <input type="text" placeholder="..." name="banner1" value="{{ $profile['banner1'] }}"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Kata 2
                                </label>
                                <input type="text" placeholder="..." name="banner2"
                                    value="{{ $profile['banner2'] }}"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Kata 3
                                </label>
                                <textarea rows="6" placeholder="..." name="banner3"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $profile['banner3'] }}</textarea>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="flex flex-col gap-9">
                    <!-- Textarea Fields -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <h3 class="font-medium text-black dark:text-white">
                                Deskripsi
                            </h3>
                        </div>
                        <div class="flex flex-col gap-5.5 p-6.5">
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Judul Sekilas Info
                                </label>
                                <textarea rows="6" placeholder="..." name="sekilas_tittle"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $profile['sekilas_tittle'] }}</textarea>
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Sekilas Info
                                </label>
                                <textarea rows="6" placeholder="..." name="sekilas"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $profile['sekilas'] }}</textarea>
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Tentang Kami
                                </label>
                                <textarea rows="6" placeholder="..." name="tentang"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $profile['tentang'] }}</textarea>
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Mengapa memilih kami?
                                </label>
                                <textarea rows="6" placeholder="..." name="tentang_mengapa"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $profile['tentang_mengapa'] }}</textarea>
                            </div>

                        </div>
                    </div>
                    <div class="rounded border bg-sky-400 shadow-default dark:border-strokedark dark:bg-boxdark">
                        <button class="btn rounded btn-info text-white w-full border-2" type="submit">Simpan</button>
                    </div>

                </div>
            </div>

        </form>
        <!-- ====== Form Elements Section End -->
    </div>
</x-admin.layout>
