@extends('layouts.frontsite')

@section('title')
    lapakita.com
@endsection

@section('content')
    <x-banner />
    {{-- Category --}}
    <x-category />

    {{-- Flash sale --}}
    <div class="bg-gradient-to-r from-sky-600 to-indigo-600 rounded-lg my-4 md:my-8">
        <div class="flex flex-col p-4 space-y-4">
            <p class="text-white font-medium text-base md:text-lg uppercase">Flash Sale</p>
            <section class="splide" aria-label="Splide Basic HTML Example" id="splide-flash-sale">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide h-full" data-splide-interval="5000">
                            <div class="flex flex-col bg-white rounded-md">
                                <img src="{{ asset('assets/images/products/5b8924b7e72ae308b7767e2e82c2458a.jpg') }}"
                                    class="rounded-md h-full" />
                                <div class="flex flex-col p-2 space-y-2">
                                    <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                        consectetur</p>
                                    <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                    <div class="flex items-center space-x-1">
                                        <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%
                                        </div>
                                        <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide" data-splide-interval="5000">
                            <div class="flex flex-col bg-white rounded-md">
                                <img src="{{ asset('assets/images/products/f32e749f5cc76d3a117b04a4ad5a72e8.jpg') }}"
                                    class="rounded-md" />
                                <div class="flex flex-col p-2 space-y-2">
                                    <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                        consectetur</p>
                                    <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                    <div class="flex items-center space-x-1">
                                        <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%
                                        </div>
                                        <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide" data-splide-interval="5000">
                            <div class="flex flex-col bg-white rounded-md">
                                <img src="{{ asset('assets/images/products/ThumbnailE.png') }}" class="rounded-md" />
                                <div class="flex flex-col p-2 space-y-2">
                                    <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                        consectetur</p>
                                    <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                    <div class="flex items-center space-x-1">
                                        <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%
                                        </div>
                                        <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide" data-splide-interval="5000">
                            <div class="flex flex-col bg-white rounded-md">
                                <img src="{{ asset('assets/images/products/Baterai-ABC-Alkaline-2pcs-AAA-1.jpg') }}"
                                    class="rounded-md" />
                                <div class="flex flex-col p-2 space-y-2">
                                    <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                        consectetur</p>
                                    <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                    <div class="flex items-center space-x-1">
                                        <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%
                                        </div>
                                        <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide" data-splide-interval="5000">
                            <div class="flex flex-col bg-white rounded-md">
                                <img src="{{ asset('assets/images/products/S22_Ultra_Carousel_GroupKV_MO.webp') }}"
                                    class="rounded-md" />
                                <div class="flex flex-col p-2 space-y-2">
                                    <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                        consectetur</p>
                                    <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                    <div class="flex items-center space-x-1">
                                        <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%
                                        </div>
                                        <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide" data-splide-interval="5000">
                            <div class="flex flex-col bg-white rounded-md h-full">
                                <img src="{{ asset('assets/images/products/m171-gallery-grey-1.webp') }}"
                                    class="rounded-md h-full" />
                                <div class="flex flex-col p-2 space-y-2">
                                    <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                        consectetur</p>
                                    <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                    <div class="flex items-center space-x-1">
                                        <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%
                                        </div>
                                        <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    {{-- Official store --}}
    <div class="flex flex-col space-y-2 md:space-y-4">
        <div class="flex justify-between items-center">
            <p class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold">Official Store</p>
            <p class="text-[8pt] sm:text-[10pt] md:text-[12pt] text-indigo-600">Lihat semua</p>
        </div>
        <div class="flex flex-col -space-y-4 md:-space-y-8">
            <div class="bg-gradient-to-r from-teal-500 to-teal-800 via-sky-600 px-4 pt-4 pb-8 md:pb-12 rounded-lg">
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold uppercase text-white">penawaran spesial
                    official store</p>
                <p class="text-[8pt] sm:text-[10pt] md:text-[12pt] font-medium text-white">Dapatkan penawaran spesial dari
                    Official Store dengan jaminan Barang Original</p>
            </div>
            <div class="grid grid-cols-3 md:grid-cols-6 px-4 md:px-8 gap-4">
                <div class="flex flex-col bg-white shadow rounded-md items-center space-y-2 p-2">
                    <div class="bg-white p-4 rounded h-full flex items-center">
                        <img src="{{ asset('assets/images/brand/acer.png') }}" />
                    </div>
                    <div class="flex flex-col bg-emerald-100 rounded w-full items-center p-2">
                        <p class="text-sm md:text-base font-semibold text-emerald-600">Acer</p>
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow rounded-md items-center space-y-2 p-2">
                    <div class="bg-white p-4 h-full flex items-center">
                        <img src="{{ asset('assets/images/brand/erigo.webp') }}" />
                    </div>
                    <div class="flex flex-col bg-emerald-100 rounded w-full items-center p-2">
                        <p class="text-sm md:text-base font-semibold text-emerald-600">Erigo</p>
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow rounded-md items-center space-y-2 p-2">
                    <div class="bg-white p-4 h-full flex items-center">
                        <img src="{{ asset('assets/images/brand/fantech.png') }}" />
                    </div>
                    <div class="flex flex-col bg-emerald-100 rounded w-full items-center p-2">
                        <p class="text-sm md:text-base font-semibold text-emerald-600">Fantech</p>
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow rounded-md items-center space-y-2 p-2">
                    <div class="bg-white p-4 h-full flex items-center">
                        <img src="{{ asset('assets/images/brand/kahf.png') }}" />
                    </div>
                    <div class="flex flex-col bg-emerald-100 rounded w-full items-center p-2">
                        <p class="text-sm md:text-base font-semibold text-emerald-600">Kahf</p>
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow rounded-md items-center space-y-2 p-2">
                    <div class="bg-white p-4 h-full flex items-center">
                        <img src="{{ asset('assets/images/brand/nestle.png') }}" />
                    </div>
                    <div class="flex flex-col bg-emerald-100 rounded w-full items-center p-2">
                        <p class="text-sm md:text-base font-semibold text-emerald-600">Nestle</p>
                    </div>
                </div>
                <div class="flex flex-col bg-white shadow rounded-md items-center space-y-2 p-2">
                    <div class="bg-white p-4 h-full flex items-center">
                        <img src="{{ asset('assets/images/brand/vivo.png') }}" />
                    </div>
                    <div class="flex flex-col bg-emerald-100 rounded w-full items-center p-2">
                        <p class="text-sm md:text-base font-semibold text-emerald-600">Vivo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Produk pilihan --}}
    <div class="flex flex-col my-4 md:my-6 space-y-4 md:space-y-6">
        <p class="text-lg sm:text-xl md:text-2xl text-gray-700 font-semibold">Produk pilihan</p>
        <section class="splide" aria-label="Splide Basic HTML Example" id="splide-produk-pilihan">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide" data-splide-interval="5000">
                        <a href="{{route('frontsite.detail-product')}}">
                            <div class="flex flex-col bg-white rounded-md h-full shadow-md drop-shadow-lg">
                                <img src="{{ asset('assets/images/products/5b8924b7e72ae308b7767e2e82c2458a.jpg') }}"
                                    class="rounded-md h-full" />
                                <div class="flex flex-col p-2 space-y-2">
                                    <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                        consectetur</p>
                                    <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                    <div class="flex items-center space-x-1">
                                        <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%</div>
                                        <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide" data-splide-interval="5000">
                        <div class="flex flex-col bg-white rounded-md h-full shadow-md drop-shadow-lg">
                            <img src="{{ asset('assets/images/products/f32e749f5cc76d3a117b04a4ad5a72e8.jpg') }}"
                                class="rounded-md" />
                            <div class="flex flex-col p-2 space-y-2">
                                <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                    consectetur</p>
                                <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                <div class="flex items-center space-x-1">
                                    <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%</div>
                                    <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide" data-splide-interval="5000">
                        <div class="flex flex-col bg-white rounded-md h-full shadow-md drop-shadow-lg">
                            <img src="{{ asset('assets/images/products/ThumbnailE.png') }}" class="rounded-md" />
                            <div class="flex flex-col p-2 space-y-2">
                                <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                    consectetur</p>
                                <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                <div class="flex items-center space-x-1">
                                    <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%</div>
                                    <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide" data-splide-interval="5000">
                        <div class="flex flex-col bg-white rounded-md h-full shadow-md drop-shadow-lg">
                            <img src="{{ asset('assets/images/products/Baterai-ABC-Alkaline-2pcs-AAA-1.jpg') }}"
                                class="rounded-md" />
                            <div class="flex flex-col p-2 space-y-2">
                                <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                    consectetur</p>
                                <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                <div class="flex items-center space-x-1">
                                    <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%</div>
                                    <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide" data-splide-interval="5000">
                        <div class="flex flex-col bg-white rounded-md h-full shadow-md drop-shadow-lg">
                            <img src="{{ asset('assets/images/products/S22_Ultra_Carousel_GroupKV_MO.webp') }}"
                                class="rounded-md" />
                            <div class="flex flex-col p-2 space-y-2">
                                <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                    consectetur</p>
                                <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                <div class="flex items-center space-x-1">
                                    <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%</div>
                                    <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide" data-splide-interval="5000">
                        <div class="flex flex-col bg-white rounded-md h-full shadow-md drop-shadow-lg">
                            <img src="{{ asset('assets/images/products/m171-gallery-grey-1.webp') }}"
                                class="rounded-md h-full" />
                            <div class="flex flex-col p-2 space-y-2">
                                <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                    consectetur</p>
                                <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                <div class="flex items-center space-x-1">
                                    <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%</div>
                                    <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide" data-splide-interval="5000">
                        <div class="flex flex-col bg-white rounded-md h-full shadow-md drop-shadow-lg">
                            <img src="{{ asset('assets/images/products/m171-gallery-grey-1.webp') }}"
                                class="rounded-md h-full" />
                            <div class="flex flex-col p-2 space-y-2">
                                <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                    consectetur</p>
                                <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                <div class="flex items-center space-x-1">
                                    <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%</div>
                                    <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide" data-splide-interval="5000">
                        <div class="flex flex-col bg-white rounded-md h-full shadow-md drop-shadow-lg">
                            <img src="{{ asset('assets/images/products/m171-gallery-grey-1.webp') }}"
                                class="rounded-md h-full" />
                            <div class="flex flex-col p-2 space-y-2">
                                <p class="text-sm font-semibold leading-none truncate">Lorem ipsum dolor sit amet
                                    consectetur</p>
                                <p class="font-semibold text-sky-600">Rp. 599.000</p>
                                <div class="flex items-center space-x-1">
                                    <div class="bg-rose-300 rounded text-[8pt] text-rose-800 font-medium p-[2px]">50%</div>
                                    <p class="text-[8pt] line-through">Rp 1.200.000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const splide1 = new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: 'play'
            });
            splide1.mount();

            new Splide('#splide-flash-sale', {
                type: 'slide',
                perPage: 5,
                gap: 10,
                breakpoints: {
                    425: {
                        perPage: 2
                    },
                    640: {
                        perPage: 3
                    },
                    768: {
                        perPage: 4
                    }
                }
            }).mount()

            new Splide('#splide-produk-pilihan', {
                type: 'slide',
                perPage: 6,
                gap: 20,
                breakpoints: {
                    425: {
                        perPage: 2
                    },
                    640: {
                        perPage: 3
                    },
                    768: {
                        perPage: 4
                    }
                }
            }).mount()

            new Splide('#splide-category', {
                type: 'slide',
                perPage: 9,
                gap: 20,
                breakpoints: {
                    425: {
                        perPage: 4
                    },
                    640: {
                        perPage: 5
                    },
                    768: {
                        perPage: 7
                    }
                }
            }).mount()
        });
    </script>
@endsection
