<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAnnuleAchat12 extends Migration
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
            $table->decimal('montant', 10, 0);
        });
    }
}
