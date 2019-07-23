<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAccessEvent2 extends Migration
{
    public function up()
    {
        Schema::table('event_event_access_event', function($table)
        {
            $table->dropPrimary(['user_id','event_id']);
        });
    }
    
    public function down()
    {
        Schema::table('event_event_access_event', function($table)
        {
            $table->primary(['user_id','event_id']);
        });
    }
}
