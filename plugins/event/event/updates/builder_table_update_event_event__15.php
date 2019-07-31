<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent15 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->boolean('annule_demande')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('annule_demande');
        });
    }
}
