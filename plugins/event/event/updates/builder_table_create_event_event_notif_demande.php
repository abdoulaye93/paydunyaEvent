<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventNotifDemande extends Migration
{
    public function up()
    {
        Schema::create('event_event_notif_demande', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_notif_demande');
    }
}
