<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent39 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->boolean('is_push')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('is_push');
        });
    }
}
