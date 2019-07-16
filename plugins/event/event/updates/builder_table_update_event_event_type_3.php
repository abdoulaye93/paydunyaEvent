<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventType3 extends Migration
{
    public function up()
    {
        Schema::table('event_event_type', function($table)
        {
            $table->integer('categorie_id');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_type', function($table)
        {
            $table->dropColumn('categorie_id');
        });
    }
}
