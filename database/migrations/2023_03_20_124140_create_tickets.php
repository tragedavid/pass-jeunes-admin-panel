<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('code');
            $table->integer('id_ticket_type');
            $table->foreign('id_ticket_type')
                ->references('id')
                ->on('ticket_types');
            $table->integer('id_jeune');
            $table->foreign('id_jeune')
                ->references('id')
                ->on('jeunes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
