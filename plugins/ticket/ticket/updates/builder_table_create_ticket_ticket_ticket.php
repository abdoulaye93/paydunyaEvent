<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTicketTicketTicket extends Migration
{
    public function up()
    {
        Schema::create('ticket_ticket_ticket', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->smallInteger('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ticket_ticket_ticket');
    }
}
