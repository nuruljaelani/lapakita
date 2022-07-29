<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <nav class="bg-indigo-500 fixed inset-0 z-50 pt-1 h-fit flex flex-col space-y-1" x-data="{ cart: false, category: false, profile: false }">
        <div class="flex justify-end max-w-6xl mx-auto w-full md:space-x-4 items-center px-4 lg:px-0">
            <a href="{{ route('seller.index') }}" class="text-xs text-white tracking-tight font-medium">Jual di
                lapakita</a>
            <div class="flex items-center">
                <span class="material-icons text-xs text-white">
                    contact_support
                </span>
                <p class="text-xs text-white tracking-tight font-medium">Bantuan</p>
            </div>
        </div>
        <div class="flex max-w-6xl mx-auto w-full space-x-2 md:space-x-4 items-center px-4 lg:px-0 pt-1">
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
            <div class="flex w-2/5 md:w-1/5 items-center space-x-2 justify-end">
                <a href="{{ route('frontsite.cart') }}"
                    class="material-symbols-outlined text-white text-[16pt] md:text-[24pt] cursor-pointer"
                    @mouseover="cart = true" @mouseout="cart = false" @mouseenter="gray = true"
                    @mouseleave="gray = false">
                    local_mall
                </a>
                <p class="text-white">|</p>
                @auth
                    <a href="{{route('frontsite.member.profile')}}" class="cursor-pointer text-white font-medium" @mouseover="profile = true, gray = true" @mouseout="profile = false, gray = false">{{Auth::user()->name}}</a>
                @endauth
                @guest    
                <a href="{{ route('frontsite.login') }}"
                    class="border-2 border-white rounded-md text-xs text-white p-2 font-semibold">
                    Masuk
                </a>
                <a href="{{ route('frontsite.register') }}"
                    class="bg-white hidden md:block rounded-md text-xs text-indigo-800 border-2 border-white p-2 font-semibold">
                    Daftar
                </a>
                @endguest
            </div>
            <div x-show="cart" @mouseenter="cart = true" @mouseleave="cart = false" @mouseover="gray = true"
                @mouseout="gray = false"
                class="bg-white rounded-lg absolute shadow-lg drop-shadow-md backdrop-blur p-4 right-12 top-[4rem] w-fit"
                x-transition.duration.400ms>
                <div class="flex flex-col items-center px-6">
                    <img src="{{ secure_asset('assets/images/Cart.png') }}" class="w-20 md:w-40" />
                    <p class="text-gray-900 font-semibold">Keranjang kamu masih kosong</p>
                </div>
            </div>
        </div>
        <div class="flex max-w-6xl mx-auto w-full px-4 lg:px-0 justify-between">
            <div class="bg-indigo-600 text-white rounded-t p-[0.20rem] hidden md:flex space-x-1 items-center px-2 cursor-pointer"
                @mouseover="category = true" @mouseout="category = false" @mouseenter="gray = true"
                @mouseleave="gray = false">
                <span class="material-icons text-[1rem]">
                    category
                </span>
                <p class="text-[10pt]">Kategori</p>
                <span class="material-icons text-[1rem]">
                    expand_more
                </span>
            </div>
            <div
                class="bg-indigo-600 text-white text-sm rounded-t p-[0.20rem] hidden md:flex space-x-1 items-center px-2 cursor-pointer">
                <span class="material-icons text-[1rem]">
                    location_on
                </span>
                <p class="text-[10pt]">Kirim ke :</p>
                <p class="font-medium text-[10pt] truncate">Jl RA Kartini No 21 Kosambi, Kota Cirebon</p>
                <span class="material-icons text-[1rem]">
                    expand_more
                </span>
            </div>
        </div>
        <div x-show="category" @mouseenter="category = true" @mouseleave="category = false" @mouseover="gray = true"
            @mouseout="gray = false" x-data="{ subcategory: false }"
            class="bg-white rounded-lg absolute shadow-lg drop-shadow-md backdrop-blur left-12 top-[5.2rem] flex"
            x-transition.duration.400ms>
            <div class="flex flex-col font-medium text-[12pt] border-r p-4 h-80 overflow-auto w-52">
                <div class="hover:text-sky-500 cursor-pointer" @mouseover="subcategory = true">Buku</div>
                <p>Dapur</p>
                <p>Elektronik</p>
                <p>Fashion Muslim</p>
                <p>Fashion Pria</p>
                <p>Fashion Wanita</p>
                <p>Fashion Anak & Bayi</p>
                <p>Film & Musik</p>
                <p>Gaming</p>
                <p>Handphone & Tablet</p>
                <p>Kecantikan & Kesehatan</p>
                <p>Komputer & Laptop</p>
                <p>Logam Mulia</p>
            </div>
            <div x-show="subcategory" class="flex flex-col p-4 space-y-2" x-transition @mouseenter="subcategory = true">
                <div class="flex flex-col space-y-2">
                    <p class="font-medium text-[11pt]">Peralatan Dapur</p>
                    <div class="flex flex-col space-y-1 text-[10pt]">
                        <a href="{{ route('frontsite.pCategory') }}">Pompa Galon</a>
                        <p>Dispenser Air</p>
                        <p>Rak Dapur</p>
                        <p>Rak Piring</p>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <p class="font-medium text-[11pt]">Peralatan Makan</p>
                    <div class="flex flex-col space-y-1 text-[10pt]">
                        <p>Pompa Galon</p>
                        <p>Dispenser Air</p>
                        <p>Rak Dapur</p>
                        <p>Rak Piring</p>
                    </div>
                </div>
            </div>
        </div>
        @auth    
        <div x-show="profile" x-transition class="flex flex-col bg-white rounded py-2 absolute top-[3.6rem] right-8 space-y-2" @mouseover="profile = true, gray = true" @mouseout="profile = false, gray = false">
            <div class="flex p-2 space-x-2">
                <img src="{{secure_asset('assets/images/faces/2.jpg')}}" class="w-8 rounded-full" />
                <div class="flex flex-col">
                    <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                    <p class="text-[8pt] text-gray-600">Classic member</p>
                </div>
            </div>
            <hr>
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button type="submit" class="px-4 flex space-x-1 text-gray-600 items-center">
                    <span class="material-icons text-sm">logout</span>
                    <p class="text-sm">Keluar</p>
                </button>  
            </form>
        </div>
        @endauth
    </nav>
</div>
