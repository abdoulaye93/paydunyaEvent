<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventTypeEvent extends Migration
{
    public function up()
    {
        Schema::create('event_event_type_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('event_id');
            $table->integer('type_id');
            $table->primary(['event_id','type_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_type_event');
    }
}
