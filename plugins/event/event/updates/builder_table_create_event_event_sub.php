<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventSub extends Migration
{
    public function up()
    {
        Schema::create('event_event_sub', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom');
            $table->smallInteger('montant');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_sub');
    }
}
