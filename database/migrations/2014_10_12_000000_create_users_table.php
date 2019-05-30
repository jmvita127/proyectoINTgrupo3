<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('Users', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            $table->string('sec_question', 100);
            $table->string('sec_answer', 100);
            $table->string('avatar', 255);
            $table->tinyInteger('isAdmin')->default(0);
            $table->rememberToken();

        });

        Schema::create('Products', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name', 100);
            $table->decimal('price', 5, 2)->default(0); //valor por defecto
            $table->string('description', 255)->nullable();
            $table->unsignedInteger('stock')->default(0);
            //$table->file('image');
            $table->timestamps();

        });

        Schema::create('Cart', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedInteger('quantity');
            $table->timestamps();
            $table->date('date_purchase');
            //FK
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('user_id')->references('id')->on('Users');
            $table->foreign('product_id')->references('id')->on('Products');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Users');
        Schema::dropIfExists('Products');
        Schema::dropIfExists('Cart');


    }
}
