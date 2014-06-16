<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameDemo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create("sky_type_game", function($table){
            $table->bigIncrements("game_id");
            $table->bigInteger("game_author");
            $table->longText("game_content");
            $table->text("game_title");
            $table->string("game_slug",200);
            $table->text("game_excerpt");
            $table->string("game_status",20)->default('open');
            $table->string("game_comment_status",20)->default('open');
            $table->string("game_ping_status",20)->default('publish');
            $table->string("game_password",20);
            $table->bigInteger("game_parent")->default(0);
            $table->string("game_guid",225);
            $table->string("game_type",20)->default('game');
            $table->bigInteger("game_comment_count")->default(0);
           	$table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('sky_type_game');
	}

}
