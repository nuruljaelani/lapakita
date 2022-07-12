@extends('layouts.frontsite')

@section('title')
    Detail Produk
@endsection

@section('content')
    <div class="flex flex-col space-y-4 md:space-y-6" x-data="detailProduct">
        <div class="flex space-x-1">
            <p class="text-sm text-sky-600">Kategori</p>
            <span class="material-symbols-outlined">
                chevron_right
            </span>
            <p class="text-sm text-sky-600">Sub Kategori</p>
        </div>
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col md:flex-row space-x-0 md:space-x-6 space-y-4 md:space-y-0">
                <div class="w-full md:w-[30%]">
                    <section id="main-carousel" class="splide"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="bg-white shadow rounded-lg border">
                                        <img src="{{ asset('assets/images/products/S22_Ultra_Carousel_GroupKV_MO.webp') }}"
                                            class="rounded-lg" alt="">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="bg-white shadow rounded-lg border">
                                        <img src="{{ asset('assets/images/products/f32e749f5cc76d3a117b04a4ad5a72e8.jpg') }}"
                                            class="rounded-lg" alt="">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="bg-white shadow rounded-lg border">
                                        <img src="{{ asset('assets/images/products/ThumbnailE.png') }}" class="rounded-lg"
                                            alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section id="thumbnail-carousel" class="splide"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="{{ asset('assets/images/products/S22_Ultra_Carousel_GroupKV_MO.webp') }}"
                                        alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ asset('assets/images/products/f32e749f5cc76d3a117b04a4ad5a72e8.jpg') }}"
                                        alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ asset('assets/images/products/ThumbnailE.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="flex flex-col w-full md:w-[45%] space-y-4">
                    <div class="flex flex-col">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-semibold text-gray-700 leading-1">Samsung
                            Galaxy S21 Ultra</p>
                        <div class="flex space-x-4 items-center">
                            <div class="flex items-center space-x-1">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <p class="text-[12pt] font-semibold text-gray-600">4.5</p>
                                <p class="text-[11pt] text-gray-500">(125 ulasan)</p>
                            </div>
                            <p>|</p>
                            <p class="text-gray-600 font-medium text-sm">Terjual 300</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold text-rose-400">Rp15.999.000</p>
                        <div class="flex space-x-1">
                            <p class="text-xs md:text-sm line-through text-gray-500">Rp19.999.000</p>
                            <span class="text-rose-700 bg-rose-200 rounded p-1 text-xs font-medium">30%</span>
                        </div>
                    </div>
                    <hr>
                    <div class="flex flex-col space-y-2">
                        <div class="flex space-x-2">
                            <img src="{{ asset('assets/images/brand/samsung2.png') }}" class="w-10" />
                            <div class="flex flex-col">
                                <p class="font-semibold text-gray-700 text-[10pt] md:text-[12pt]">Samsung Official</p>
                                <p class="text-gray-500 text-sm">Online 5 menit lalu</p>
                            </div>
                            <button type="button"
                                class="border border-indigo-500 rounded-md text-indigo-700 text-sm py-1 px-4 h-fit">
                                Ikuti
                            </button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex space-x-1">
                                <i class="material-icons text-yellow-500 text-sm">star</i>
                                <p class="text-gray-500 text-sm">4.7 Penilaian</p>
                            </div>
                            <p>|</p>
                            <div class="text-gray-500 text-sm">
                                4.5 Kecepatan Respon
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex text-sm space-x-2">
                            <p class="text-gray-700">Merk :</p>
                            <p class="text-sky-500 font-medium">Samsung</p>
                        </div>
                        <div class="flex text-sm space-x-2">
                            <p class="text-gray-700">Kategori :</p>
                            <p class="text-sky-500 font-medium">Handphone</p>
                        </div>
                        <div class="flex text-sm space-x-2">
                            <p class="text-gray-700">Berat Satuan :</p>
                            <p class="font-medium">100 gr</p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex flex-col space-y-2">
                        <p class="text-gray-700 font-semibold text-base md:text-lg">Pengiriman</p>
                        <div class="flex space-x-2">
                            <span class="material-icons text-gray-600">
                                location_on
                            </span>
                            <p class="text-gray-600">Dikirim dari</p>
                            <p class="text-gray-700 font-medium">Jakarta Selatan</p>
                        </div>
                        <div class="flex space-x-2">
                            <span class="material-icons text-gray-600">
                                local_shipping
                            </span>
                            <p class="text-gray-600">Gratis Ongkir</p>
                            <p class="text-gray-700 font-medium">20rb</p>
                        </div>
                    </div>
                </div>

                {{-- Catatan --}}
                <div
                    class="flex flex-col w-full md:w-[25%] bg-white rounded-lg border h-fit p-2 md:p-4 space-y-2 md:space-y-4">
                    <p class="text-base font-medium text-gray-700">Jumlah dan Catatan</p>
                    <div class="flex space-x-4">
                        <div class="flex space-x-4 border border-sky-500 w-fit items-center">
                            <button type="button" class="px-2 py-1">
                                <i class="material-icons text-sm">add</i>
                            </button>
                            <span class="text-sm font-medium text-sky-500">1</span>
                            <button type="button" class="px-2 py-1">
                                <i class="material-icons text-sm">remove</i>
                            </button>
                        </div>
                        <p class="text-base font-medium text-gray-700">Stok 139</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-gray-600">Total harga</p>
                        <p class="font-semibold text-base md:text-lg lg:text-xl text-gray-700">Rp 15.999.000</p>
                    </div>
                    <div class="flex space-x-4">
                        <button type="button" class="bg-indigo-500 rounded-lg text-white font-medium py-2 w-1/2">
                            Beli
                        </button>
                        <button type="button"
                            class="bg-pink-500 rounded-lg px-4 py-2 w-1/2 flex text-white font-medium space-x-2 items-center">
                            <i class="material-icons text-sm">add</i>
                            <p>Keranjang</p>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="flex flex-col" x-ref="deskripsi">
                <div class="flex space-x-4 md:space-x-6 lg:space-x-8 border-b sticky top-[3rem] md:top-[4rem] bg-white">
                    <button type="button" class="text-sky-500 border-b border-sky-500 py-4" @click="desScroll">Deskripsi</button>
                    <button type="button" @click="ulasanScroll">Ulasan</button>
                    <button>Diskusi</button>
                </div>
                <div class="py-4 top-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam esse nam pariatur dolorem beatae
                        nulla. Quia laboriosam ullam dolorum quidem aut sunt repellendus eligendi, voluptates odit
                        consequuntur incidunt nam suscipit. Veritatis deserunt assumenda molestias corrupti temporibus
                        similique odio inventore ab dicta vitae. Sit vel dolore voluptatibus corrupti exercitationem autem
                        ipsam?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi minima amet dignissimos reiciendis
                        ab, at maiores cupiditate dolore perferendis, non similique quidem nisi asperiores iure? Consectetur
                        itaque impedit sit ut?</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos reiciendis doloremque id possimus earum quae perspiciatis tenetur cumque odit consectetur eos libero repudiandae, dolore, iste magni similique perferendis quam quibusdam dicta veritatis mollitia. Placeat suscipit animi alias blanditiis consequatur! Nemo!</p>
                </div>

                {{-- Ulasan --}}
                <div class="flex flex-col space-y-6 py-2" x-ref="ulasan">
                    <p class="text-base md:text-lg font-semibold">Ulasan</p>
                    <div class="flex space-x-4 md:space-x-8 lg:space-x-10">
                        <div class="flex flex-col items-center">
                            <div class="flex items-end space-x-2">
                                <p class="font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-5xl">4.8</p>
                                <p class="text-gray-500">/5</p>
                            </div>
                            <div class="flex">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                            </div>
                            <p class="text-xs md:text-sm text-gray-500">120 Ulasan</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <p class="text-sm">5</p>
                                    <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                </div>
                                <div class="rounded w-40 h-1 bg-gray-300">
                                    <div class="rounded w-32 h-1 bg-yellow-500"></div>
                                </div>
                                <p class="text-sm">110</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <p class="text-sm">4</p>
                                    <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                </div>
                                <div class="rounded w-40 h-1 bg-gray-300">
                                    <div class="rounded w-10 h-1 bg-yellow-500"></div>
                                </div>
                                <p class="text-sm">8</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <p class="text-sm">3</p>
                                    <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                </div>
                                <div class="rounded w-40 h-1 bg-gray-300">
                                    <div class="rounded w-4 h-1 bg-yellow-500"></div>
                                </div>
                                <p class="text-sm">2</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <p class="text-sm">2</p>
                                    <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                </div>
                                <div class="rounded w-40 h-1 bg-gray-300">
                                    <div class="rounded w-32 h-1 bg-gray-300"></div>
                                </div>
                                <p class="text-sm">0</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <p class="text-sm">1</p>
                                    <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                </div>
                                <div class="rounded w-40 h-1 bg-gray-300">
                                    <div class="rounded w-32 h-1 bg-gray-300"></div>
                                </div>
                                <p class="text-sm">0</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row w-full space-x-0 md:space-x-8 space-y-2 md:space-y-0">
                        <p class="text-gray-600 font-medium">Filter</p>
                        <div class="flex flex-col md:flex-row space-x-0 md:space-x-4 space-y-2 md:space-y-0">
                            <div class="text-gray-800 rounded-lg text-sm py-1 font-medium border border-gray-300 px-4 w-fit">
                                Dengan Foto</div>
                            <div
                                class="flex text-gray-800 rounded-lg text-sm py-1 font-medium border border-gray-300 px-4 w-fit">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <p>5</p>
                            </div>
                            <div
                                class="flex text-gray-800 rounded-lg text-sm py-1 font-medium border border-gray-300 px-4 w-fit">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <p>4</p>
                            </div>
                            <div
                                class="flex text-gray-800 rounded-lg text-sm py-1 font-medium border border-gray-300 px-4 w-fit">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <p>3</p>
                            </div>
                            <div
                                class="flex text-gray-800 rounded-lg text-sm py-1 font-medium border border-gray-300 px-4 w-fit">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <p>2</p>
                            </div>
                            <div
                                class="flex text-gray-800 rounded-lg text-sm py-1 font-medium border border-gray-300 px-4 w-fit">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <p>1</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-col space-y-2">
                            <div class="flex">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                            </div>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                impedit beatae ullam quasi explicabo ex cumque suscipit soluta odio sint</p>
                            <div class="flex items-center text-gray-500 text-xs space-x-2">
                                <p>11 Juli 2022</p>
                                <p>|</p>
                                <p>Raisa</p>
                            </div>
                        </div>
                        <hr>
                        <div class="flex flex-col space-y-2">
                            <div class="flex">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-gray-300 text-[14pt]">star</i>
                            </div>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                impedit beatae ullam quasi explicabo ex cumque suscipit soluta odio sint</p>
                            <div class="flex items-center text-gray-500 text-xs space-x-2">
                                <p>11 Juli 2022</p>
                                <p>|</p>
                                <p>Shaira</p>
                            </div>
                        </div>
                        <hr>
                        <div class="flex flex-col space-y-2">
                            <div class="flex">
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                                <i class="material-icons text-yellow-500 text-[14pt]">star</i>
                            </div>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                impedit beatae ullam quasi explicabo ex cumque suscipit soluta odio sint</p>
                            <div class="flex items-center text-gray-500 text-xs space-x-2">
                                <p>11 Juli 2022</p>
                                <p>|</p>
                                <p>Parker</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var main = new Splide('#main-carousel', {
                type: 'fade',
                rewind: true,
                pagination: false,
                arrows: false,
            });


            var thumbnails = new Splide('#thumbnail-carousel', {
                fixedWidth: 100,
                gap: 10,
                rewind: true,
                pagination: false,
                isNavigation: true,
                breakpoints: {
                    600: {
                        fixedWidth: 60
                    },
                },
            });


            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();
        });

        document.addEventListener('alpine:init', () => {

            const options = {
                block: 'start',
                behavior: 'smooth',
                inline: 'start',
            };
            Alpine.data('detailProduct', () => ({
                ulasanScroll() {
                    let u = this.$refs.ulasan
                    u.style.top="2rem"
                    u.scrollIntoView(options)
                },
                desScroll() {
                    let d = this.$refs.deskripsi
                    
                    d.scrollIntoView(options)
                }
            }))
        })
    </script>
@endsection
