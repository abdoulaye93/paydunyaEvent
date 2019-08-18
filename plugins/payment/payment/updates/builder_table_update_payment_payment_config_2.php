<?php namespace payment\Payment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaymentPaymentConfig2 extends Migration
{
    public function up()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->string('master_key', 255)->nullable()->change();
            $table->string('public_key_test', 255)->nullable()->change();
            $table->string('private_key_test', 255)->nullable()->change();
            $table->string('token_test', 255)->nullable()->change();
            $table->string('public_key_prod', 255)->nullable()->change();
            $table->string('private_key_prod', 255)->nullable()->change();
            $table->string('token_prod', 255)->nullable()->change();
            $table->boolean('redirect')->nullable()->change();
            $table->integer('id_user')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('payment_payment_config', function($table)
        {
            $table->string('master_key', 255)->nullable(false)->change();
            $table->string('public_key_test', 255)->nullable(false)->change();
            $table->string('private_key_test', 255)->nullable(false)->change();
            $table->string('token_test', 255)->nullable(false)->change();
            $table->string('public_key_prod', 255)->nullable(false)->change();
            $table->string('private_key_prod', 255)->nullable(false)->change();
            $table->string('token_prod', 255)->nullable(false)->change();
            $table->boolean('redirect')->nullable(false)->change();
            $table->integer('id_user')->nullable(false)->change();
        });
    }
}
