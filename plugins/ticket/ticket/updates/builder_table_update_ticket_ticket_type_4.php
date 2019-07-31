<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketType4 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->decimal('montant', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->dropColumn('montant');
        });
    }
}
