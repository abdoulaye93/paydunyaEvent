<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAnnuleAchat1 extends Migration
{
    public function up()
    {
        Schema::table('event_event_annule_achat1', function($table)
        {
            $table->integer('user_send_id');
            $table->integer('event_id');
            $table->decimal('montant', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::table('event_event_annule_achat1', function($table)
        {
            $table->dropColumn('user_send_id');
            $table->dropColumn('event_id');
            $table->dropColumn('montant');
        });
    }
}
