@extends('layouts.frontsite')

@section('title')
    Profile
@endsection

@section('content')
    <div class="flex flex-col md:flex-row my-4 md:my-6 space-x-0 md:space-x-6" x-data="{ profile: true, pesanan: false, pengembalian: false }">
        <div class="flex flex-col h-fit bg-white rounded-lg shadow drop-shadow w-1/5">
            <div class="flex flex-col">
                <div class="flex space-x-2 p-4">
                    <img src="{{ secure_asset('assets/images/faces/2.jpg') }}" class="rounded-xl h-6 md:h-10" />
                    <div class="flex flex-col">
                        <p class="font-medium text-indigo-600">Parker Canon</p>
                        <p class="text-xs text-gray-600">Classic Member</p>
                    </div>
                </div>
                <hr>
                <div class="flex flex-col text-sm py-2">
                    <div :class="profile ? 'border-indigo-500' : 'border-transparent'"
                        @click="profile = true, pesanan = false, pengembalian = false"
                        class="cursor-pointer border-l-4 px-4 py-3">
                        <p :class="profile ? 'text-indigo-500' : ''">Profile</p>
                    </div>
                    <hr>
                    <div :class="pesanan ? 'border-indigo-500' : 'border-transparent'"
                        @click="pesanan = true, profile = false, pengembalian = false"
                        class="cursor-pointer border-l-4 px-4 py-3">
                        <p :class="pesanan ? 'text-indigo-500' : ''">Daftar Pesanan</p>
                    </div>
                    <hr>
                    <div :class="pengembalian ? 'border-indigo-500' : 'border-transparent'"
                        @click="pengembalian = true, profile = false, pesanan = false"
                        class="cursor-pointer border-l-4 px-4 py-3">
                        <p :class="pengembalian ? 'text-indigo-500' : ''">Pengembalian</p>
                    </div>
                    <hr>
                    <div class="border-l-4 border-transparent px-4 py-3">
                        <p>Chat</p>
                    </div>
                    <hr>
                    <div class="border-l-4 border-transparent px-4 py-3">
                        <p>Wishlist</p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <div class="w-4/5 flex flex-col space-y-4">
            <div x-show="profile" class="flex flex-col space-y-4">
                <p class="text-lg md:text-xl lg:text-2xl font-semibold">Akun</p>
                <div class="flex flex-col bg-white shadow drop-shadow rounded-xl space-y-2">
                    <p class="font-medium text-indigo-800 p-4">Profil</p>
                    <hr>
                    <div class="flex flex-col p-4 space-y-4">
                        <div
                            class="flex flex-col bg-gray-50 rounded-2xl px-4 py-2 w-2/3 ring-2 ring-gray-200 focus-within:ring-sky-500">
                            <label class="text-xs text-sky-700">Nama Lengkap</label>
                            <input type="text" class="outline-none bg-gray-50" placeholder="Nama Lengkap" />
                        </div>
                        <div
                            class="flex flex-col bg-gray-50 rounded-2xl px-4 py-2 w-2/3 ring-2 ring-gray-200 focus-within:ring-sky-500">
                            <label class="text-xs text-sky-700">Email</label>
                            <input type="text" class="outline-none bg-gray-50" placeholder="Email" />
                        </div>
                        <div
                            class="flex flex-col bg-gray-50 rounded-2xl px-4 py-2 w-2/3 ring-2 ring-gray-200 focus-within:ring-sky-500">
                            <label class="text-xs text-sky-700">Password</label>
                            <input type="text" class="outline-none bg-gray-50" placeholder="Password" />
                        </div>
                        <div
                            class="flex flex-col bg-gray-50 rounded-2xl px-4 py-2 w-2/3 ring-2 ring-gray-200 focus-within:ring-sky-500">
                            <label class="text-xs text-sky-700">Nomor HP</label>
                            <input type="text" class="outline-none bg-gray-50" placeholder="Nomor HP" />
                        </div>
                        <div
                            class="flex flex-col bg-gray-50 rounded-2xl px-4 py-2 w-2/3 ring-2 ring-gray-200 focus-within:ring-sky-500">
                            <label class="text-xs text-sky-700">Tanggal Lahir</label>
                            <input type="date" class="outline-none bg-gray-50" placeholder="Password" />
                        </div>
                        <div class="flex flex-col w-full">
                            <p class="text-base text-gray-700 font-medium">Jenis Kelamin</p>
                            <div class="flex space-x-4 items-center">
                                <div class="flex items-center space-x-1">
                                    <input type="radio" name="gender" class="bg-gray-50" />
                                    <label>Laki-laki</label>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <input type="radio" name="gender" class="bg-gray-50" />
                                    <label>Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <button class="bg-gray-100 rounded-2xl py-4 px-6 font-medium text-gray-500 w-fit">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="pesanan" class="flex flex-col space-y-4">
                <p class="text-lg md:text-xl lg:text-2xl font-semibold">Pesanan</p>
                <div class="flex flex-col bg-white shadow drop-shadow rounded-xl space-y-2" x-data="{ retail: true, tagihan: false }">
                    <div class="flex border-b">
                        <button type="button" class="font-medium p-4 border-b"
                            :class="retail ? 'text-indigo-800 border-indigo-500' : 'text-gray-600 border-transparent'"
                            @click="retail = true, tagihan = false">Retail</button>
                        <button type="button" class="font-medium p-4 border-b"
                            :class="tagihan ? 'text-indigo-800 border-indigo-500' : 'text-gray-600 border-transparent'"
                            @click="retail = false, tagihan = true">Tagihan & Isi Ulang</button>
                    </div>
                    <div class="flex flex-col p-4">
                        <div class="flex space-x-4 text-sm">
                            <div class="rounded-xl px-4 py-2"
                                :class="retail ? 'bg-indigo-500 text-white' : 'bg-gray-100 text-indigo-500'">Saat ini</div>
                            <div class="bg-gray-100 rounded-xl px-4 py-2 text-indigo-500">Selesai</div>
                            <div class="bg-gray-100 rounded-xl px-4 py-2 text-indigo-500">Dibatalkan</div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-show="pengembalian" class="flex flex-col space-y-4">
                <p class="text-lg md:text-xl lg:text-2xl font-semibold">Pengembalian produk</p>
                <div class="flex flex-col bg-white shadow drop-shadow rounded-xl space-y-2" x-data="{ proses: true, selesai: false, batal: false }">
                    <div class="flex border-b">
                        <button type="button" class="font-medium p-4 border-b"
                            :class="proses ? 'text-indigo-800 border-indigo-500' : 'text-gray-600 border-transparent'"
                            @click="proses = true, selesai = false, batal= false">Sedang diproses</button>
                        <button type="button" class="font-medium p-4 border-b"
                            :class="selesai ? 'text-indigo-800 border-indigo-500' : 'text-gray-600 border-transparent'"
                            @click="proses = false, selesai = true, batal= false">Selesai</button>
                        <button type="button" class="font-medium p-4 border-b"
                            :class="batal ? 'text-indigo-800 border-indigo-500' : 'text-gray-600 border-transparent'"
                            @click="proses = false, batal = true, selesai= false">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
