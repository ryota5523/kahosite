<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');         // ブログタイトル
            $table->date('date');            // ブログの日付
            $table->string('image');         // 画像URL
            $table->string('url')->unique(); // ブログのURL（重複防止用）
            $table->timestamps();            // 作成日時、更新日時
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
