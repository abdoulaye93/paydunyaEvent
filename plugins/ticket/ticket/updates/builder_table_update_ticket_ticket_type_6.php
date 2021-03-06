<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketType6 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->string('nom_type', 10)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->string('nom_type', 10)->nullable(false)->change();
        });
    }
}
