<?php 
use payment\Payment\Models\PaydunyaConfig;class Cms5d543056d3a85204388569_c4580e4e1e3043c9ac50007478d1c0f0Class extends Cms\Classes\LayoutCode
{
  
public function onAchat()
  {
    $checkoutInvoice = new \Paydunya\Checkout\CheckoutInvoice();
    $config = PaydunyaConfig::get()[0];

    $quantity = input('nbTicket');
    $nomticket = input('nameticket');
    $dateEvent = input('datecalendar');
    $mail = input('mailcalendar');
    $nomevent = input('nomevent');
    $decription = input('description');
    $lieu = input('lieu');
    
    foreach (input() as $key => $value) 
    {
      if($key != 'nbTicket' && $key != 'total' && $key != 'promo')
      {
        $checkoutInvoice->addItem($key, $quantity, input($key), (int)$quantity * (int)input($key));
      }
    }

    \Paydunya\Setup::setMasterKey($config->master_key);
    \Paydunya\Setup::setPublicKey($config->public_key_test);
    \Paydunya\Setup::setPrivateKey($config->private_key_test);
    \Paydunya\Setup::setMode("test");
    \Paydunya\Setup::setToken($config->token_test);
    \Paydunya\Checkout\Store::setName("Paydunya - Event");
    \Paydunya\Checkout\Store::setTagline("Achetez des tickets de tous vos évenements favoris.");
    \Paydunya\Checkout\Store::setPhoneNumber($config->phone);
    \Paydunya\Checkout\Store::setCancelUrl("http://localhost/install-master1/");
    \Paydunya\Checkout\Store::setReturnUrl("http://localhost/install-master1/");
    $b=Request::segment(2);
    $montantTotal = (input('promo')) ? input('total') - input('promo') : input('total');
    $checkoutInvoice->setTotalAmount($montantTotal);
    $checkoutInvoice->setCancelUrl("http://localhost/install-master1/description_event/".$b);
    $checkoutInvoice->setReturnUrl("http://localhost/install-master1/retour_achat");
    $checkoutInvoice->addCustomData("id",$b);
    $checkoutInvoice->addCustomData("total",$b);
    $checkoutInvoice->addCustomData("nbrticket",(int)$quantity );
    $checkoutInvoice->addCustomData("nameticket",$nomticket);
    $checkoutInvoice->addCustomData("dateEvent",$dateEvent);
    $checkoutInvoice->addCustomData("mail",$mail);
    $checkoutInvoice->addCustomData("nomevent",$nomevent);
    $checkoutInvoice->addCustomData("description",$decription);
    $checkoutInvoice->addCustomData("lieu",$lieu);
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
