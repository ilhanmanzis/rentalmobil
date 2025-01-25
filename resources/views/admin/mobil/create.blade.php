<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Tambah Data Mobil
            </h2>

            <nav>
                <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-medium" href="{{ url('/admin') }}">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">{{ $title }}</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Form Elements Section Start -->

        <div class="flex flex-col gap-9">
            <!-- Input Fields -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Data Mobil
                    </h3>
                </div>

                <div class="flex flex-col gap-5.5 p-6.5">
                    <form action="{{ route('mobil.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="mb-3  text-sm font-medium text-black dark:text-white flex justify-start ">
                                Nama mobil
                            </label>
                            <input type="text" placeholder="...." name="nama" value="{{ old('nama') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('nama')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 text-sm font-medium text-black dark:text-white mt-3 flex justify-start">
                                Harga tanpa driver
                            </label>
                            <input type="number" placeholder="..." name="harga_lepas" value="{{ old('harga_lepas') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('harga_lepas')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 flex justify-start text-sm font-medium text-black dark:text-white mt-3">
                                Harga dengan driver
                            </label>
                            <input type="number" placeholder="..." name="harga_driver"
                                value="{{ old('harga_driver') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('harga_driver')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 flex justify-start text-sm font-medium text-black dark:text-white mt-3">
                                Jam mulai
                            </label>
                            <input type="time" placeholder="...." name="jam_mulai" value="{{ old('jam_mulai') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('jam_mulai')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 flex justify-start text-sm font-medium text-black dark:text-white mt-3">
                                Jam selesai
                            </label>
                            <input type="time" placeholder="...." name="jam_selesai"
                                value="{{ old('jam_selesai') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('jam_selesai')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 flex justify-start text-sm font-medium text-black dark:text-white mt-3">
                                Jumlah pintu
                            </label>
                            <input type="text" placeholder="...." name="pintu" value="{{ old('pintu') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('pintu')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 flex justify-start text-sm font-medium text-black dark:text-white mt-3">
                                Jumlah penumpang
                            </label>
                            <input type="text" placeholder="...." name="penumpang" value="{{ old('penumpang') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('penumpang')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 flex justify-start text-sm font-medium text-black dark:text-white mt-3">
                                Wilayah
                            </label>
                            <input type="text" placeholder="...." name="wilayah" value="Yogyakarta"
                                value="{{ old('wilayah') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('wilayah')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 flex justify-start text-sm font-medium text-black dark:text-white mt-3">
                                Include
                            </label>
                            <input type="text" placeholder="...." name="include" value="{{ old('include') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('include')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Foto
                            </label>
                            <input type="file" name="foto" id="logoInput"
                                class="w-full rounded-md border border-stroke p-3 outline-none transition file:mr-4 file:rounded file:border-[0.5px] file:border-stroke file:bg-[#EEEEEE] file:px-2.5 file:py-1 file:text-sm file:font-normal focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-strokedark dark:file:bg-white/30 dark:file:text-white"
                                onchange="previewFile()" />
                            @error('foto')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Tampilan Gambar -->
                        <div class="mb-3">
                            <img id="previewImage" src=""
                                class="w-32 h-32 object-cover rounded-md border border-stroke dark:border-strokedark"
                                hidden />
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
                                    //previewFile.classList.remove('hidden');

                                    // Tampilkan file ke elemen gambar
                                    previewImage.src = fileURL;
                                    previewImage.hidden = false;
                                } else {
                                    previewImage.hidden = true;
                                }
                            }
                        </script>
                        <div class="w-full bg-sky-400 mt-8 rounded-md">
                            <button class="btn btn-info text-white w-full" type="submit">Simpan</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- ====== Form Elements Section End -->
    </div>
</x-admin.layout>
