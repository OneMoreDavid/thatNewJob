<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('job_title');
            $table->string('company_name')->nullable();
            $table->string('status');
            $table->date('awareness_date')->nullable();
            $table->string('link_to_advert')->nullable();
            $table->string('how_did_you_find_it')->nullable();
            $table->longText('job_description_notes')->nullable();
            $table->string('job_description_upload')->nullable();
            $table->LongText('job_type')->nullable();
            $table->LongText('why_do_you_want_it')->nullable();
            $table->LongText('strong_areas')->nullable();
            $table->LongText('weak_areas')->nullable();
            $table->date('closing_date')->nullable();
            $table->date('applied_date')->nullable();
            $table->string('how_did_you_apply')->nullable();
            $table->date('telephone_interview_date')->nullable();
            $table->date('second_telephone_interview_date')->nullable();
            $table->date('first_onsite_interview_date')->nullable();
            $table->date('second_onsite_interview_date')->nullable();
            $table->LongText('interview_notes')->nullable();
            $table->LongText('feedback_received')->nullable();
            $table->date('offer_received_date')->nullable();
            $table->LongText('benefits')->nullable();
            $table->string('salary')->nullable();
            $table->date('offer_accepted_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_items');
    }
};
