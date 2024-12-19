@extends('layouts/app')
@section('content')
<div class="w-screen pt-14">
    <img src="/src/profile.png" alt="" class="lg:w-1/2 lg:mx-auto">
</div>
<div class="px-6 pt-4 w-screen">
    <!-- プロフィール -->
    <div class="mx-auto lg:w-1/2">
        <div class="md:flex md:justify-around">
            <div class="max-w pt-4">
                <img src="https://cdn.hinatazaka46.com/images/14/0a7/035fb647cd649e349d4fa75d4184e/1000_1000_102400.jpg" class="rounded md:h-96 :w-62" alt="">
            </div>
            <div class="mt-4 lg:my-auto">
                <div class="profile">
                    <div class="text-3xl text-left mb-1">
                        藤嶌 果歩
                        <span class="text-sm font-thin">KAHO FUJISIMA</span>
                    </div>
                    <div class="text-left text-xs text-gray-400">ふじしま かほ</div>
                </div>
                <table class="text-left text-blue-300 mt-4 table-auto leading-relaxed">
                    <tbody>
                        <tr>
                            <td class="">生年月日</td>
                            <td class="pl-4 text-gray-700">2006年8月7日</td>
                        </tr>
                        <tr>
                            <td class="">星座</td>
                            <td class="pl-4 text-gray-700">しし座</td>
                        </tr>
                        <tr>
                            <td class="">身長</td>
                            <td class="pl-4 text-gray-700">160.3cm</td>
                        </tr>
                        <tr>
                            <td class="">出身地</td>
                            <td class="pl-4 text-gray-700">北海道</td>
                        </tr>
                        <tr>
                            <td class="">血液型</td>
                            <td class="pl-4 text-gray-700">不明</td>
                        </tr>
                        <tr>
                            <td class="">ペンライトカラー</td>
                            <td class="pl-4 text-gray-700">サクラピンク×ブルー</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 来歴 -->
        <div class="text-left md:block">
            <h1 class="pt-3 text-left font-bold text-3xl text-blue-400 border-b-2 border-blue-400">HISTORY</h1>
            <h1 class="text-gray-400 text-xl py-3">2022年</h1>
            <p class="py-1">・9月21日『日向坂46 新メンバー募集オーディション』に合格</p>
            <div class="relative max-w-screen-lg mx-auto aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/Jwna_0RAXvY?si=YoOLk3aM3BaUapT-" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen 
                        class="w-full h-full"></iframe>
            </div>
            <p class="py-1">・10月26日発売の8thシングル『月と星が踊るMidnight』収録曲『ブルーベリー&ラズベリー』でシングル初参加</p>
            <h1 class="text-gray-400 text-xl py-3">2023年</h1>
            <p class="py-1">・7月26日発売の10thシングル『Am I ready?』収録曲『見たことない魔物』で初センターを務める</p>
            <div class="relative max-w-screen-lg mx-auto aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/PBQwERX7FvQ?si=XAQl4EWD2qC8L5p4" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen 
                        class="w-full h-full"></iframe>
            </div>
            <h1 class="text-gray-400 text-xl py-3">2024年</h1>
            <p class="py-1">・5月8日発売の11thシングル『君はハニーデュー』で初の選抜入りをする</p>
            <div class="relative max-w-screen-lg mx-auto aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/wRzPuptA6yw?si=xX6oc1uH5HbVsMW-" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen 
                        class="w-full h-full"></iframe>
            </div>
            <p class="py-1">・9月18日発売の12thシングル『絶対的第六感』で正源司陽子とのWセンターとして表題曲初センターを務める</p>
            <div class="relative max-w-screen-lg mx-auto aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/qUZagu-NL_s?si=et86ozWNQep_t0Nq" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen 
                        class="w-full h-full"></iframe>
            </div>
        </div>
        <!-- 日向坂ちゃんねるおすすめ動画 -->
        <div class="text-left pt-3 pb-10">
            <h1 class="pt-3 text-left font-bold text-3xl text-blue-400 border-b-2 border-blue-400">RECOMMEND</h1>
            <p class="pt-2">【奈良観光】東村芽依とガチデートしてみたら男前すぎて惚れ直した【めいかほ】</p>
            <div class="relative max-w-screen-lg mx-auto aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/skm91EgciZw?si=YdB0tWZx9NoEyM0y" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen 
                        class="w-full h-full"></iframe>
            </div>
            <p class="pt-2">【見たことない魔物】四期生が自由にコール動画を撮ってみた。</p>
            <div class="relative max-w-screen-lg mx-auto aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/94IJ-zkZeMM?si=bOl8fLrjZCjzBDLc" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen 
                        class="w-full h-full"></iframe>
            </div>
            <p class="pt-2">【のんびり北から】藤嶌果歩さんのきつねダンス【きつねりん降臨】</p>
            <div class="relative max-w-screen-lg mx-auto aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/UJThihts8ao?si=1pYixkyAB5bzro9x" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen 
                        class="w-full h-full"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
