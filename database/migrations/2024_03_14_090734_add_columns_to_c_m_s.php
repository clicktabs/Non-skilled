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
        Schema::table('c_m_s', function (Blueprint $table) {
            $table->text('dmeAndSupplies')->nullable();
            $table->text('safetyMeasures')->nullable();
            $table->text('planNameOfServices')->nullable();
            $table->text('federalLawName')->nullable();
            $table->text('periodicallyreviewtheplan')->nullable();
            $table->text('attPhysicianSignDate')->nullable();
            $table->text('nurseSignature')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('c_m_s', function (Blueprint $table) {
            //
        });
    }
};
