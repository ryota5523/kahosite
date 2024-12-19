@extends('layouts/top')
@section('content')
<div class="">
    <nav class="lg:w-1/2 justify-between flex mx-auto">
        <!-- メニューボタン -->
        <button id="button" type="button" class="fixed right-6 z-10 top-3 md:hidden">
            <i id="bars" class="fa-solid fa-bars fa-2x text-white"></i>
            <i id="xmark" class="fa-solid fa-xmark fa-2x hidden text-white"></i>
        </button>
        
        <!-- メニューリスト -->
        <ul id="menu" class="fixed top-0 left-0 z-0 w-full h-full translate-x-full bg-blue-300/90 text-center text-xl font-bold text-white transition-all ease-linear">
            <li class="p-3"><a href="{{ url('/profile') }}">PROFILE</a></li>
            <li class="p-3"><a href="{{ url('/blog') }}">BLOG</a></li>
            <li class="p-3"><a href="{{ url('/about') }}">ABOUT</a></li>
            <li class="p-3"><a href="{{ url('https://store.plusmember.jp/hinatazaka46/products/list.php?name=%E8%97%A4%E5%B6%8C')}}" target="_blank">SHOP</a></li>
            <li class="p-3"><a href="{{ url('/schedule') }}">SCHEDULE</a></li>
        </ul>
    </nav>
    
</div>
<script src="{{ asset('/js/app.js') }}"></script>
<div class="w-screen">
    <img src="/src/top.webp" alt="" class="lg:w-1/2 lg:mx-auto">
</div>
<div class="p-6 w-screen">
    <div class="mx-auto lg:w-1/2 list-none">
        <p class="text-center text-blue-400 font-bold text-sm mb-2">オンライン</p>
        <ul class="leading-relaxed text-blue-400 flex flex-wrap justify-between text-center text-xs font-thin">
            <li class="mb-1">
                <a href="{{ asset('/profile')}}" class="hover:opacity-80">
                <img src="/src/1.webp" alt="" class="w-24 h-24 rounded-full mb-1">
                    PROFILE
                </a>
            </li>
            <li class="">
                <a href="{{ asset('/blog')}}" class="hover:opacity-80">
                <img src="/src/2.webp" alt="" class="w-24 h-24 rounded-full mb-1">
                    BLOG
                </a>
            </li>
            <li class="">
                <a href="{{ asset('https://store.plusmember.jp/hinatazaka46/products/list.php?name=%E8%97%A4%E5%B6%8C')}}" target="_blank" class="hover:opacity-80">
                <img src="/src/3.webp" alt="" class="w-24 h-24 rounded-full mb-1">
                    SHOP
                </a>    
            </li>
        </ul>
    </div>
    <div class="mx-auto lg:w-1/2 list-none mt-6">
        <ul class="leading-relaxed text-blue-400 flex flex-wrap justify-between text-center text-xs font-thin">
            <li class="">
                <a href="{{ asset('/schedule')}}" class="hover:opacity-80">
                <img src="/src/4.webp" alt="" class="w-24 h-24 rounded-full mb-1">
                    SCHEDULE
                </a>
            </li>
            <li class="">
                <a href="{{ asset('/about')}}" class="hover:opacity-80">
                <img src="/src/5.webp" alt="" class="w-24 h-24 rounded-full mb-1">
                    ABOUT
                </a>
            </li>
            <li class="opacity-0">
                <img src="" alt="" class="w-24 h-24 sm:w-24 sm:h-24 rounded-full mb-1">
                PLACEHOLDER
            </li>
        </ul>
    </div>

    <div class="mx-auto lg:w-1/2 list-none border-t my-2 py-2">
        <p class="text-center text-blue-400 font-bold text-sm">他ファンサイト</p>
        <ul class="leading-relaxed text-blue-400 flex flex-wrap justify-between text-center text-xs font-thin">
            <li class="">
                <a href="{{ asset('https://www.shihonet.site/')}}" class="hover:opacity-80" target="blank">
                <img src="/src/shihonet.png" alt="" class="w-24 h-24 rounded-full mb-1">
                    #shihonet
                </a>
            </li>
            <li class="">
                <a href="{{ asset('https://nibupage.wixsite.com/mysite')}}" class="hover:opacity-80" target="blank">
                <img src="/src/nibupage.jpg" alt="" class="w-24 h-24 rounded-full mb-1">
                    #nibupage
                </a>
            </li>
            <li class="">
                <a href="{{ asset('https://kyonkosite95.wixsite.com/kyonkosite')}}" class="hover:opacity-80" target="blank">
                <img src="/src/kyonkosite.jpg" alt="" class="w-24 h-24 rounded-full mb-1">
                    #kyonkosite
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
@endsection