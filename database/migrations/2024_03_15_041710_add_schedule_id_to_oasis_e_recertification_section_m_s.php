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
        Schema::table('oasis_e_recertification_section_m_s', function (Blueprint $table) {
            $table->unsignedBigInteger('schedule_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oasis_e_recertification_section_m_s', function (Blueprint $table) {
            //
        });
    }
};
