<?php 
use payment\Payment\Models\PaydunyaConfig;
class Cms5d48b11f65940116867258_99f03d1fe9f576ca27174c90223623faClass extends Cms\Classes\LayoutCode
{
  public function onAchat()
  {
    $checkoutInvoice = new \Paydunya\Checkout\CheckoutInvoice();
    $config = PaydunyaConfig::get()[0];

    $quantity = input('nbTicket');
    
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
    \Paydunya\Checkout\Store::setCancelUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/index.php");
    \Paydunya\Checkout\Store::setReturnUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/index.php");

    $montantTotal = (input('promo')) ? input('total') - input('promo') : input('total');
    $checkoutInvoice->setTotalAmount($montantTotal+1000);

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
