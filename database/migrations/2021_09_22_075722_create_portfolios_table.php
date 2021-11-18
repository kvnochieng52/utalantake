<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable($value = true);
            $table->text('portfolio_name')->nullable($value = true);
            $table->integer('active')->nullable($value = true);
            $table->text('portfolio_description')->nullable($value = true);
            $table->text('portfolio_url')->nullable($value = true);
            $table->text('default_thumb_type')->nullable($value = true);
            $table->text('default_thumb_url')->nullable($value = true);
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
        Schema::dropIfExists('portfolios');
    }
}
