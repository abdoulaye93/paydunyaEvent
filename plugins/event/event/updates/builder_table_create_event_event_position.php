<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventPosition extends Migration
{
    public function up()
    {
        Schema::create('event_event_position', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->decimal('lat', 10, 0)->nullable();
            $table->decimal('long', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_position');
    }
}
