<?php 
use payment\Payment\Models\PaydunyaConfig;use event\event\models\Event;use rainlab\user\models\User;use event\event\models\AchatList;class Cms5d4c4c9f353d5194718813_3d68f3fe8083fda542bfbf380b992cf9Class extends Cms\Classes\LayoutCode
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
    if ($invoice->confirm($token)) {
       if($invoice->getStatus()=="completed"){
        $uid=$invoice->getCustomData("user");
        //$user=User::where('id',$uid)->get();
        $user= Db::table('users')->where('id',$uid)->first();
      //  dd($user->email);
        Db::table('event_event_achat')
        ->where('user_email', $user->email)
        ->where('event_id',$invoice->getCustomData("event"))
        ->update(['remboursser' => true]);
        Db::table('event_event_annule_achat1')
        ->where('event_id', $invoice->getCustomData("event"))
        ->where('user_send_id', $uid)
        ->update(['paye' => true]);
       }
    
    }else{
      echo $invoice->getStatus();
      echo $invoice->response_text;
      echo $invoice->response_code;
    }
}
}
