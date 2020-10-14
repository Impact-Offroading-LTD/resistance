<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiscordConnections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discord_connections', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('oaccount');
            $table->string('discord_id');
            $table->string('discord_username');
            $table->string('discord_tag');
            $table->string('discord_email');
            $table->boolean('email_confirmed');
            $table->string('avatar');
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
        Schema::dropIfExists('discord_connections');
    }
}
