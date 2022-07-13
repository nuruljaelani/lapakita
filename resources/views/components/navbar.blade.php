<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <nav class="bg-indigo-500 fixed inset-0 z-50 h-fit" x-data="{ cart: false }">
        <div class="flex max-w-6xl mx-auto py-2 md:py-4 space-x-2 md:space-x-4 items-center px-4 lg:px-0">
            <div class="md:w-1/5 hidden md:block">
                <a href="{{ route('frontsite.index') }}">
                    <img src="{{ secure_asset('assets/images/logo/lapakita4.png') }}" class="h-6 md:h-8 lg:h-10" />
                </a>
            </div>
            <div class="flex items-center bg-white rounded-md px-2 w-3/5">
                <input type="text" class="bg-white outline-none rounded-md px-4 py-2 text-sm w-full" />
                <button type="button" class="bg-indigo-500 p-1 rounded flex items-center">
                    <i class="material-icons text-white">search</i>
                </button>
            </div>
            <div class="flex w-2/5 md:w-1/5 items-center space-x-2 justify-end relative">
                <a href="{{route('frontsite.cart')}}" class="material-symbols-outlined text-white text-[16pt] md:text-[24pt] cursor-pointer"
                    @mouseover="cart = true" @mouseout="cart = false">
                    local_mall
                </a>
                <p class="text-white">|</p>
                <a href="{{ route('frontsite.login') }}"
                    class="border-2 border-white rounded-md text-xs text-white p-2 font-semibold">
                    Masuk
                </a>
                <a href="{{ route('frontsite.register') }}"
                    class="bg-white hidden md:block rounded-md text-xs text-indigo-800 border-2 border-white p-2 font-semibold">
                    Daftar
                </a>
            </div>
            <div x-show="cart" @mouseenter="cart = true" @mouseleave="cart = false"
                class="bg-white rounded-lg absolute shadow-lg drop-shadow-md backdrop-blur p-4 right-12 top-[3.4rem] w-fit">
                <div class="flex flex-col items-center px-6">
                    <img src="{{ secure_asset('assets/images/Cart.png') }}" class="w-20 md:w-40" />
                    <p class="text-gray-900 font-semibold">Keranjang kamu masih kosong</p>
                </div>
            </div>
        </div>
    </nav>
</div>
