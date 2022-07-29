@extends('layouts.frontsite')

@section('title')
    Register
@endsection

@section('content')
    <div class="bg-white rounded-xl p-2 md:p-4 lg:p-6 shadow-sm drop-shadow-md">
        <div class="flex space-x-0 md:space-x-8 lg:space-x-10 px-4 md:px-10">
            <div class="hidden md:block w-1/2">
                <img src="{{ secure_asset('assets/images/FridayOnline-Shopping.png') }}" />
            </div>
            <div class="w-full md:w-1/2 flex flex-col space-y-4 md:space-y-6 items-center">
                <p class="text-indigo-800 font-bold text-lg sm:text-xl md:text-2xl lg:text-3xl">Daftar di Lapakita</p>
                <div class="bg-white shadow drop-shadow rounded-xl w-full">
                    <form class="p-4 flex flex-col space-y-4" method="POST" action="{{ url('register') }}">
                        @csrf
                        <div class="flex flex-col">
                            <label class="text-gray-700 text-xs md:text-[10pt] font-medium">Nama Lengkap</label>
                            <input type="text" name="name"
                                class="bg-gray-100 rounded-xl py-2 md:py-3 px-4 outline-none ring-1 ring-transparent focus:ring-indigo-500"
                                placeholder="Nama Lengkap" />
                            @error('name')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-gray-700 text-xs md:text-[10pt] font-medium">Email</label>
                            <input type="text" name="email"
                                class="bg-gray-100 rounded-xl py-2 md:py-3 px-4 outline-none ring-1 ring-transparent focus:ring-indigo-500"
                                placeholder="Email" />
                            @error('email')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-gray-700 text-xs md:text-[10pt] font-medium">Password</label>
                            <input type="password" name="password"
                                class="bg-gray-100 rounded-xl py-2 md:py-3 px-4 outline-none ring-1 ring-transparent focus:ring-indigo-500"
                                placeholder="Password" />
                            @error('password')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-gray-700 text-xs md:text-[10pt] font-medium">Password Confirmation</label>
                            <input type="password" name="password_confirmation"
                                class="bg-gray-100 rounded-xl py-2 md:py-3 px-4 outline-none ring-1 ring-transparent focus:ring-indigo-500"
                                placeholder="Password" />
                            @error('password_confirmation')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex space-x-1">
                            <input type="checkbox" class="border" />
                            <p class="text-[10pt] md:text-xs text-gray-500">Dengan mencentang ini, kamu menyetujui</p>
                            <p class="text-[10pt] md:text-xs text-sky-500">Syarat & Ketentuan</p>
                            <p class="text-[10pt] md:text-xs text-gray-500">kami.</p>
                        </div>
                        <button type="submit" class="bg-gray-100 rounded-xl text-gray-700 font-semibold py-2">
                            Daftar
                        </button>
                    </form>
                </div>
                <div class="flex space-x-2">
                    <p class="text-xs md:text-sm text-gray-600">Sudah punya akun ?</p>
                    <a href="{{ route('frontsite.login') }}" class="text-xs md:text-sm text-sky-600">Masuk</a>
                </div>
            </div>
        </div>
    </div>
@endsection
