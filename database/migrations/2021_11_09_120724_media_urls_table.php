<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Libs\BlueprintTrait;

class MediaUrlsTable extends Migration
{
    use BlueprintTrait;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_urls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tweet_id')->comment('ツイートID');
            $table->string('media_key')->unique('media_key_unique')->comment('メディアキー');
            $table->string('url')->unique('url_unique')->comment('リンク');
            $table->string('media_type')->comment('形式');
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
        Schema::dropIfExists('media_urls');
    }
}
