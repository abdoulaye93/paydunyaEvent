<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketTicket extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->smallInteger('date_achat');
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->dropColumn('date_achat');
        });
    }
}
