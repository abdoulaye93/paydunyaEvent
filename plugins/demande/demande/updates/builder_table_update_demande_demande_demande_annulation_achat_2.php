<?php namespace Demande\Demande\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDemandeDemandeDemandeAnnulationAchat2 extends Migration
{
    public function up()
    {
        Schema::table('demande_demande_demande_annulation_achat', function($table)
        {
            $table->string('email');
        });
    }
    
    public function down()
    {
        Schema::table('demande_demande_demande_annulation_achat', function($table)
        {
            $table->dropColumn('email');
        });
    }
}
