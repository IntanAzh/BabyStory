@extends('layouts.admin')

@section('content')
    <div class="flex min-h-screen bg-gray-50">

        <!-- Konten utama -->
        <div class="flex-1 p-6">

            <div class="bg-[#B7E4FF] rounded-2xl shadow-md p-6 mt-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Tambah Kategori</h2>
                <p class="text-sm text-gray-600 mb-6">
                    <span class="text-blue-700 font-medium">Home</span> ›
                    <span class="text-blue-700 font-medium">Kategori</span> ›
                    <span class="text-gray-800">Tambah Kategori</span>
                </p>

                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data"
                    class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white rounded-2xl p-6 shadow-sm">
                    @csrf

                    <!-- Kiri -->
                    <div class="flex flex-col space-y-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Kategori</label>
                            <input type="text" name="name"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-pink-300 focus:outline-none"
                                placeholder="Ketik disini..." required>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Deskripsi Kategori</label>
                            <textarea name="description" rows="3"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-pink-300 focus:outline-none"
                                placeholder="Ketik disini..."></textarea>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Status</label>
                            <input type="text" name="status"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-pink-300 focus:outline-none"
                                placeholder="Aktif / Nonaktif" required>
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div
                        class="flex flex-col items-center justify-center border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                        <img src="{{ asset('images/ph_image-light.png') }}" alt="Upload Placeholder"
                            class="w-16 h-16 mb-3 object-contain opacity-80">
                        <p class="text-gray-500 mb-2">Drop your image here, JPEG and PNG are allowed</p>
                        <input type="file" name="image" accept=".jpg,.jpeg,.png"
                            class="mt-2 text-sm text-gray-600 cursor-pointer">
                    </div>


                    <!-- Tombol -->
                    <div class="md:col-span-2 flex justify-center space-x-4 mt-4">
                        <button type="submit"
                            class="bg-pink-400 text-white font-semibold px-6 py-2 rounded-md hover:bg-pink-500 transition">SIMPAN</button>
                        <a href="{{ route('admin.categories.index') }}"
                            class="border border-gray-400 text-gray-700 font-semibold px-6 py-2 rounded-md hover:bg-gray-100 transition">BATAL</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
