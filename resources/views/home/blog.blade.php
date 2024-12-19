@extends('layouts/app')

@section('content')
<div class="pt-14 w-screen">
    <img src="/src/blog.png" alt="Blog Image" class="lg:w-1/2 lg:mx-auto">
</div>
<div class="px-6 w-screen">
    <div class="mx-auto lg:w-1/2">
        <div class="pt-3">
            <ul class="pb-6">
                @foreach ($blogs as $blog)
                    <li class="p-3 mb-4 bg-white rounded-xl">
                        <a href="{{ $blog->url }}" class="flex" target="blank">
                            <img src="{{ $blog->image }}" alt="Blog Image" class="rounded-xl w-16 h-16 object-cover" loading="lazy">
                            <div class="mt-2 ml-3">
                                <p class="text-base text-blue-400">{{ $blog->date }}</p>
                                <p class="text-lg text-gray-700">{{ $blog->title }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
                <div class="flex justify-center mt-6">
                    {{ $blogs->links() }}
                </div>
            </ul>
            <!-- ページネーションのリンク -->
        </div>
    </div>
</div>
@endsection
