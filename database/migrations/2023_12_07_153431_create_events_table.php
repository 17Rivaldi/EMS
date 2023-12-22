<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('event_name', 255);
            $table->text('description');
            $table->string('event_location', 255);
            $table->date('event_date');
            $table->time('start_time');
            $table->string('event_image', 255);
            $table->unsignedBigInteger('ticket_price')->default(0);
            // Kolom organizer
            $table->unsignedBigInteger('organizer_id');
            // Foreign key untuk menghubungkan ke tabel users
            $table->foreign('organizer_id')->references('id')->on('tbl_users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_events');
    }
}
