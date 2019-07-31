<?php namespace Demande\Demande\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDemandeDemandeDemandeAnnulationEvent3 extends Migration
{
    public function up()
    {
        Schema::table('demande_demande_demande_annulation_event', function($table)
        {
            $table->integer('event_id');
            $table->dropColumn('email');
        });
    }
    
    public function down()
    {
        Schema::table('demande_demande_demande_annulation_event', function($table)
        {
            $table->dropColumn('event_id');
            $table->string('email', 191);
        });
    }
}
