<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAchat6 extends Migration
{
    public function up()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->renameColumn('status', 'state');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->renameColumn('state', 'status');
        });
    }
}
