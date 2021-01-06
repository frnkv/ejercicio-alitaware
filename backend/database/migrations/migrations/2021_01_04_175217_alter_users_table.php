<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);

            $table->index('name');
            $table->index('surname');
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
           $table->dropColumn([
               'name',
               'surname',
               'latitude',
               'longitude'
           ]);
        });
    }
}
