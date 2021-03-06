<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventNotifDemande2 extends Migration
{
    public function up()
    {
        Schema::table('event_event_notif_demande', function($table)
        {
            $table->dropColumn('nbr');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_notif_demande', function($table)
        {
            $table->integer('nbr')->nullable();
        });
    }
}
