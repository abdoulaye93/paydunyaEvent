<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventType extends Migration
{
    public function up()
    {
        Schema::table('event_event_type', function($table)
        {
            $table->dropColumn('nom_type');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_type', function($table)
        {
            $table->smallInteger('nom_type');
        });
    }
}
