<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent32 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->renameColumn('mofif_droit', 'modif_droit');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->renameColumn('modif_droit', 'mofif_droit');
        });
    }
}
