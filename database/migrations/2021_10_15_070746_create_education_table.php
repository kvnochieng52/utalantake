<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable($value = true);
            $table->string('institute_name')->nullable($value = true);
            $table->integer('qualification')->nullable($value = true);
            $table->text('course_name')->nullable($value = true);
            $table->date('start_date')->nullable($value = true);
            $table->date('end_date')->nullable($value = true);
            $table->integer('active')->nullable($value = true);
            $table->text('description')->nullable($value = true);
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
        Schema::dropIfExists('education');
    }
}
