<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // user_id カラムを追加（外部キー制約も付与していますが、必要に応じて変更・削除してください）
            $table->unsignedBigInteger('user_id')->after('id'); // 'id' カラムの後ろに追加
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('user_id'); // ロールバック時の処理
        });
    }
};
