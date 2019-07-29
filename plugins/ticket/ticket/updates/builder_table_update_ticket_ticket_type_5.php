<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketType5 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->integer('event_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->dropColumn('event_id');
        });
    }
}
