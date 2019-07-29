<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTicketTicketTypelist extends Migration
{
    public function up()
    {
        Schema::create('ticket_ticket_typelist', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ticket_ticket_typelist');
    }
}
