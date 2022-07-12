<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ secure_asset('vendor/dist/css/splide.min.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <x-navbar />
        <main class="mx-auto max-w-6xl px-4 lg:px-0 my-10 mt-16 md:mt-20 lg:mt-[5.5rem]">
            @yield('content')
        </main>
        <hr>
        <footer>
            <div class="flex flex-wrap justify-between mx-auto max-w-6xl px-4 md:px-2 lg:px-0 py-4 md:py-8">
                <div class="flex flex-col space-y-2">
                    <p class="uppercase font-semibold text-gray-700">lapakita</p>
                    <div class="flex flex-col space-y-1 text-sm text-gray-700">
                        <p>Tentang Lapakita</p>
                        <p>Karir</p>
                        <p>Blog</p>
                        <p>Hak Kekayaan Intelektual</p>
                        <p>Kabar Terbaru</p>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <p class="uppercase font-semibold text-gray-700">Bantuan</p>
                    <div class="flex flex-col space-y-1 text-sm text-gray-700">
                        <p>Pembayaran</p>
                        <p>Pengiriman</p>
                        <p>Pengembalian Produk</p>
                        <p>Hubungi Kami</p>
                        <p>Syarat dan Ketentuan</p>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <p class="uppercase font-semibold text-gray-700">Customer Care</p>
                    <div class="flex flex-col space-y-1 text-sm text-gray-700">
                        <div class="flex space-x-2">
                            <i class="material-icons">phone</i>
                            <p>0219938830</p>
                        </div>
                        <div class="flex space-x-2">
                            <i class="material-icons">mail</i>
                            <p>customer.care@lapakita.com</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <p class="uppercase font-semibold text-gray-700">Ikuti Kami</p>
                    <div class="flex flex-col space-y-1 text-sm text-gray-700">
                        <div class="flex space-x-2">
                            <img src="{{ secure_asset('assets/images/logo/instagram.png') }}" class="w-4 md:w-8" />
                            <img src="{{ secure_asset('assets/images/logo/twitter.png') }}" class="w-4 md:w-8" />
                            <img src="{{ secure_asset('assets/images/logo/facebook.png') }}" class="w-4 md:w-8" />
                            <img src="{{ secure_asset('assets/images/logo/youtube.png') }}" class="w-4 md:w-8" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex bg-gray-100 py-4">
                <div class="max-w-6xl mx-auto">
                    <p class="text-[8pt] md:text-[10pt] font-medium text-gray-700 text-left">Blibli &copy; 2022 | PT
                        Lapakita Indonesia</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ secure_asset('vendor/dist/js/splide.min.js') }}" lang="javascript/text"></script>
    @yield('script')
</body>

</html>
