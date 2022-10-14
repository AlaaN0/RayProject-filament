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
        Schema::create('customer_quests', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('answers')->nullable();
            $table->string('is_required')->default('not_required');
            $table->string('is_active')->default('inactive');
            $table->string('answer_type')->default('Text Answer');
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
        Schema::dropIfExists('customer_quests');
    }
};
