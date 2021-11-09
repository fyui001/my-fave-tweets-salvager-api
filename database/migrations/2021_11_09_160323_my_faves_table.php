<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Libs\BlueprintTrait;

class MyFavesTable extends Migration
{
  use BlueprintTrait;

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('my_faves', function (Blueprint $table) {
          $table->bigIncrements('id')->comment('ID');
          $table->string('name')->comment('名前')->unique('name_unique');
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
      Schema::dropIfExists('my_faves');
  }
}
