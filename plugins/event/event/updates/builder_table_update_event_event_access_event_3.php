<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAccessEvent3 extends Migration
{
    public function up()
    {
        Schema::table('event_event_access_event', function($table)
        {
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_access_event', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
