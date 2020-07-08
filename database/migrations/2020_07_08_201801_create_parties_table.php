<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
        });

        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('name')->unique();
            $table->string('location');
            $table->boolean('solo')->default(false);
            $table->tinyInteger('reputation')->default(0);
            $table->integer('price_modifier')->default(0);
            $table->integer('donated_gold')->default(0);
            $table->tinyInteger('prosperity_city_level')->default(1);
            $table->tinyInteger('prosperity_checkmarks')->default(0);
            $table->longText('notes');
            $table->bigInteger('campaign_id')->unsigned();
            $table->foreign('campaign_id')->references('id')->on('campaign');
        });

        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->boolean('achieved');
            $table->bigInteger('party_id')->unsigned();
            $table->bigInteger('campaign_id')->unsigned();
            $table->foreign('party_id')->references('id')->on('parties')->onDelete('cascade');
            $table->foreign('campaign_id')->references('id')->on('campaign')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parties');
    }
}
