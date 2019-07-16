<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent5 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->renameColumn('sub_id', 'sub_event_id');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->renameColumn('sub_event_id', 'sub_id');
        });
    }
}
