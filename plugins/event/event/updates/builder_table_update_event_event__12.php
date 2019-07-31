<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent12 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->boolean('etat_event')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('etat_event');
        });
    }
}
