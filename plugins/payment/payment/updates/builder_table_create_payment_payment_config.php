<?php namespace payment\Payment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaymentPaymentConfig extends Migration
{
    public function up()
    {
        Schema::create('payment_payment_config', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('master_key', 255);
            $table->string('public_key_test', 255);
            $table->string('private_key_test', 255);
            $table->string('token_test', 255);
            $table->string('public_key_prod', 255);
            $table->string('private_key_prod', 255);
            $table->string('token_prod', 255);
            $table->integer('id_user');
            $table->boolean('redirect');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('payment_payment_config');
    }
}
