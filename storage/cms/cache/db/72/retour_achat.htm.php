<?php 
class Cms5d49ee88f40d6870016513_cd6398cfa6e170978453802f176216feClass extends Cms\Classes\LayoutCode
{
public function onStart(){
    $token = $_GET['token'];

    $invoice = new \Paydunya\Checkout\CheckoutInvoice();
    $invoice->confirm($token);
   /* if (!$invoice->confirm($token)) {
        echo $invoice->getStatus();
     // echo $invoice->getCustomData("id");
     // echo $invoice->getCustomData("numero_gagnant");
      //echo $invoice->getCustomData("nameticket");
    
      // Vous pouvez aussi récupérer le montant total spécifié précédemment
     // echo $invoice->getTotalAmount();
    
    }else{
      echo $invoice->getStatus();
      echo $invoice->response_text;
      echo $invoice->response_code;
    }*/
}
}
