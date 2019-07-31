<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventAccessEvent extends Migration
{
    public function up()
    {
        Schema::table('event_event_access_event', function($table)
        {
            $table->integer('user_id')->unsigned()->change();
            $table->integer('event_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_access_event', function($table)
        {
            $table->integer('user_id')->unsigned(false)->change();
            $table->integer('event_id')->unsigned(false)->change();
        });
    }
}
