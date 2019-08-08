<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAchat3 extends Migration
{
    public function up()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->string('user_email')->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->string('user_email', 10)->change();
        });
    }
}
