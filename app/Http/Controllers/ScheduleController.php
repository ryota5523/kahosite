<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Symfony\Component\Panther\Client;

class ScheduleController extends Controller
{
    public function scrapeSchedule()
    {
        // Pantherを使ってブラウザを開く（ポート番号を変更）
        $client = Client::createChromeClient(null, [
            '--headless',
            '--disable-gpu',
            '--no-sandbox',
            '--remote-debugging-port=9222', // 9515以外のポート番号に変更
        ]);

        // 現在の年月を取得（例: 202412）
        $currentMonth = Carbon::now()->format('Ym'); 
        $currentMonthFormatted = Carbon::now()->format('Y年m月'); // '2024年12月' の形式で取得

        // 目的のURLにリクエスト
        $url = "https://www.hinatazaka46.com/s/official/media/list?ima=0000&list[]=33&dy={$currentMonth}";
        $crawler = $client->request('GET', $url);

        // ページが完全に読み込まれるまで待機
        $client->waitFor('.p-schedule__list-group');

        // 年月、日付、タイトルを取得
        $results = [];

        // すべてのスケジュールを取得
        $crawler->filter('.p-schedule__list-group')->each(function ($node) use (&$results) {
            // 日付を取得（例: 2024年12月1日）
            $dateText = $node->filter('span')->text();

            // 時間を取得（例: 12:00）
            $time = $node->filter('.c-schedule__time--list')->text();

            // タイトルを取得（イベント名）
            $title = $node->filter('.c-schedule__text')->text();

            // 結果を配列に格納
            $results[] = [
                'date' => $dateText,
                'time' => $time,
                'title' => $title,
            ];
        });

        // デバッグ出力（配列の内容を表示）
        // dd($results);

        // データをビューに渡す
        return view('home.schedule', ['scheduleData' => $results, 'currentMonth' => $currentMonthFormatted]);
    }
}
