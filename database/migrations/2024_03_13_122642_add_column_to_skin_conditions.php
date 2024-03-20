<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skin_conditions', function (Blueprint $table) {
            $table->integer('patientUnhealedPressureUlcercheckNa')->nullable()->after('patientUnhealedPressureUlcer');
            $table->integer('patientUnhealedPressureUlcercheckPresent')->nullable()->after('patientUnhealedPressureUlcer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skin_conditions', function (Blueprint $table) {
            //
        });
    }
};
