<?php 

namespace payment\Payment\components;

use Cms\Classes\ComponentBase;
use Input;
use Redirect;
use Flash;
use Db;
use payment\Payment\Models\PaydunyaConfig;

class CreateConfig extends ComponentBase 
{
    public $config;

    public function componentDetails()
    {
        return [
            'name' => 'Configuration du module de paiement',
            'description' => 'Config du module de paiement avec Paydunya'
        ];
    }

    public function onRun()
    {
        //Db::table('payment_payment_config')->delete();
        $this->config = Db::table('payment_payment_config')
                            ->join('users', 'users.id', '=', 'payment_payment_config.id_user')
                            ->get();
                            //dd(PaydunyaConfig::where('id_user', '=', $this->config[0]->id)->first());
        $this->config = count($this->config) === 0 ? $this->config : PaydunyaConfig::where('id_user', '=', $this->config[0]->id)->first();
    }

    public function onSave()
    {
        $this->config = Db::table('payment_payment_config')
                            ->join('users', 'users.id', '=', 'payment_payment_config.id_user')
                            ->get();
        $this->config = count($this->config) === 0 ? new PaydunyaConfig() : PaydunyaConfig::where('id_user', '=', $this->config[0]->id)->first();
        $this->config->master_key = Input::get('master_key');
        $this->config->public_key_test = Input::get('public_key_test');
        $this->config->private_key_test = Input::get('private_key_test');
        $this->config->token_test = Input::get('token_test');
        $this->config->public_key_prod = Input::get('public_key_prod');
        $this->config->private_key_prod = Input::get('private_key_prod');
        $this->config->token_prod = Input::get('token_prod');
        $this->config->id_user = Input::get('id_user');
        $this->config->redirect = Input::get('redirect');

        $this->config->save();
        Flash::success('Configuration appliquée avec succès !');

        /*$collection = new Collection();
        $collection->prepend($this->config);
        $this->config = $collection;*/

        return Redirect::back();
    }
}

