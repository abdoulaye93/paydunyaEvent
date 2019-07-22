<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventSubEvent extends Migration
{
    public function up()
    {
        Schema::create('event_event_sub_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('event_id');
            $table->integer('sub_id');
            $table->primary(['event_id','sub_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_sub_event');
    }
}
