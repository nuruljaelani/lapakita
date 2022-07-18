@extends('layouts.frontsite')

@section('title')
    Category
@endsection

@section('content')
    <div class="flex flex-col my-4 md:my-8 space-y-4">
        <div class="flex items-center">
            <p>Home</p>
            <span class="material-icons text-[18px]">
                chevron_right
            </span>
            <p>Fashion Pria</p>
            <span class="material-icons text-[18px]">
                chevron_right
            </span>
            <p>Tshirt</p>
        </div>
        <hr>

        <div class="flex flex-col md:flex-row space-x-0 md:space-x-6 w-full space-y-4 md:space-y-0">
            <div class="flex flex-col w-full md:w-1/5 bg-white rounded-xl shadow h-fit">
                <div class="flex flex-col text-sm p-4 space-y-2" x-data="{less: false, more: true}">
                    <div class="flex justify-between">
                        <p class="font-medium">Kategori</p>
                        <span x-show="more" class="material-icons cursor-pointer" @click="less = true, more = false">
                            expand_less
                        </span>
                        <span x-show="less" class="material-icons cursor-pointer" @click="less = false, more = true">
                            expand_more
                        </span>
                    </div>
                    <div x-show="more" class="flex flex-col text-gray-600">
                        <p>Fashion Pria</p>
                        <p class="pl-4">Tshirt</p>
                    </div>
                </div>
                <hr>
                <div class="flex flex-col text-sm p-4 space-y-2" x-data="{less: false, more: true}">
                    <div class="flex justify-between">
                        <p class="font-medium">Lokasi Toko</p>
                        <span x-show="more" class="material-icons cursor-pointer" @click="less = true, more = false">
                            expand_less
                        </span>
                        <span x-show="less" class="material-icons cursor-pointer" @click="less = false, more = true">
                            expand_more
                        </span>
                    </div>
                    <div x-show="more" class="flex flex-col text-gray-600">
                        <div class="flex space-x-2">
                            <input type="checkbox" />
                            <p>Kota Bandung</p>
                        </div>
                        <div class="flex space-x-2">
                            <input type="checkbox" />
                            <p>DKI Jakarta</p>
                        </div>
                        <div class="flex space-x-2">
                            <input type="checkbox" />
                            <p>Kota Surabaya</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="flex flex-col text-sm p-4 space-y-2" x-data="{less: false, more: true}">
                    <div class="flex justify-between">
                        <p class="font-medium">Pengiriman</p>
                        <span x-show="more" class="material-icons cursor-pointer" @click="less = true, more = false">
                            expand_less
                        </span>
                        <span x-show="less" class="material-icons cursor-pointer" @click="less = false, more = true">
                            expand_more
                        </span>
                    </div>
                    <div x-show="more" class="flex flex-col text-gray-600">
                        <div class="flex space-x-2">
                            <input type="checkbox" />
                            <p>SiCepat</p>
                        </div>
                        <div class="flex space-x-2">
                            <input type="checkbox" />
                            <p>JNT Express</p>
                        </div>
                        <div class="flex space-x-2">
                            <input type="checkbox" />
                            <p>Anteraja</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full md:w-4/5 space-y-4 md:space-y-6">
                <div class="flex flex-col sm:flex-row h-fit p-3 bg-white rounded-xl shadow w-full justify-between">
                    <select class="w-fit text-sm bg-gray-100 rounded-lg p-2 outline-none">
                        <option class="font-medium">Tipe Seller</option>
                        <option>Official Store</option>
                        <option>Tipe Seller</option>
                    </select>
                    <div class="flex items-center space-x-2">
                        <p class="text-sm">Urutkan</p>
                        <select class="w-fit text-sm bg-gray-100 rounded-lg p-2 outline-none">
                            <option class="font-medium">Produk Terlaris</option>
                            <option>Produk Terpopuler</option>
                            <option>Harga Tertinggi</option>
                            <option>Harga Terendah</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/5b8924b7e72ae308b7767e2e82c2458a.jpg')}}" class="rounded-lg  h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/917d5772-f9d6-4cd2-a812-63b9d574b7da-iphone-13-pro-green-select.png')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/Apple-iPhone-13-Pro-featured-image-packshot-review-1024x691-1.jpg')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/Baterai-ABC-Alkaline-2pcs-AAA-1.jpg')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/f32e749f5cc76d3a117b04a4ad5a72e8.jpg')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/GoPro Hero 10 GoPro Hero10 Black (2).webp')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/S22_Ultra_Carousel_GroupKV_MO.webp')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/m171-gallery-grey-1.webp')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/5b8924b7e72ae308b7767e2e82c2458a.jpg')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/5b8924b7e72ae308b7767e2e82c2458a.jpg')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white shadow rounded-lg drop-shadow-md">
                        <img src="{{secure_asset('assets/images/products/5b8924b7e72ae308b7767e2e82c2458a.jpg')}}" class="rounded-lg h-[8rem] sm:h-[9rem] md:h-[10.5rem]" />
                        <div class="flex flex-col p-2 space-y-1">
                            <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                consectetur</p>
                            <p class="font-semibold text-sky-600">Rp. 599.000</p>
                            <p class="text-xs text-gray-600">Kota Bandung</p>
                            <div class="flex space-x-1">
                                <div class="flex text-xs items-center space-x-1">
                                    <span class="material-icons text-yellow-500 text-xs">star</span>
                                    <p class="font-medium">4.8</p>
                                </div>
                                <p class="font-medium text-xs">|</p>
                                <p class="font-medium text-xs">Terjual 350</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
