<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventAccessEvent extends Migration
{
    public function up()
    {
        Schema::create('event_event_access_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id');
            $table->integer('event_id');
            $table->primary(['user_id','event_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_access_event');
    }
}
