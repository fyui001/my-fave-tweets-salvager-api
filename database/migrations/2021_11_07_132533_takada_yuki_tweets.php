<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Libs\BlueprintTrait;

class TakadaYukiTweets extends Migration
{
    use BlueprintTrait;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takada_yuki_tweets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_name')->comment('アカウント名');
            $table->string('tweet_id')->unique('tweet_id_unique')->comment('ツイートID');
            $table->string('tweet_url')->comment('ツイートURL');
            $this->dateTimes($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takada_yuki_tweets');
    }
}