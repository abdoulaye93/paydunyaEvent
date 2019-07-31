<?php namespace ticket\Ticket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTicketTicketType3 extends Migration
{
    public function up()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->string('nom_type', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ticket_ticket_type', function($table)
        {
            $table->smallInteger('nom_type')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
