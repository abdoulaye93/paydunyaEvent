<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent29 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('nom', 191)->nullable()->change();
            $table->string('lieu', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('nom', 191)->nullable(false)->change();
            $table->string('lieu', 191)->nullable(false)->change();
        });
    }
}
