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
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('world_id')->unsigned()->nullable();
            $table->foreign('world_id')->references('id')->on('worlds')->onUpdate('cascade')->onDelete('set null');
            $table->string('name')->unique();
            $table->string('location')->nullable();
            $table->boolean('solo')->default(false);
            $table->tinyInteger('reputation')->default(0);
            $table->integer('price_modifier')->default(0);
            $table->integer('donated_gold')->default(0);
            $table->tinyInteger('prosperity_city_level')->default(1);
            $table->tinyInteger('prosperity_checkmarks')->default(0);
            $table->longText('notes')->nullable();
            $table->bigInteger('campaign_id')->unsigned()->nullable();
            $table->foreign('campaign_id')->references('id')->on('campaign')->onUpdate('cascade')->onDelete('set null');
            // TODO add the characters ID(s) as a set value.
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
