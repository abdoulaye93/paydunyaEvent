<?php namespace payment\Payment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaymentPaymentConfig13 extends Migration
{
    public function up()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->string('private_key_prod')->change();
            $table->dropColumn('public_key_prod');
        });
    }
    
    public function down()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->string('private_key_prod', 191)->change();
            $table->string('public_key_prod', 255);
        });
    }
}
