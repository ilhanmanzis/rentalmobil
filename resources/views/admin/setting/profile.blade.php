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


        <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
            <div class="flex flex-col gap-9">
                <!-- Input Fields -->
                <form action="{{ route('setting.edit.profile', ['id' => $profile['id']]) }}" method="post">
                    @csrf
                    @method('put')
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
                                    Nama
                                </label>
                                <input type="text" placeholder="..." name="name" value="{{ $profile['name'] }}"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                @error('name')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Email
                                </label>
                                <input type="email" placeholder="..." name="email" value="{{ $profile['email'] }}"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                @error('email')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div
                                class="rounded border bg-sky-400 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <button class="btn rounded btn-info text-white w-full border-2"
                                    type="submit">Simpan</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>


            <div class="flex flex-col gap-9">
                <!-- Textarea Fields -->
                <form action="{{ route('setting.edit.password', ['id' => $profile['id']]) }}" method="post">
                    @csrf
                    @method('put')
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <h3 class="font-medium text-black dark:text-white">
                                Update Password
                            </h3>
                        </div>
                        <div class="flex flex-col gap-5.5 p-6.5">
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Password lama
                                </label>
                                <input type="password" name="oldPassword"
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                @error('oldPassword')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror

                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Password baru
                                </label>
                                <input type="password" name="newPassword" value=""
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                @error('newPassword')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    konfirmasi password baru
                                </label>
                                <input type="password" name="confirmNewPassword" value=""
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                @error('confirmNewPassword')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror

                            </div>
                            <div
                                class="rounded border bg-sky-400 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <button class="btn rounded btn-info text-white w-full border-2"
                                    type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>


        <!-- ====== Form Elements Section End -->
    </div>
</x-admin.layout>
