<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent17 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('eventimage')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->binary('eventimage')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
