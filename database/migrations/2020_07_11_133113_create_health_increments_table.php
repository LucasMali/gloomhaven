<?php

use App\Classes;
use App\HealthIncrements;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHealthIncrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_increments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('class_id')->unsigned();
            $table->string('name');
            $table->string('desc');
            $table->tinyInteger('increment')->unsigned()->default(1);
            $table->tinyInteger('nth_level')->unsigned()->default(null)->nullable();
            $table->tinyInteger('nth_increment')->unsigned()->default(null)->nullable();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
        });

        /*
        These will all be many to one. Meaning that duplicate health increments might be assigned to
        one or more classes. This is simply establishing the defaults and will allow a user to modify or
        reassign the health increments as desired.
        */
        DB::table('health_increments')->insert(
            [
                'name'=>'Basic',
                'desc'=>'Increases one health per level gained.',
                'class_id'=>Classes::INOX_BRUTE
            ],
            [
                'name'=>'nth(2) child',
                'desc'=>'Like basic with the exception that health increases by two every second level from the base level rather than one.',
                'nth_level'=>2,
                'nth_increment'=>2,
                'class_id'=>Classes::TINKERER
            ],
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_increments');
    }
}
