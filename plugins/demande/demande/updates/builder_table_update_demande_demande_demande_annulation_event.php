<?php namespace Demande\Demande\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDemandeDemandeDemandeAnnulationEvent extends Migration
{
    public function up()
    {
        Schema::table('demande_demande_demande_annulation_event', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('demande_demande_demande_annulation_event', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
