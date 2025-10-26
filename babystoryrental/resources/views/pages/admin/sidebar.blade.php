<div class="w-64 bg-white shadow-md flex flex-col items-center py-6">
    <img src="{{ asset('images/LogoBaby.png') }}" class="w-40 mb-8" alt="Baby Story">

    <ul class="space-y-3 w-full text-center">
        <li>
            <a href="{{ route('admin.dashboard') }}"
                class="block py-2 mx-4 rounded-full font-semibold 
                {{ request()->routeIs('admin.dashboard') ? 'bg-pink-400 text-white' : 'hover:text-pink-400 text-gray-700' }}">
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('admin.orders.index') }}"
                class="block py-2 mx-4 rounded-full font-semibold 
                {{ request()->routeIs('admin.orders.*') ? 'bg-pink-400 text-white' : 'hover:text-pink-400 text-gray-700' }}">
                Daftar Pesanan
            </a>
        </li>
        <li>
            <a href="{{ route('admin.categories.index') }}"
                class="block py-2 mx-4 rounded-full font-semibold 
                {{ request()->routeIs('admin.categories.*') ? 'bg-pink-400 text-white' : 'hover:text-pink-400 text-gray-700' }}">
                Kategori
            </a>
        </li>
        <li>
            <a href="{{ route('admin.products.index') }}"
                class="block py-2 mx-4 rounded-full font-semibold 
                {{ request()->routeIs('admin.products.*') ? 'bg-pink-400 text-white' : 'hover:text-pink-400 text-gray-700' }}">
                Produk
            </a>
        </li>
        <li><a href="#" class="block py-2 hover:text-pink-400">Statistik</a></li>

        {{-- <li>
            <a href="{{ route('admin.categories.index') }}"
                class="block py-2 mx-4 rounded-full font-semibold 
                {{ request()->routeIs('admin.categories.*') ? 'bg-pink-400 text-white' : 'hover:text-pink-400 text-gray-700' }}">
                Kategori
            </a>
        </li>

        <li>
            <a href="{{ route('admin.products.index') }}"
                class="block py-2 mx-4 rounded-full font-semibold 
                {{ request()->routeIs('admin.products.*') ? 'bg-pink-400 text-white' : 'hover:text-pink-400 text-gray-700' }}">
                Produk
            </a>
        </li>

        <li>
            <a href="{{ route('admin.statistics.index') }}"
                class="block py-2 mx-4 rounded-full font-semibold 
                {{ request()->routeIs('admin.statistics.*') ? 'bg-pink-400 text-white' : 'hover:text-pink-400 text-gray-700' }}">
                Statistik
            </a>
        </li> --}}
    </ul>
</div>
