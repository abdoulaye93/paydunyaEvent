<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAnnuleAchat14 extends Migration
{
    public function up()
    {
        Schema::table('event_event_annule_achat1', function($table)
        {
            $table->dropColumn('montant');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_annule_achat1', function($table)
        {
            $table->string('montant', 191)->nullable();
        });
    }
}
