@extends('layouts.admin')

@section('content')
    <div class="flex min-h-screen bg-gray-50">

        <!-- Konten utama -->
        <div class="flex-1 p-6">

            <!-- Container -->
            <div class="bg-[#B7E4FF] rounded-2xl shadow-md p-8 mt-6">
                <h2 class="text-2xl font-bold text-[#4B4B4B] mb-2">Tambah Pesanan</h2>
                <p class="text-sm text-gray-600 mb-6">Home > List Pesanan > Tambah Pesanan</p>

                <!-- Form -->
                <div class="bg-[#ffffff] rounded-2xl shadow-md p-8 mt-6">
                    <form action="{{ route('admin.orders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama Pelanggan -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-2">Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" placeholder="Ketik disini..."
                                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-pink-200">
                            </div>

                            <!-- No HP -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-2">No HP</label>
                                <input type="text" name="no_hp" placeholder="Ketik disini..." maxlength="13"
                                    minlength="12" pattern="^[0-9]{12,13}$"
                                    title="Nomor HP hanya boleh berisi angka (12–13 digit)"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-pink-200"
                                    required>
                            </div>

                            <!-- Alamat -->
                            <div class="md:col-span-1">
                                <label class="block font-semibold text-gray-700 mb-2">Alamat</label>
                                <textarea name="alamat" rows="3" placeholder="Ketik disini..."
                                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-pink-200"></textarea>
                            </div>

                            <!-- Upload KTP -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-2">Upload KTP</label>
                                <input type="file" name="ktp"
                                    class="w-full border border-gray-300 rounded-lg p-2 text-sm">
                                <p class="text-xs text-gray-500 mt-1">*Tolong pilih 1 file dengan ukuran maksimal 3MB</p>
                            </div>

                            <!-- Nama Produk -->
                            <div x-data="{ products: [''] }">
                                <label class="block font-semibold text-gray-700 mb-2">Nama Produk</label>

                                <!-- Input dinamis -->
                                <template x-for="(product, index) in products" :key="index">
                                    <div
                                        class="flex items-center justify-between border border-gray-300 rounded-lg p-2 mb-2">
                                        <input type="text" x-model="products[index]" placeholder="Pilih Produk..."
                                            class="w-full focus:outline-none placeholder-gray-400">
                                        <button type="button" class="text-gray-500 text-lg ml-2"
                                            @click="if (products[index].trim() !== '') $refs['arrow'+index].textContent = 'v'">
                                            >
                                        </button>
                                        <span x-ref="'arrow'+index" class="hidden"></span>
                                    </div>
                                </template>

                                <!-- Tombol tambah -->
                                <button type="button" @click="products.push('')"
                                    class="w-7 h-7 flex items-center justify-center border border-gray-400 rounded hover:bg-gray-100 mt-1">
                                    <span class="text-xl">+</span>
                                </button>
                            </div>


                            <!-- Lama Sewa -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-2">Lama Sewa</label>
                                <select name="lama_sewa"
                                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-pink-200">
                                    <option value="">Pilih Lama Sewa</option>
                                    <option value="1 Minggu">1 Minggu</option>
                                    <option value="2 Minggu">2 Minggu</option>
                                    <option value="3 Minggu">3 Minggu</option>
                                    <option value="1 Bulan">1 Bulan</option>
                                    <option value="2 Bulan">2 Bulan</option>
                                    <option value="3 Bulan">3 Bulan</option>
                                    <option value="4 Bulan">4 Bulan</option>
                                    <option value="5 Bulan">5 Bulan</option>
                                    <option value="6 Bulan">6 Bulan</option>
                                    <option value="7 Bulan">7 Bulan</option>
                                    <option value="8 Bulan">8 Bulan</option>
                                    <option value="9 Bulan">9 Bulan</option>
                                    <option value="10 Bulan">10 Bulan</option>
                                    <option value="11 Bulan">11 Bulan</option>
                                    <option value="12 Bulan">12 Bulan</option>
                                </select>
                            </div>

                            <!-- Biaya Pengiriman -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-2">Biaya Pengiriman</label>
                                <select name="biaya_pengiriman"
                                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-pink-200">
                                    <option value="">Pilih Biaya</option>
                                    <option value="0">Rp0</option>
                                    <option value="10000">Rp10.000</option>
                                    <option value="20000">Rp20.000</option>
                                </select>
                            </div>

                            <!-- Status -->
                            <div>
                                <label class="block font-semibold text-gray-700 mb-2">Status Saat Ini</label>
                                <select name="status"
                                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-pink-200">
                                    <option value="Dipesan">Konfirmasi</option>
                                    <option value="Konfirmasi">Perpanjang</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Selesai">Batal</option>
                                </select>
                            </div>
                        </div>

                        <!-- Bagian total -->
                        <div class="mt-6 flex justify-end">
                            <div class="text-right">
                                <p class="text-sm">Subtotal: <span class="font-semibold">Rp. 00.000</span></p>
                                <p class="text-sm">Pengiriman: <span class="font-semibold">Rp. 00.000</span></p>
                                <p class="text-lg font-bold mt-2">Total: Rp. 00.000</p>
                            </div>
                        </div>
                </div>
                <!-- Tombol -->
                <div class="mt-8 flex flex-wrap justify-center items-center gap-4 text-center">
                    <button type="submit"
                        class="bg-pink-400 text-white px-10 py-2 rounded-full hover:bg-pink-500 transition w-full sm:w-auto">
                        Simpan
                    </button>
                    <a href="{{ route('admin.orders.index') }}"
                        class="bg-gray-200 text-gray-700 px-10 py-2 rounded-full hover:bg-gray-300 transition w-full sm:w-auto">
                        Batal
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
