<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventSub4 extends Migration
{
    public function up()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->date('jour')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->dropColumn('jour');
        });
    }
}
