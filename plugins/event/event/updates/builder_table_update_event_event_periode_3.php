<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventPeriode3 extends Migration
{
    public function up()
    {
        Schema::table('event_event_periode', function($table)
        {
            $table->date('date_debut')->nullable(false)->unsigned(false)->default(null)->change();
            $table->date('date_fin')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_periode', function($table)
        {
            $table->dateTime('date_debut')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dateTime('date_fin')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
