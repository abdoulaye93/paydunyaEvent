<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketType2 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->renameColumn('nom_typ', 'nom_type');
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->renameColumn('nom_type', 'nom_typ');
        });
    }
}
