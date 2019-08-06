<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEvent extends Migration
{
    public function up()
    {
        Schema::create('event_event_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom');
            $table->string('lieu');
            $table->decimal('montant', 10, 0);
            $table->integer('nombre_ticket');
            $table->string('etat_event');
            $table->string('satus_event');
            $table->string('montant_promo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_');
    }
}
