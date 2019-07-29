<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketTicket9 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->renameColumn('statut', 'status');
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->renameColumn('status', 'statut');
        });
    }
}
