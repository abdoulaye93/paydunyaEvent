<?php namespace payment\Payment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaymentPaymentConfig6 extends Migration
{
    public function up()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->boolean('redirect')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->dropColumn('redirect');
        });
    }
}
