<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->string('tag')->nullable()->default(NULL);
            $table->string('email')->unique();
            $table->enum('role', ['admin', 'mod', 'premium', 'user'])->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('fav_trail')->nullable()->default(NULL);
            $table->string('fav_vehicle')->nullable()->default(NULL);
            $table->string('avatar_url')->nullable()->default('/default_pfp.png');
            $table->rememberToken();
            $table->softDeletes()->nullable()->default(NULL);
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
        Schema::dropIfExists('users');
    }
}
