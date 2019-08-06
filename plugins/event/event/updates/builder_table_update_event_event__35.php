<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent35 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('categorie')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->dropColumn('categorie');
        });
    }
}
