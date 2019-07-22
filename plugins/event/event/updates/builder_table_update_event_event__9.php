<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent9 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('satus_event');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('satus_event', 191)->nullable();
        });
    }
}
