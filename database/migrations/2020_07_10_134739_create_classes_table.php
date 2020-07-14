<?php

use App\Campaign;
use App\Classes;
use App\HealthIncrements;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->text('long_desc')->nullable();
            $table->text('sort_desc')->nullable();
            $table->tinyInteger('base_max_ability_cards')->unsigned();
            $table->tinyInteger('base_health')->unsigned();
            $table->string('img_icon')->nullable();
            $table->string('img_card')->nullable();
            $table->boolean('locked')->nullable()->default(false);
            $table->bigInteger('campaign_id')->unsigned();
            $table->foreign('campaign_id')->references('id')->on('campaign')->onDelete('cascade')->onUpdate('cascade');
        });

$bruteDesc = <<< TEXT
There is a class of Inox, however, who have abandoned their nomadic ways to embrace lift in human cities, employing their great size and strength to earn a more comfortable living. Disparagingly called "Brutes" by those who employ them, the Inox perform many tasks of menial labor, from construction to loading and unloading ships, Less unsavory types have also been known to hire Brutes as extra muscle. Ideology matters little to the Brute when given a chance to show is strength and get paid to do it.
TEXT;
$bruteBackground = <<< TEXT
The Inox are a primitive and barbaric race, preferring to live in small nomadic tribes scattered across the wilderness. There, they subsist through hunting and gathering, scraping together a meager existence while fighting off the more dangerous creatures of the wilds. What they lack in intelligence and sophistication, they make up for with their superior strength and size, always eager to prove themselves in a challenge. And one should certainly take car in challenging an Inox. Their society does not pay much head to ethics or morality. For the Inox, it is all about survival - kill or be killed.
TEXT;

$tinkerDesc = <<< TEXT
The Tinkerer is a fairly common class of Quatryl to be found in a large city. They are experts in crafting all manner of gadgets and elixirs, and they typically make a living selling them to those wishing to indulge in the convenience these creations offer. There are more adventurous Tinkerers, however, who travel beyond a city's walls in attempts to uncover ancient curiosities that may give insight into their research.
TEXT;
$tinkerBackground = <<< TEXT
Because of their diminutive size, the Quatryl feel they have a lot to prove. From an early age, they are encouraged to study as much as possible about many different subjects. Though there are expert Quatryls in any field, they seem to have a particular affinity to engineering and machinery. Their long, delicate fingers allow them to build all manner of intricate contraptions to make life easier and augment their inferior physical strength. Though they are not numerous, Quatryls can easily integrate themselves into any society, due their expertise in critical fields and their charming, graceful demeanor. Only a fool would shun a Quatryl's offer to help.
TEXT;

        DB::table('classes')->insert(
            [
                'id'=> Classes::INOX_BRUTE,
                'name'=> 'Inox Brute',
                'sort_desc'=> $bruteDesc,
                'long_desc'=> $bruteBackground,
                'base_health'=> 10,
                'base_max_ability_cards'=> 10,
                'campaign_id'=> Campaign::GLOOMHAVEN
            ]
        );
        DB::table('classes')->insert(
            [
                'id'=> Classes::TINKERER,
                'name'=> 'Tinker',
                'sort_desc'=> $tinkerDesc,
                'long_desc'=> $tinkerBackground,
                'base_health'=> 8,
                'base_max_ability_cards'=> 12,
                'campaign_id'=> Campaign::GLOOMHAVEN
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
        Schema::dropIfExists('classes');
    }
}
