<?php namespace payment\Payment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaymentPaymentConfig4 extends Migration
{
    public function up()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->integer('id_user')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->dropColumn('id_user');
        });
    }
}
