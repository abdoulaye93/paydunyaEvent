<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventPosition2 extends Migration
{
    public function up()
    {
        Schema::table('event_event_position', function($table)
        {
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_position', function($table)
        {
            $table->dropColumn('lat');
            $table->dropColumn('long');
        });
    }
}
