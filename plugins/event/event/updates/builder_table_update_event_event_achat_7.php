<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAchat7 extends Migration
{
    public function up()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->decimal('montant', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->dropColumn('montant');
        });
    }
}
