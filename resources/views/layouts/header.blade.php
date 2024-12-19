<div class="px-6 h-14 fixed bg-white w-screen border-b-2 border-blue-300 z-50 top-0">
    <nav class="lg:w-1/2 justify-between flex mx-auto">
        <a href="{{ url('/')}}">
            <img src="src//logo.png" alt="" class="w-64 fixed text-left top-2">
        </a>
        <ul class="text-right text-xl font-bold text-blue-400 top-4 hidden md:block">
            <li class="p-3 inline-block"><a href="{{ url('/profile') }}">PROFILE</a></li>
            <li class="p-3 inline-block"><a href="{{ url('/blog') }}">BLOG</a></li>
            <li class="p-3 inline-block"><a href="{{ url('/about') }}">ABOUT</a></li>
        </ul>
        <button id="button" type="button" class="fixed right-6 z-10 top-3 md:hidden">
            <i id="bars" class="fa-solid fa-bars fa-2x text-blue-300"></i>
            <i id="xmark" class="fa-solid fa-xmark fa-2x hidden text-white"></i>
        </button>
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