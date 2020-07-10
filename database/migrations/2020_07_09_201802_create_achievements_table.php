<?php

use App\Campaign;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('conditions')->default('');
            $table->bigInteger('campaign_id')->unsigned()->default(0);
            $table->foreign('campaign_id')->references('id')->on('campaign')->onDelete('cascade');
            $table->enum('type', ['party', 'global'])->default('global');
        });

        $achievements = [
            ['name' => 'The Drake Slain', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Drake Aided', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Voice Silenced', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Voice Freed', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'City Rule: Militaristic', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'City Rule: Economic', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'City Rule: Demonic', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'Artifact: Recovered', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'Artifact: Lost', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'Artifact: Cleansed', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Merchant flees', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Dead Invade', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Power of Enhancement', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Demon Dethroned', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Rift Closed', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'End of Invasion', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'End of Corruption', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'End of Gloom', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'Ancient Technology', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Edge of Darkness', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'Water-Breathing', 'campaign_id' => Campaign::GLOOMHAVEN],
            ['name' => 'The Annihilation of the Order', 'campaign_id' => Campaign::GLOOMHAVEN],
        ];

        DB::table('achievements')->insert(
            $achievements
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
