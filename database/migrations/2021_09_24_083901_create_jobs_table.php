<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable($value = true);
            $table->text('job_title')->nullable($value = true);
            $table->text('job_summary')->nullable($value = true);
            $table->text('job_description')->nullable($value = true);
            $table->bigInteger('job_type')->nullable($value = true);
            //$table->bigInteger('job_qualification_id')->nullable($value = true);
            $table->integer('salary_range_id')->nullable($value = true);
            $table->decimal('salary_amount')->nullable($value = true);
            $table->bigInteger('currency_id')->nullable($value = true);
            $table->bigInteger('payment_mode_id')->nullable($value = true);
            $table->integer('job_openings')->nullable($value = true);
            $table->bigInteger('job_county_id')->nullable($value = true);
            $table->bigInteger('job_town_id')->nullable($value = true);
            $table->text('job_address')->nullable($value = true);
            $table->text('display_name')->nullable($value = true);
            $table->text('company_logo')->nullable($value = true);
            $table->string('posting_as')->nullable($value = true);
            // $table->date('start_date')->nullable($value = true);
            $table->date('deadline')->nullable($value = true);
            $table->integer('job_status')->nullable($value = true);
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('jobs');
    }
}
