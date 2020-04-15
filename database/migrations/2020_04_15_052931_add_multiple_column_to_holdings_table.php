<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToHoldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('holdings', function (Blueprint $table) {
            $table->decimal('Amount_Invested')->nullable();
            $table->decimal('Interest_Rate')->nullable();
            $table->decimal('Fortnight_Return')->nullable();
            $table->string('Client_Account')->nullable();
            $table->string('Bank_Name')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('holdings', function (Blueprint $table) {
            //
            $table->dropColumn(['Amount_Invested',  'Interest_Rate', 'Fortnight_Return','Client_Account','Bank_Name']);

        });
    }
}
