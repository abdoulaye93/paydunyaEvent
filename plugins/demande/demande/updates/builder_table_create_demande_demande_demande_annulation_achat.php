<?php namespace Demande\Demande\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDemandeDemandeDemandeAnnulationAchat extends Migration
{
    public function up()
    {
        Schema::create('demande_demande_demande_annulation_achat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('demande_demande_demande_annulation_achat');
    }
}
