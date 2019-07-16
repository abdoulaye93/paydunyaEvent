<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventCategorie3 extends Migration
{
    public function up()
    {
        Schema::table('event_event_categorie', function($table)
        {
            $table->string('nom_categorie')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_categorie', function($table)
        {
            $table->smallInteger('nom_categorie')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
