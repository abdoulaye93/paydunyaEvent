<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventCategorie extends Migration
{
    public function up()
    {
        Schema::create('event_event_categorie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->smallInteger('nom');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_categorie');
    }
}
