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
            $table->integer('id_ticket_type');
            $table->foreign('id_ticket_type')
                ->references('id')
                ->on('tickets_types');
            $table->integer('id_formule');
            $table->foreign('id_formule')
                ->references('id')
                ->on('formules');
            $table->integer('id_partenaire');
            $table->foreign('id_partenaire')
                ->references('id')
                ->on('partenaire');
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