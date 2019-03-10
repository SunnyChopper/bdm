<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevSelfAwarenessResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_self_awareness_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category', 128);
            $table->string('title', 128);
            $table->text('description');
            $table->string('link', 256);
            $table->string('image_url', 256);
            $table->integer('is_active')->default(1);
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
        Schema::dropIfExists('dev_self_awareness_resources');
    }
}
