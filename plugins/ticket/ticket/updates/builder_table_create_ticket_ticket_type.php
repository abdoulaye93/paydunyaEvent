<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTicketTicketType extends Migration
{
    public function up()
    {
        Schema::create('ticket_ticket_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->smallInteger('nom_type');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ticket_ticket_type');
    }
}
