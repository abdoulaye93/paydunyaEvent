<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventType extends Migration
{
    public function up()
    {
        Schema::create('event_event_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->smallInteger('nom_type');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_type');
    }
}
