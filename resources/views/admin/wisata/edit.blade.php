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
                        Data Wisata
                    </h3>
                </div>

                <div class="flex flex-col gap-5.5 p-6.5">
                    <form action="{{ route('wisata.edit', ['id' => $wisata['id_wisata']]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <label class="mb-3  text-sm font-medium text-black dark:text-white flex justify-start ">
                                Nama wisata
                            </label>
                            <input type="text" placeholder="...." name="nama" value="{{ $wisata['nama'] }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('nama')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4.5 mt-3">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Mobil
                            </label>
                            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">
                                <select name="id_mobil"
                                    class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                    :class="isOptionSelected && 'text-black dark:text-white'"
                                    @change="isOptionSelected = true">
                                    <option value="" class="text-body">
                                        Pilih Mobil
                                    </option>
                                    @foreach ($mobils as $mobil)
                                        <option value="{{ $mobil['id_mobil'] }}"
                                            {{ $wisata['id_mobil'] == $mobil['id_mobil'] ? 'selected' : '' }}
                                            class="text-body">{{ $mobil['nama'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="absolute right-4 top-1/2 z-30 -translate-y-1/2">
                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.8">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                fill=""></path>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label class="mb-3 text-sm font-medium text-black dark:text-white mt-3 flex justify-start">
                                Harga
                            </label>
                            <input type="number" placeholder="..." name="harga" value="{{ $wisata['harga'] }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('harga')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-3 flex justify-start text-sm font-medium text-black dark:text-white mt-3">
                                Wilayah
                            </label>
                            <input type="text" placeholder="...." name="wilayah" value="{{ $wisata['wilayah'] }}"
                                value="{{ old('wilayah') }}"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            @error('wilayah')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-3 mt-3 block text-sm font-medium text-black dark:text-white">
                                Include
                            </label>
                            <textarea rows="6" placeholder="..." name="include"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $wisata['include'] }}</textarea>
                            @error('include')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-3 mt-3 block text-sm font-medium text-black dark:text-white">
                                Daftar Wisata
                            </label>
                            <textarea rows="6" placeholder="..." name="daftar_wisata"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $wisata['daftar_wisata'] }}</textarea>
                            @error('daftar_wisata')
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
                            <img id="previewImage" src="{{ url('/') }}/images/wisata/{{ $wisata['foto'] }}"
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
