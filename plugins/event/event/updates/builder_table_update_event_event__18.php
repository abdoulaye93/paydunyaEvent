<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent18 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('eventimage');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('eventimage', 191)->nullable();
        });
    }
}
