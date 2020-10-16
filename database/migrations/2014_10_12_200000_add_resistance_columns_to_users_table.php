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

        /* Add Impact Specific Data */
        Schema::table('users', function (Blueprint $table) {

            /* ROLE */
            $table->enum('role', ['admin', 'mod', 'premium', 'user'])
                    ->after('password')
                    ->default('user');

            /* FAVORITE TRAIL */
            $table->string('fav_trail')
                    ->after('role')
                    ->default(NULL)
                    ->nullable();

            /* FAVORITE VEHICLE */
            $table->string('fav_vehicle')
                    ->after('fav_trail')
                    ->default(NULL)
                    ->nullable();

            /* AVATAR URL */
            $table->string('avatar_url')
                    ->after('fav_vehicle')
                    ->default(NULL)
                    ->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role', 'fav_trail', 'fav_vehicle', 'avatar_url');
        });
    }
}
