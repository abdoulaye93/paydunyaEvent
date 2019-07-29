<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEventEvent24 extends Migration
{
    public function up()
    {
        Schema::table('event_event_', function($table)
        {
            $table->string('id', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('event_event_', function($table)
        {
            $table->increments('id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
