<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketTypelist extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_typelist', function($table)
        {
            $table->integer('ticket_id');
            $table->integer('ticket_type_id');
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_typelist', function($table)
        {
            $table->dropColumn('ticket_id');
            $table->dropColumn('ticket_type_id');
        });
    }
}
