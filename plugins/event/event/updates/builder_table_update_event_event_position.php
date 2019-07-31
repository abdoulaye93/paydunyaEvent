<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventPosition extends Migration
{
    public function up()
    {
        Schema::table('event_event_position', function($table)
        {
            $table->dropColumn('lat');
            $table->dropColumn('long');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_position', function($table)
        {
            $table->decimal('lat', 10, 0)->nullable();
            $table->decimal('long', 10, 0)->nullable();
        });
    }
}
