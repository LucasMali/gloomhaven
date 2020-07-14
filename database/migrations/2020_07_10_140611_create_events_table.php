<?php

use App\Classes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use PhpParser\Builder\Class_;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('condition');
            $table->bigInteger('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('events')->insert(
            [
                'condition' => 'When this class is unlocked, add city and road event cards N/A.',
                'class_id' => Classes::INOX_BRUTE
            ],
            [
                'condition' => 'When this class has retired for the first time, add city and road event cards #42.',
                'class_id' => Classes::INOX_BRUTE
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
