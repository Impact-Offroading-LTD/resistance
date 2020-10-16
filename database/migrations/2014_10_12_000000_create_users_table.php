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

        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->string('tag')->nullable()->default(NULL);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('fav_trail')->nullable()->default(NULL); //IMPACT
            $table->string('fav_vehicle')->nullable()->default(NULL); //IMPACT
            $table->string('avatar_url')->nullable()->default('/default_pfp.png'); //IMPACT
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

    }
}
