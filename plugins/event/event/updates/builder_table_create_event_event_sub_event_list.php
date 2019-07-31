<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventSubEventList extends Migration
{
    public function up()
    {
        Schema::create('event_event_sub_event_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('event_id');
            $table->integer('sub_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_sub_event_list');
    }
}
