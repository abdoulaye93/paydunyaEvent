<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventSub extends Migration
{
    public function up()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->string('nom', 191)->nullable()->change();
            $table->smallInteger('montant')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_sub', function($table)
        {
            $table->string('nom', 191)->nullable(false)->change();
            $table->smallInteger('montant')->nullable(false)->change();
        });
    }
}
