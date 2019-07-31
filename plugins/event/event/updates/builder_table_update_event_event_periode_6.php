<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventPeriode6 extends Migration
{
    public function up()
    {
        Schema::table('event_event_periode', function($table)
        {
            $table->dropColumn('date_cloture');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_periode', function($table)
        {
            $table->date('date_cloture');
        });
    }
}
