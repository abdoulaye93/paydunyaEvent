<?php namespace payment\Payment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaymentPaymentConfig14 extends Migration
{
    public function up()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->string('public_key_prod')->nullable();
            $table->string('private_key_prod')->change();
        });
    }
    
    public function down()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->dropColumn('public_key_prod');
            $table->string('private_key_prod', 191)->change();
        });
    }
}
