<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftsModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('item_name', 80);
            $table->float('price');
            $table->boolean('bought')->default(false);
            $table->foreignId("friend_id")
            ->constrained()
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gift_models');
    }
}
