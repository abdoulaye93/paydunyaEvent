<?php namespace payment\Payment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaymentPaymentConfig21 extends Migration
{
    public function up()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->string('master_key')->nullable();
            $table->string('public_key_test')->change();
        });
    }
    
    public function down()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->dropColumn('master_key');
            $table->string('public_key_test', 191)->change();
        });
    }
}
