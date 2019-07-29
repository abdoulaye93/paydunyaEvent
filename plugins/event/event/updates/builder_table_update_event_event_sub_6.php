<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventSub6 extends Migration
{
    public function up()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->dropColumn('montant');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->smallInteger('montant')->nullable();
        });
    }
}
