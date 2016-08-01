<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // comments
        Schema::connection('lui')
            ->create('demo', function (Blueprint $table) {
                $table->increments('id');
                $table->string('type');
                $table->string('group');
                $table->string('url');
                $table->string('middleware');
                $table->string('controller');
                $table->string('action');
                $table->string('as');

                $table->timestamps();
                $table->tinyInteger('status')->default(1);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('demo');
    }
}