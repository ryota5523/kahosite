@extends('layouts.app')

@section('content')
<div class="w-screen pt-14">
    <img src="/src/schedule.png" alt="" class="lg:w-1/2 lg:mx-auto">
</div>

<div class="p-6 w-screen">
    <div class="mx-auto lg:w-1/2">
        <!-- 年月表示 -->
        <h2 class="text-3xl font-semibold text-center text-blue-400 mb-6">{{ $currentMonth }}</h2>

        <!-- 各スケジュールの表示 -->
        @foreach ($scheduleData as $schedule)
            <div class="mt-4 bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <!-- 日付と時間を横並びに表示 -->
                    <p class="text-2xl font-semibold text-blue-300 mr-4">{{ $schedule['date'] }}日</p>
                    <p class="text-lg text-gray-500">{{ $schedule['time'] }}</p> <!-- 時間 -->
                </div>
                <p class="text-lg text-gray-600 mt-2">{{ $schedule['title'] }}</p> <!-- タイトル -->
            </div>
        @endforeach
    </div>
</div>
@endsection
