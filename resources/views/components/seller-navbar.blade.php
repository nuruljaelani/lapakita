<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <nav class="bg-white fixed inset-0 z-50 py-1 h-fit flex flex-col space-y-1 border-b" x-data="{ profile: false }">
        <div class="flex justify-end max-w-6xl mx-auto w-full md:space-x-4 items-center px-4 lg:px-0">
            <div class="text-xs text-indigo-600 tracking-tight font-medium flex items-center">
                <span class="material-icons text-xs">apps</span>
                <p>Download Lapakita App</p>
            </div>
            <div class="flex items-center">
                <span class="material-icons text-xs text-indigo-600">
                    contact_support
                </span>
                <p class="text-xs text-indigo-600 tracking-tight font-medium">Bantuan</p>
            </div>
        </div>
        <div class="flex max-w-6xl mx-auto w-full space-x-2 md:space-x-4 items-center px-4 lg:px-0 pt-1 justify-between">
            <div class="block">
                <a href="{{ route('seller.index') }}">
                    <img src="{{ secure_asset('assets/images/logo/lapakita3.png') }}" class="h-6 md:h-8 lg:h-10" />
                </a>
            </div>
            @auth
                <div class="cursor-pointer text-indigo font-medium hover:bg-indigo-100 p-1 rounded flex space-x-1" @mouseover="profile = true, gray = true"
                    @mouseout="profile = false, gray = false">
                    <img src="{{secure_asset('assets/images/faces/5.jpg')}}" class="w-8 rounded-full" />
                    <p class="text-sm">{{Auth::user()->name}}</p>
                </div>
            @endauth
            @guest    
            <div class="flex items-center space-x-2 justify-end">
                <a href="{{ route('seller.login') }}"
                    class="border-2 border-indigo-500 rounded-md text-xs text-indigo-500 py-2 px-6 font-semibold">
                    Masuk
                </a>
                <a href="{{ route('seller.register') }}"
                    class="bg-indigo-500 hidden md:block rounded-md text-xs text-white border-2 border-white py-2 px-6 font-semibold">
                    Daftar
                </a>
            </div>
            @endguest
        </div>
        @auth
            <div class="flex max-w-6xl mx-auto w-full pt-2 space-x-6">
                <div class="rounded-md hover:bg-indigo-100 p-2 bg-indigo-100">Dashboard</div>
                <div class="rounded-md hover:bg-indigo-100 p-2">Produk</div>
                <div class="rounded-md hover:bg-indigo-100 p-2">Pesanan</div>
                <div class="rounded-md hover:bg-indigo-100 p-2">Retur</div>
            </div>
        @endauth
        <div x-show="profile" x-transition class="flex flex-col space-y-2 bg-white shadow drop-shadow rounded px-4 py-2 absolute top-16 right-16" @mouseover="profile = true, gray = true" @mouseout="profile = false, gray = false">
            <a class="text-sm text-gray-600 cursor-pointer">Info Toko</a>
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button type="submit" class="cursor-pointer text-sm">Logout</button>
            </form>
        </div>
    </nav>
</div>
