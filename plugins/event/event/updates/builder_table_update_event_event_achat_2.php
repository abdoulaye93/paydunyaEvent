<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAchat2 extends Migration
{
    public function up()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->string('user_email', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_achat', function($table)
        {
            $table->integer('user_email')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
