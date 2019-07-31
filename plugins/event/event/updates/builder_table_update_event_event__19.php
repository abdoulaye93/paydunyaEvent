<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent19 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->decimal('montant', 10, 0)->nullable()->change();
            $table->integer('nombre_ticket')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->decimal('montant', 10, 0)->nullable(false)->change();
            $table->integer('nombre_ticket')->nullable(false)->change();
        });
    }
}
