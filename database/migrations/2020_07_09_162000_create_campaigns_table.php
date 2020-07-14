<?php

use App\Campaign;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
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
            $table->string('name')->unique();
       });

        DB::table('campaign')->insert(
            [
                'name' => 'Gloomhaven',
                'id' => Campaign::GLOOMHAVEN
            ],
            [
                'name' => 'Forgotten Circle',
                'id' => Campaign::FORGOTTEN_CIRCLE
            ],
            [
                'name' => 'Jaws',
                'id' => Campaign::JAWS
            ],
            [
                'name' => 'Frosthaven',
                'id' => Campaign::FROSTHAVEN
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
        Schema::dropIfExists('campaign');
    }
}
