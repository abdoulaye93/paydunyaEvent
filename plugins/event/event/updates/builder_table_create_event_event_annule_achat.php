<?php namespace Event\Event\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEventEventAnnuleAchat extends Migration
{
    public function up()
    {
        Schema::create('event_event_annule_achat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_send_id');
            $table->integer('user_recieve_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('event_event_annule_achat');
    }
}
