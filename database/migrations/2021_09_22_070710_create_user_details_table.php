<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable($value = true);
            $table->text('title')->nullable($value = true);
            $table->string('first_name')->nullable($value = true);
            $table->string('last_name')->nullable($value = true);
            $table->text('slug')->nullable($value = true);
            $table->string('primary_phone')->nullable($value = true);
            $table->integer('country_id')->nullable($value = true);
            $table->integer('county_id')->nullable($value = true);
            $table->integer('gender_id')->nullable($value = true);
            $table->integer('town_id')->nullable($value = true);
            $table->date('date_of_birth')->nullable($value = true);
            $table->text('profile_photo')->nullable($value = true);
            $table->text('profile_photo_thumb')->nullable($value = true);
            $table->text('cover_photo')->nullable($value = true);
            $table->text('bio')->nullable($value = true);
            $table->text('address')->nullable($value = true);
            $table->integer('account_type')->nullable($value = true);
            $table->text('intro_video')->nullable($value = true);
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
        Schema::dropIfExists('user_details');
    }
}
