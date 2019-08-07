<?php 
use payment\Payment\Models\PaydunyaConfig;use event\event\models\Event;use event\event\models\AchatList;class Cms5d4af014d82f5799292779_cfd52667b1a0dda37aac8b44f3adac0eClass extends Cms\Classes\LayoutCode
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
      $user = Db::table('event_event_')->where('id', $invoice->getCustomData("id"))->first();
      Db::table('event_event_')
    ->where('id', $invoice->getCustomData("id"))
    ->update(['ticket_vendu' => $user->ticket_vendu+1]);
    Db::table('event_event_')
    ->where('id', $invoice->getCustomData("id"))
    ->update(['nombre_ticket' => $user->nombre_ticket-1]);
    $user = BackendAuth::getUser();
    $achat=new AchatList();
    $achat->user_id=$user->id;
    $achat->event_id=$invoice->getCustomData("id");
    $achat->save();
    
    }else{
      echo $invoice->getStatus();
      echo $invoice->response_text;
      echo $invoice->response_code;
    }
}
}
