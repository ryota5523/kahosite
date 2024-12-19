<?php

namespace App\Http\Controllers;

use Symfony\Component\Panther\Client;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function scrapeBlog()
    {
        // Pantherを使ってブラウザを開く
        $client = Client::createChromeClient(null, [
            '--headless',
            '--disable-gpu',
            '--no-sandbox',
            '--remote-debugging-port=9223',
        ]);
        
        // 目的のURLにリクエスト
        $url = 'https://www.hinatazaka46.com/s/official/diary/member/list?ima=0000&page=0&ct=33&cd=member';
        $crawler = $client->request('GET', $url);

        // ブログの記事の写真、タイトル、日付、URLを取得
        $results = [];

        $crawler->filter('.p-blog-article')->each(function ($node) use (&$results) {
            try {
                // タイトル
                $title = $node->filter('.c-blog-article__title')->text();

                // 日付
                $date = $node->filter('.c-blog-article__date')->text();

                // 写真（画像のURL）
                $image = $node->filter('.c-blog-article__text img')->attr('src');

                // c-button-blog-detail の URL
                $url = $node->filter('.c-button-blog-detail')->attr('href');
                $baseUrl = 'https://www.hinatazaka46.com';  // ベースURLを指定
                $fullUrl = $baseUrl . $url;  // 相対URLを絶対URLに変換

                // データを配列に格納
                $results[] = [
                    'title' => $title,
                    'date' => $date,
                    'image' => $image,
                    'url' => $fullUrl,  // 追加したURLを格納
                ];
            } catch (\Exception $e) {
                // 要素が見つからなかった場合はスキップ
            }
        });

        // データベースに保存する
        foreach ($results as $blog) {
    // SQLiteに保存
    Blog::updateOrCreate(
        ['url' => $blog['url']], // URLで重複をチェック
        [
            'title' => $blog['title'],
            'image' => $blog['image'],
            'date' => $blog['date']
        ]
    );
}

        // キャッシュに保存
        Cache::put('blogs', $results, now()->addMinutes(10)); // キャッシュを10分間保存

        return redirect()->route('showBlog');
    }
    public function showBlog()
    {
        // キャッシュを使用しないで、DBから直接取得
        $blogs = Blog::orderBy('date', 'desc')->paginate(10)->onEachSide(3);
    
        // データをビューに渡す
        return view('home.blog', ['blogs' => $blogs]);
    }
}