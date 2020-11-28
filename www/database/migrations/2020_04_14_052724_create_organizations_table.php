<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('area');
            $table->string('upazila');
            $table->foreignId('division_id');
            $table->string('activity');
            $table->string('phone_number')->nullable();
            $table->string('registered')->nullable();
            $table->string('needed_fund')->nullable();
            $table->string('credited_fund')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('fb_link')->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
