<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventSub3 extends Migration
{
    public function up()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->integer('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
