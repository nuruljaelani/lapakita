@extends('layouts.seller')

@section('title')
    Dashboard Seller
@endsection

@section('content')
    @if ($user->addresses->count() == 0)
        <div class="bg-whitew-full py-4 mt-4 md:mt-6 lg:mt-8 flex space-x-6 border-b mb-6">
            <p class="font-medium text-sm">Mulai siapkan toko anda</p>
            <div class="flex items-center">
                <a class="flex space-x-1">
                    <span class="material-icons text-sm text-gray-600">location_on</span>
                    <p class="font-medium text-sm text-gray-600">Lengkapi info alamat toko</p>
                </a>
            </div>
        </div>
    @endif
    <div class="flex flex-col space-y-6">
        <div class="flex border divide-x-2 w-fit">
            <div class="flex flex-col p-4">
                <p class="font-medium text-indigo-600 text-lg md:text-xl">12</p>
                <p>Pesanan Masuk</p>
            </div>
            <div class="flex flex-col p-4">
                <p class="font-medium text-indigo-600 text-lg md:text-xl">12</p>
                <p>Inbox Chat</p>
            </div>
            <div class="flex flex-col p-4">
                <p class="font-medium text-indigo-600 text-lg md:text-xl">12</p>
                <p>Ulasan Baru</p>
            </div>
        </div>
        <div class="flex flex-col border rounded-xl p-4 space-y-4">
            <div class="flex flex-col">
                <p class="font-medium">Berita & Info</p>
                <p class="text-gray-600 text-sm">Beragam info, tips dan tutorial yang dapat anda gunakan untuk membantu
                    meningkatkan penjualan.</p>
            </div>
            <div class="flex space-x-6">
                <div class="flex flex-col border">
                    <img src="{{ secure_asset('assets/images/samples/1.png') }}" />
                    <div class="flex flex-col text-sm p-4">
                        <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus debitis consequatur aut eum eaque quam, voluptates earum illo distinctio dignissimos.</p>
                    </div>
                </div>
                <div class="flex flex-col border">
                    <img src="{{ secure_asset('assets/images/samples/1.png') }}" />
                    <div class="flex flex-col text-sm p-4">
                        <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus debitis consequatur aut eum eaque quam, voluptates earum illo distinctio dignissimos.</p>
                    </div>
                </div>
                <div class="flex flex-col border">
                    <img src="{{ secure_asset('assets/images/samples/1.png') }}" />
                    <div class="flex flex-col text-sm p-4">
                        <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. N`atus debitis consequatur aut eum eaque quam, voluptates earum illo distinctio dignissimos.</p>
                    </div>
                </div>
                <div class="flex flex-col border">
                    <img src="{{ secure_asset('assets/images/samples/1.png') }}" />
                    <div class="flex flex-col text-sm p-4">
                        <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus debitis consequatur aut eum eaque quam, voluptates earum illo distinctio dignissimos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
