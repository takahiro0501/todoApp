<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_goals', function (Blueprint $table) {
            $table->id();
            $table->biginteger('apuser_id')->nullable(false);
            $table->biginteger('first_goal_id')->nullable(false);
            $table->integer('no')->nullable(false);
            $table->string('text',50)->nullable(false);
            $table->string('memo',300)->nullable();
            $table->string('class',10)->nullable();
            $table->date('term_start')->nullable(false);
            $table->date('term_end')->nullable(false);
            $table->integer('sum_time')->default(0);
            $table->integer('sum_num')->default(0);
            $table->integer('position')->nullable();
            $table->boolean('change_flg')->nullable();
            $table->boolean('save_flg')->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('second_goals');
    }
}
