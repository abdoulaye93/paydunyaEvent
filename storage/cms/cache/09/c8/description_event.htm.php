<?php 
use payment\Payment\Models\PaydunyaConfig;use event\event\models\Event;class Cms5d59d78bb883d470253450_8808d97b6da8785d6a901b5dbe76c5a9Class extends Cms\Classes\LayoutCode
{
  
  
public function onAchat()
  {
    $checkoutInvoice = new \Paydunya\Checkout\CheckoutInvoice();
    $eventconf=Event::where('id',Request::segment(2))->first();
    $config =PaydunyaConfig::where('id_user',$eventconf->user_id)->first();
    $quantity = input('nbTicket');
    $nomticket = input('nameticket');
    $dateEvent = input('datecalendar');
    $mail = input('mailcalendar');
    $nomevent = input('nomevent');
    $decription = input('description');
    $lieu = input('lieu');
    $ticketPromocode = input('ticketPromocode');
    $promocode = input('promocode');
    
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
    if(input('ticketPromocode')){
      if(input('promocode')==input('ticketPromocode')){
        $montantTotal=input('total') - input('promo') ;
      }else{
        $montantTotal=input('total');
      }
    }else{
      $montantTotal=input('total');
    }
    $checkoutInvoice->setTotalAmount($montantTotal);
    $checkoutInvoice->setCancelUrl("http://localhost/install-master1/description_event/".$b);
    $checkoutInvoice->setReturnUrl("http://localhost/install-master1/retour_achat/$b");
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
