<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventSub5 extends Migration
{
    public function up()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->string('description', 10)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->integer('description')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
