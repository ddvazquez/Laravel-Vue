<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class AlterTableGamesAddReleaseDateAndPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->float('price')->after('image_url')->default(0);
            $table->date('release_date')->after('image_url')->nullable();
        });

        $faker = Faker\Factory::create();

        DB::transaction(function () use ($faker) {
            $games = Game::all();

            $games->each(function ($game) use ($faker){
                $game->price = $faker->randomFloat(2, 20, 90);
                $game->release_date = new DateTime('+'.$faker->numberBetween(0, 365).' days');
                $game->save();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('release_date');
        });
    }
}
