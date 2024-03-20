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
        Schema::table('cognitive_mood_behaviors', function (Blueprint $table) {
            $table->text('diagnosed_disorder_neurological_system')->nullable();

            $table->integer('history_traumatic_brain_injury')->default(0);
            $table->date('date_injury')->nullable();
            $table->text('injury_type')->nullable();

            $table->integer('history_of_headache')->default(0);
            $table->date('date_last_headache')->nullable();
            $table->text('headache_type')->nullable();

            $table->integer('history_of_seizures')->default(0);
            $table->date('date_last_seizure')->nullable();
            $table->text('type_of_seizure')->nullable();

            $table->integer('tremors')->nullable();
            $table->text('spasms_location')->nullable();

            $table->integer('dominant_side')->nullable();
            $table->integer('Hemiplegia')->nullable();
            $table->integer('paraplegia')->nullable();
            $table->integer('quadriplegia_tetraplegia')->nullable();

            $table->integer('pcafa')->nullable();
            $table->text('pcafa_explain')->nullable();

            $table->integer('scms')->nullable();
            $table->integer('dccwse')->nullable();
            $table->text('dccwse_explain')->nullable();

            $table->integer('mscrb')->nullable();
            $table->text('mscrb_other')->nullable();

            // PSYCHOSOCIAL
            $table->integer('PSYCHOSOCIAL_sc')->nullable();
            $table->text('PSYCHOSOCIAL_sc_explain')->nullable();

            $table->text('spiritual_resource')->nullable();
            $table->text('spiritual_resource_phn')->nullable();

            $table->integer('marital_status')->nullable();

            $table->integer('emotions_reports')->nullable();
            $table->text('emotions_reports_other')->nullable();

            $table->integer('evidenced_motivation')->nullable();

            $table->integer('evidence_abouse')->nullable();
            $table->integer('EvidenceofExploitation')->nullable();
            $table->integer('exploitation')->nullable();
            $table->integer('msw_rm')->nullable();
            $table->text('other_intervention')->nullable();

            $table->integer('apbtmacor')->nullable();
            $table->text('apbtmacor_explain')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cognitive_mood_behaviors', function (Blueprint $table) {
            //
        });
    }
};
