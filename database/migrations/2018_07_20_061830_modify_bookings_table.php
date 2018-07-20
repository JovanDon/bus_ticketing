<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('bookings', function(Blueprint $table)
        {
            $table->integer('number_of_passangers')->default(1);
            $table->enum('book_type',['departure','return'])->default('departure');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function(Blueprint $table)
        {
            $table->dropColumn('number_of_passangers');
            $table->dropColumn('book_type');
        });
    }
}
