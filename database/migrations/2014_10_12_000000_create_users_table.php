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

        Schema::create('User', function (Blueprint $table) {
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
            //$table->string('purchases_id');
            //$table->string('sec_question_id', 100);

        });

        Schema::create('Product', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name');
            $table->decimal('price', 20, 2)->default(0); //valor por defecto
            $table->string('description')->nullable();
            $table->unsignedInteger('stock')->default(0);
            $table->timestamps();
        });

        Schema::create('Cart', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedInteger('quantity');
            $table->timestamps();
            // $table->unsignedInteger('user_id');
            // $table->unsignedInteger('product_id');
        });





        Schema::create('Cart_Purchases', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('price');
            $table->unsignedInteger('quantity');
            $table->timestamps();
            // $table->string('purchase_id');
            // $table->string('product_id');

                });

        Schema::create('Cart_detail', function (Blueprint $table) {
                    $table->BigIncrements('id');
                    $table->unsignedInteger('State');
                    $table->timestamps();
                });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('User');
        Schema::dropIfExists('Product');
        Schema::dropIfExists('Cart');
        Schema::dropIfExists('Cart_Purchases');
        Schema::dropIfExists('Cart_detail');

    }
}
