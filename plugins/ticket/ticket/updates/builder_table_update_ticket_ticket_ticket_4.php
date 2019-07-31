<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketTicket4 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->dropColumn('date_achat');
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->integer('date_achat');
        });
    }
}
