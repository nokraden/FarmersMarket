<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('user_id');
			$table->string('created_at');
			$table->string('updated_at');
			$table->string('name');
			$table->string('comments');
			$table->string('image');
			$table->string('website');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->string('zipcode');
			$table->string('latitude');
			$table->string('longitude');
			$table->string('start');
			$table->string('end');
			$table->string('approved');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markets');
    }
}
