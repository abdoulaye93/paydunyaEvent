<?php namespace Demande\Demande\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDemandeDemandeDemandeAnnulationEvent2 extends Migration
{
    public function up()
    {
        Schema::table('demande_demande_demande_annulation_event', function($table)
        {
            $table->string('email');
        });
    }
    
    public function down()
    {
        Schema::table('demande_demande_demande_annulation_event', function($table)
        {
            $table->dropColumn('email');
        });
    }
}
