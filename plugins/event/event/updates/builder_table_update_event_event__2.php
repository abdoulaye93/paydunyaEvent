<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent2 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('etat_event', 191)->nullable()->change();
            $table->string('satus_event', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('etat_event', 191)->nullable(false)->change();
            $table->string('satus_event', 191)->nullable(false)->change();
        });
    }
}
