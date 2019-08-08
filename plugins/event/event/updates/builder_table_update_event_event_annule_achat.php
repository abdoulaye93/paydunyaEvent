<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAnnuleAchat extends Migration
{
    public function up()
    {
        Schema::table('event_event_annule_achat', function($table)
        {
            $table->renameColumn('user_recieve_id', 'event_id');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_annule_achat', function($table)
        {
            $table->renameColumn('event_id', 'user_recieve_id');
        });
    }
}
