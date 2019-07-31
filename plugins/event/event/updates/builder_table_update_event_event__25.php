<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent25 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropPrimary(['id']);
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('id', 10);
            $table->primary(['id']);
        });
    }
}
