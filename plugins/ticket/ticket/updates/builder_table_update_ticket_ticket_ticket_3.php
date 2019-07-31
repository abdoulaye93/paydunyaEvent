<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketTicket3 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->string('status', 10)->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('date_achat')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_ticket', function($table)
        {
            $table->smallInteger('status')->nullable(false)->unsigned(false)->default(null)->change();
            $table->smallInteger('date_achat')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
