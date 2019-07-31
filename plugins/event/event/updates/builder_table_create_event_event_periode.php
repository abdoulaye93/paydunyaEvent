<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventPeriode extends Migration
{
    public function up()
    {
        Schema::create('event_event_periode', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->smallInteger('date_cloture');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_periode');
    }
}
