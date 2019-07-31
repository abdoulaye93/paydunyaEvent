<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEventSubEvent extends Migration
{
    public function up()
    {
        Schema::table('event_event_sub_event', function($table)
        {
            $table->integer('event_id')->unsigned()->change();
            $table->integer('sub_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_sub_event', function($table)
        {
            $table->integer('event_id')->unsigned(false)->change();
            $table->integer('sub_id')->unsigned(false)->change();
        });
    }
}
