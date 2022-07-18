@extends('layouts.frontsite')

@section('title')
    Keranjang
@endsection

@section('content')
    <div class="flex flex-col md:flex-row py-4 space-x-0 md:space-x-8 space-y-2 md:space-y-0">
        <div class="flex flex-col w-full md:w-2/3 space-y-4">
            <p class="text-base sm:text-lg md:text-xl font-bold">Keranjang</p>
            <div class="flex flex-col space-y-4 md:space-y-6">
                <div class="bg-white rounded-lg py-2 flex space-x-2 shadow drop-shadow-lg px-4">
                    <input type="checkbox" />
                    <p class="text-gray-600">Pilih semua produk</p>
                </div>
                <div class="flex flex-col bg-white shadow rounded-lg">
                    <div class="flex px-4 py-2 space-x-2 items-center">
                        <input type="checkbox" />
                        <p class="text-gray-700 font-medium text-sm">Rizky Store</p>
                    </div>
                    <hr>
                    <div class="flex p-4 space-x-4">
                        <div class="flex w-1/4 md:w-1/5 space-x-2">
                            <input type="checkbox" />
                            <img src="{{ secure_asset('assets/images/products/S22_Ultra_Carousel_GroupKV_MO.webp') }}"
                                class="h-10 md:h-20 lg:h-28" />
                        </div>
                        <div class="w-2/4 md:w-3/5 flex flex-col">
                            <p class="truncate font-medium text-indigo-700">Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Id, adipisci.</p>
                            <p class="text-gray-800 font-semibold">Rp15.999.000</p>
                            <div class="flex items-center space-x-1">
                                <p class="text-xs line-through">Rp17.999.000</p>
                                <div class="bg-rose-200 rounded">
                                    <p class="text-xs text-rose-700 font-medium p-[0.15rem]">20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col w-1/4 md:w-1/5 items-end justify-end space-y-4">
                            <div class="flex space-x-2">
                                <span class="material-icons text-sm md:text-base">
                                    favorite_border
                                </span>
                                <span class="material-icons text-sm md:text-base">
                                    delete_outline
                                </span>
                            </div>
                            <div class="flex items-center space-x-2 border rounded-lg">
                                <button type="button" class="p-2">
                                    <span class="material-icons text-sm md:text-base">
                                        add
                                    </span>
                                </button>
                                <p class="text-sm md:text-base">1</p>
                                <button type="button" class="p-2">
                                    <span class="material-icons text-sm md:text-base">
                                        remove
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow rounded-lg">
                    <div class="flex px-4 py-2 space-x-2 items-center">
                        <input type="checkbox" />
                        <p class="text-gray-700 font-medium text-sm">Rizky Store</p>
                    </div>
                    <hr>
                    <div class="flex p-4 space-x-4">
                        <div class="flex w-1/5 space-x-2">
                            <input type="checkbox" />
                            <img src="{{ secure_asset('assets/images/products/S22_Ultra_Carousel_GroupKV_MO.webp') }}"
                                class="h-10 md:h-20 lg:h-28" />
                        </div>
                        <div class="w-3/5 flex flex-col">
                            <p class="truncate font-medium text-indigo-700">Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Id, adipisci.</p>
                            <p class="text-gray-800 font-semibold">Rp15.999.000</p>
                            <div class="flex items-center space-x-1">
                                <p class="text-xs line-through">Rp17.999.000</p>
                                <div class="bg-rose-200 rounded">
                                    <p class="text-xs text-rose-700 font-medium p-[0.15rem]">20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col w-1/5 items-end justify-end space-y-4">
                            <div class="flex space-x-2">
                                <span class="material-icons text-sm md:text-base">
                                    favorite_border
                                </span>
                                <span class="material-icons text-sm md:text-base">
                                    delete_outline
                                </span>
                            </div>
                            <div class="flex items-center space-x-2 border rounded-lg">
                                <button type="button" class="p-2">
                                    <span class="material-icons text-sm md:text-base">
                                        add
                                    </span>
                                </button>
                                <p class="text-sm md:text-base">1</p>
                                <button type="button" class="p-2">
                                    <span class="material-icons text-sm md:text-base">
                                        remove
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full md:w-1/3">
            <div class="flex flex-col space-y-2">
                <p class="text-xs text-gray-500 font-medium">Voucher & promo</p>
                <div class="bg-white shadow rounded-lg p-3 flex space-x-2">
                    <i class="material-icons">money</i>
                    <p class="text-gray-500">Pilih produk dulu sebelum pakai voucher</p>
                </div>
                <p class="text-xs text-gray-500 font-medium">Detail pesanan</p>
                <div class="bg-white shadow rounded-lg p-3 flex flex-col space-y-2">
                    <div class="flex justify-between">
                        <p class="font-medium">Total</p>
                        <p class="text-gray-500">Rp0</p>
                    </div>
                    <button type="button" class="rounded-xl py-3 bg-indigo-500 text-white font-medium">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
