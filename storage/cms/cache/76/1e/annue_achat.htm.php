<?php 
use payment\Payment\Models\PaydunyaConfig;use event\event\models\AnnulleAchat;class Cms5d4c2b28521ab405171634_65efcca46fb077beb085c151b22ae088Class extends Cms\Classes\PageCode
{


public function onStart(){
$this['demandes']= Db::table('event_event_annule_achat')
->join('event_event_', function ($join) {
    $join->on('event_event_annule_achat.event_id', '=', 'event_event_.id')
        ->where('event_event_.user_id', '=', Auth::getUser()->id);
})
->get();
}
public function onRembourse(){
    $checkoutInvoice = new \Paydunya\Checkout\CheckoutInvoice();
    $config = PaydunyaConfig::get()[0];
    \Paydunya\Setup::setMasterKey($config->master_key);
    \Paydunya\Setup::setPublicKey($config->public_key_test);
    \Paydunya\Setup::setPrivateKey($config->private_key_test);
    \Paydunya\Setup::setMode("test");
    \Paydunya\Setup::setToken($config->token_test);
    \Paydunya\Checkout\Store::setName("Paydunya - Event");
    \Paydunya\Checkout\Store::setTagline("Achetez des tickets de tous vos évenements favoris.");
    \Paydunya\Checkout\Store::setPhoneNumber($config->phone);
    $checkoutInvoice->setTotalAmount(Input::get('montant'));
    $checkoutInvoice->setReturnUrl("http://localhost/install-master1/annue_achat");
    if($checkoutInvoice->create()) 
    {
      return Redirect::to($checkoutInvoice->getInvoiceUrl());
    }
    else
    {
      echo $checkoutInvoice->response_text;
    }
    //echo($config->master_key);
    //echo(input('nbTicket'));
  
}
}
