<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_tasks', function (Blueprint $table) {
            $table->id();
            $table->biginteger('apuser_id')->nullable(false);
            $table->biginteger('second_goal_id')->nullable(false);
            $table->integer('no')->nullable(false);
            $table->string('text',50)->nullable(false);
            $table->string('memo',300)->nullable();
            $table->string('class',10)->nullable();
            $table->date('day')->nullable(false);
            $table->integer('work_time')->nullable();
            $table->integer('state')->nullable(false);
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
        Schema::dropIfExists('day_tasks');
    }
}
