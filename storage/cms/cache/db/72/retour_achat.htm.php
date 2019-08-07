<?php 
use payment\Payment\Models\PaydunyaConfig;class Cms5d4aad97b5ad4175043398_d2719bff634db711b30d042999a34be8Class extends Cms\Classes\LayoutCode
{

public function onStart(){
  $config = PaydunyaConfig::get()[0];
  \Paydunya\Setup::setMasterKey($config->master_key);
  \Paydunya\Setup::setPublicKey($config->public_key_test);
  \Paydunya\Setup::setPrivateKey($config->private_key_test);
  \Paydunya\Setup::setMode("test");
  \Paydunya\Setup::setToken($config->token_test);
    $token = $_GET['token'];
   $id;$nbrticket;$montant;$nomticket;
    $invoice = new \Paydunya\Checkout\CheckoutInvoice();
    $invoice->confirm($token);
    if ($invoice->confirm($token)) {
       // echo "satus".$invoice->getStatus();
      $this['id']=$invoice->getCustomData("id");
    // echo $invoice->getCustomData("numero_gagnant");
    $this['nomticket']=$invoice->getCustomData("nameticket");
    $this['nbrticket']=$invoice->getCustomData("nbrticket"); 
    
      // Vous pouvez aussi récupérer le montant total spécifié précédemment
      $this['montant']=$invoice->getTotalAmount();
    
    }else{
      echo $invoice->getStatus();
      echo $invoice->response_text;
      echo $invoice->response_code;
    }
}
}
