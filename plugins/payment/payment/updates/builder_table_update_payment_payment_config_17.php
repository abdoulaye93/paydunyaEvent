<?php namespace payment\Payment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaymentPaymentConfig17 extends Migration
{
    public function up()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->string('token_test')->nullable();
            $table->string('private_key_prod')->change();
            $table->string('public_key_prod')->change();
        });
    }
    
    public function down()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->dropColumn('token_test');
            $table->string('private_key_prod', 191)->change();
            $table->string('public_key_prod', 191)->change();
        });
    }
}
