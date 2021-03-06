<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventCategorie2 extends Migration
{
    public function up()
    {
        Schema::table('event_event_categorie', function($table)
        {
            $table->renameColumn('categorie', 'nom_categorie');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_categorie', function($table)
        {
            $table->renameColumn('nom_categorie', 'categorie');
        });
    }
}
