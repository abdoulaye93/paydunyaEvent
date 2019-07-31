<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventPeriode9 extends Migration
{
    public function up()
    {
        Schema::table('event_event_periode', function($table)
        {
            $table->date('date_debut')->nullable()->change();
            $table->date('date_cloture')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_periode', function($table)
        {
            $table->date('date_debut')->nullable(false)->change();
            $table->date('date_cloture')->nullable(false)->change();
        });
    }
}
