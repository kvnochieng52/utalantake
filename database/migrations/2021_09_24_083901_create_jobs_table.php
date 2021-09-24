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
            $table->text('job_title')->nullable($value = true);
            $table->text('job_description')->nullable($value = true);
            $table->text('job_qualification')->nullable($value = true);
            $table->integer('salary_range_id')->nullable($value = true);
            $table->text('job_address')->nullable($value = true);
            $table->text('company_name')->nullable($value = true);
            $table->text('company_logo')->nullable($value = true);
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
