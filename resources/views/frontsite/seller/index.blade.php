@extends('layouts.seller')

@section('title')
    Lapakita Seller
@endsection

@section('content')
    <div class="flex flex-col space-y-10 md:space-y-20">
        <div class="flex flex-col space-y-4">
            <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-center font-medium">Kenapa Berjualan di Lapakita ?</p>
            <div class="flex flex-col md:flex-row space-x-0 md:space-x-8">
                <div class="flex flex-col items-center">
                    <img src="{{secure_asset('assets/images/illustrations/DrawKit5.png')}}" />
                    <div class="flex flex-col items-center">
                        <p class="font-medium text-base">Banyak Bonusnya</p>
                        <p class="text-gray-600 text-center text-sm">Dapatkan beragam bonus dan promo menarik dari berjualan di Lapakita.</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <img src="{{secure_asset('assets/images/illustrations/DrawKit1.png')}}" />
                    <div class="flex flex-col items-center">
                        <p class="font-medium text-base">Gratis ongkir & asuransi</p>
                        <p class="text-gray-600 text-center text-sm">Tidak perlu khawatir dengan ongkir karena ditanggung Lapakita, dan setiap pengiriman diasuransikan.</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <img src="{{secure_asset('assets/images/illustrations/DrawKit2.png')}}" />
                    <div class="flex flex-col items-center">
                        <p class="font-medium text-base">Gratis deposit & bebas denda</p>
                        <p class="text-gray-600 text-center text-sm">Kini Anda tak perlu ragu untuk buka toko. Pastinya gratis, tanpa deposit & bebas denda.</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <img src="{{secure_asset('assets/images/illustrations/DrawKit3.png')}}" />
                    <div class="flex flex-col items-center">
                        <p class="font-medium text-base">Layanan terpercaya</p>
                        <p class="text-gray-600 text-center text-sm">Nikmati layanan Seller Care setiap hari (08.00–22.00) melalui Live Chat, email, dan telepon.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex bg-slate-200 rounded-lg items-center p-6 w-fit mx-auto space-x-10">
            <p class="font-medium text-lg sm:text-xl md:text-2xl">Yuk mulai berjualan di Lapakita!</p>
            <a class="bg-indigo-500 rounded-lg text-white font-medium py-2 px-4">
                Daftar Sekarang
            </a>
        </div>
    </div>
@endsection