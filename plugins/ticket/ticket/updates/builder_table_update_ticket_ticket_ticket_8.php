<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketTicket8 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->boolean('statut')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->dropColumn('statut');
        });
    }
}
