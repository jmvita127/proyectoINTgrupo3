<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CampoTimestampUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::table('Users', function (Blueprint $table) {
        $table->dropColumn('avatar');
      });

      Schema::table('Users', function (Blueprint $table) {
          $table->timestamps();
          $table->string('sec_question', 100)->nullable();
          $table->string('sec_answer', 100)->nullable();
          $table->string('avatar', 255)->nullable();

      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('Users', function (Blueprint $table) {
          $table->dropColumn('created_at', 'updated_at');
          $table->dropColumn('sec_answer', 'sec_question', 'avatar');

      });
    }
}
