<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIterationEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iteration_enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('next_payment_date');
            $table->string('customer_id', 64);
            $table->string('subscription_id', 64);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('iteration_enrollments');
    }
}
