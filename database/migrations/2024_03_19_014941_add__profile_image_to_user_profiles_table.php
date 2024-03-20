<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileImageToUserProfilesTable extends Migration
{
    // プロフィール画像を保存するためのカラム追加
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->string('profile_image')->nullable()->after('sns');
        });
    }
    // その逆操作
    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropColumn('profile_image');
        });
    }
}
