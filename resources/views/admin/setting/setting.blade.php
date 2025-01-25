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
                        <a class="font-medium" href="index.html">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">{{ $title }}</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Form Elements Section Start -->
        <form action="" method="post">

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
                                    Attach file
                                </label>
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
                                <input type="text" placeholder="..." name="banner2" value="{{ $profile['banner2'] }}"
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
