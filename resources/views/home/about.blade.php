@extends('layouts.app')
@section('content')

<div class="pt-14 w-screen">
    <img src="/src/about.png" alt="" class="lg:w-1/2 lg:mx-auto">
</div>
<div class="p-6 w-screen">
    <div class="mx-auto lg:w-1/2">
        <!-- サイト紹介 -->
        <div class="pt-3">
            <h1 class="text-blue-300 text-center text-3xl mb-2">About Kahosite</h1>
            <div class="text-gray-400">日向坂46四期生の藤嶌果歩ちゃんを応援する非公式ファンサイトです。</div>
        </div>

        <!-- 運用方針 -->
        <div class="pt-3">
            <h1 class="text-blue-300 text-center text-3xl mb-2">運用方針</h1>
            <div class="text-gray-400">
                <p>当サイトは、藤嶌果歩ちゃんのファンが集まり、応援の気持ちを共有するために運営されています。</p>
                <p>サイト内で使用する画像や動画等は、全て非公式なものであり、本人または事務所とは関係ありません。</p>
                <p>個人情報やプライバシーに関する配慮を大切にし、他のファンの方々と共にポジティブな交流を目指します。</p>
                <p>何か問題が発生した場合は、お問い合わせページからご連絡ください。</p>
            </div>
        </div>

        <!-- 免責事項 -->
        <div class="pt-3">
            <h1 class="text-blue-300 text-center text-3xl mb-2">免責事項</h1>
            <div class="text-gray-400">
                <p>当サイトに掲載されている情報は、正確性を期すよう努めていますが、必ずしも正確性を保証するものではありません。</p>
                <p>リンク先のサイトの内容については一切責任を負いませんので、各自でご確認の上、自己責任でご利用ください。</p>
            </div>
        </div>

        <!-- お問い合わせ -->
        <div class="pt-3">
            <h1 class="text-blue-300 text-center text-3xl mb-2">お問い合わせ</h1>
            <div class="text-gray-400">
                <p>当サイトについてのお問い合わせやご意見は、お気軽に以下の方法でご連絡ください。</p>
                <ul>
                    <li>Twitter: <a href="https://twitter.com/kahosite" class="text-blue-400">@kahosite</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
