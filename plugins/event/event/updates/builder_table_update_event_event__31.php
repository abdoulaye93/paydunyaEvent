<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent31 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->boolean('mofif_droit')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('mofif_droit');
        });
    }
}
