<?php 
use payment\Payment\Models\PaydunyaConfig;use event\event\models\Event;use event\event\models\AchatList;class Cms5d5e791dde184579806718_9572a6ef66335fff3d961ac0d55c6b73Class extends Cms\Classes\LayoutCode
{



public function onCalendar(){
  $date=Input::get('date');
  $nom=Input::get('nomevent');
  $email=Input::get('email');
  $desc=Input::get('description');
  $lieu=Input::get('lieu');
  return  Redirect::to("/calnonsign/$email/$date/$nom/$lieu/$desc");
}
public function onStart(){
  $eventconf=Event::where('id',Request::segment(2))->first();
  $config =PaydunyaConfig::where('id_user',$eventconf->user_id)->first();
  \Paydunya\Setup::setMasterKey($config->master_key);
  \Paydunya\Setup::setPublicKey($config->public_key_test);
  \Paydunya\Setup::setPrivateKey($config->private_key_test);
  \Paydunya\Setup::setMode("test");
  \Paydunya\Setup::setToken($config->token_test);
    $token = $_GET['token'];
   $id;$nbrticket;$montant;$nomticket;
    $invoice = new \Paydunya\Checkout\CheckoutInvoice();
    if ($invoice->confirm($token)) {
       // echo "satus".$invoice->getStatus();
     $this['id']=$invoice->getCustomData("id");
    // echo $invoice->getCustomData("numero_gagnant");
    $this['nomticket']=$invoice->getCustomData("nameticket");
    $this['nbrticket']=$invoice->getCustomData("nbrticket"); 
    $this['mail']=$invoice->getCustomData("mail"); 
    $this['dateEv']=$invoice->getCustomData("dateEv");
    $this['nomevent']=$invoice->getCustomData("nomevent"); 
    $this['description']=$invoice->getCustomData("description"); 
    $this['lieu']=$invoice->getCustomData("lieu"); 
      // Vous pouvez aussi récupérer le montant total spécifié précédemment
      $this['montant']=$invoice->getTotalAmount();
      $user = Db::table('event_event_')->where('id', $invoice->getCustomData("id"))->first();
      Db::table('event_event_')
    ->where('id', $invoice->getCustomData("id"))
    ->update(['ticket_vendu' => $user->ticket_vendu+1]);
    Db::table('event_event_')
    ->where('id', $invoice->getCustomData("id"))
    ->update(['nombre_ticket' => $user->nombre_ticket-1]);
    $ev=Event::where('id',$invoice->getCustomData("id"))->first();
    //dd($ev);
    if($ev->nombre_ticket<=0){
      Db::table('event_event_')
      ->where('id', $invoice->getCustomData("id"))
      ->update(['status_event' => true]);
    }
    $user = Auth::getUser();
    $achat=new AchatList();
    if(Auth::getUser()){
      $achat->user_email=$user->email;
    }
    $achat->event_id=$invoice->getCustomData("id");
    $achat->montant=$invoice->getTotalAmount();
    $achat->save();
    
    }else{
      echo $invoice->getStatus();
      echo $invoice->response_text;
      echo $invoice->response_code;
    }
}
}
