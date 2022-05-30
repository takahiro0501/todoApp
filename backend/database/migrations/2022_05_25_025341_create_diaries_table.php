<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->id();
            $table->biginteger('apuser_id')->nullable(false);
            $table->integer('no')->nullable(false);
            $table->string('text',150)->nullable(false);
            $table->string('memo',300)->nullable();
            $table->string('class',10)->nullable();
            $table->datetime('datetime')->nullable(false);
            $table->boolean('tweet')->default(0);
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
        Schema::dropIfExists('diaries');
    }
}
