<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->string('lastname', 40)->comment('姓');
            $table->string('firstname', 40)->comment('名');
            $table->string('lastname_kana', 50)->comment('セイ');
            $table->string('firstname_kana', 50)->comment('メイ');
            $table->string('employee_photo_path')->nullable()->comment('従業員写真');
            $table->date('birth')->nullable()->comment('生年月日');
            $table->string('gender', 10)->nullable()->comment('性別');
            $table->string('zipcode', 10)->comment('郵便番号');
            $table->string('address1', 20)->comment('都道府県名');
            $table->string('address2', 30)->comment('市区町村名');
            $table->string('address3', 50)->comment('町域名');
            $table->string('address4', 100)->comment('それ以降の住所');
            $table->string('phone_number', 20)->comment('電話番号');
            $table->string('mobile_number', 20)->comment('緊急連絡先');
            $table->string('website')->nullable()->comment('URL');
            $table->string('facebook')->nullable()->comment('Facebook URL');
            $table->string('twitter')->nullable()->comment('Twitter URL');
            $table->string('instagram')->nullable()->comment('Instagram URL');
            $table->string('youtube')->nullable()->comment('YouTube URL');
            $table->string('line')->nullable()->comment('LINE URL');
            $table->string('employee_no')->nullable()->comment('社員ID');
            $table->string('role', 20)->nullable()->comment('正社員, パート, アルバイト');
            $table->string('serial_no')->nullable()->comment('シリアルナンバー');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_profiles');
    }
};
