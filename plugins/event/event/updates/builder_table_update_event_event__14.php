<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent14 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->integer('ticket_vendu')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('ticket_vendu');
        });
    }
}
