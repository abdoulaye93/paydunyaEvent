<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventCategorie extends Migration
{
    public function up()
    {
        Schema::table('event_event_categorie', function($table)
        {
            $table->renameColumn('nom', 'categorie');
        });
    }
    
    public function down()
    {
        Schema::table('event_event_categorie', function($table)
        {
            $table->renameColumn('categorie', 'nom');
        });
    }
}
