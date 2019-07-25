<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent16 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->binary('eventimage')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('eventimage');
        });
    }
}
