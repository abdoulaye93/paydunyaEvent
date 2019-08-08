<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAchat8 extends Migration
{
    public function up()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->boolean('remboursser')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->dropColumn('remboursser');
        });
    }
}
