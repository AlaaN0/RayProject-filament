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
        Schema::create('recruitment_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('status')->default('Inactive');
            $table->string('job_title');
            $table->dateTime('recruitement_date');
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
        Schema::dropIfExists('recruitment_jobs');
    }
};
