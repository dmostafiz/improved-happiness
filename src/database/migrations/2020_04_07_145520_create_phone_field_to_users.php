<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneFieldToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->after('email')->nullable();
            $table->string('address1')->after('phone')->nullable();
            $table->string('address2')->after('address1')->nullable();
            $table->string('city')->after('address2')->nullable();
            $table->string('zip')->after('city')->nullable();
            $table->string('user_role')->after('zip')->nullable()->default("user");
            $table->string('avatar')->after('user_role')->nullable();
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
            //
        });
    }
}
