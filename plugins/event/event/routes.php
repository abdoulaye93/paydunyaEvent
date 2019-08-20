<?php
use rainlab\user\models\User;
use Db;
use Redirect;
use Http;
use Auth;
use \rainlab\user\components\Account;
use payment\Payment\Models\PaydunyaConfig;
//endpoint de connexion à l'appli paydunya
Route::get('user/{name?}', function () {
    $user=User::where('email',Request::get('name'))->get();
    $p=new User();
    if(sizeof($p->scopeIsActivated($user))==0){
        $reponse= Http::post('https://preview56.paydunya.com/api/v1/rlt/login', function($http){
            $http->header('Authorization', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEyLCJpc3MiOiJodHRwczpcL1wvcHJldmlldzU2LnBheWR1bnlhLmNvbVwvYXBpXC92MVwvYXV0aGVudGljYXRlIiwiaWF0IjoxNTU2MDM1MzMwLCJleHAiOjE4NzEzOTUzMzAsIm5iZiI6MTU1NjAzNTMzMCwianRpIjoiYTFlNmU0NTA2NmY2MjFkYzdhZjBmOTViMzFjZTBjNzUifQ.HRDPB2M6AqXBOwhjI9nWwDv_sMFd5yOiquNlSPPaCc8');
            $http->timeout(3600);
            $http->data(['login' => Request::get('name'),'password'=>'#223Mali']);
        });
        $data=json_decode($reponse,true);
        if($data['response']=="success"){
           $user = Auth::register([
                'name' => 'isreal',
                'email' => Request::get('name'),
                'password' => '#223Mali',
                'password_confirmation' => '#223Mali',
            ],true);
           $payconfig=new PaydunyaConfig();
           $payconfig->private_key_test=$data['data']['user']['live_private_key'];
           $payconfig->master_key=$data['data']['user']['master_key'];
           $payconfig->token_test=$data['data']['user']['live_token'];
           $payconfig->id_user=$user->id;
           $payconfig->phone=$data['data']['user']['phone'];
           $payconfig->save();
           $iduser=$user->id;
           return  Redirect::to("/paydunya_connection/$iduser");
        }else{
            return "not found";
        }
    }else{

       $email=$p->scopeIsActivated($user)[0]->email;
       $password=$p->scopeIsActivated($user)[0]->password;
       $id=$p->scopeIsActivated($user)[0]->id;
       $reponse= Http::post('https://preview56.paydunya.com/api/v1/rlt/login', function($http){
        $http->header('Authorization', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEyLCJpc3MiOiJodHRwczpcL1wvcHJldmlldzU2LnBheWR1bnlhLmNvbVwvYXBpXC92MVwvYXV0aGVudGljYXRlIiwiaWF0IjoxNTU2MDM1MzMwLCJleHAiOjE4NzEzOTUzMzAsIm5iZiI6MTU1NjAzNTMzMCwianRpIjoiYTFlNmU0NTA2NmY2MjFkYzdhZjBmOTViMzFjZTBjNzUifQ.HRDPB2M6AqXBOwhjI9nWwDv_sMFd5yOiquNlSPPaCc8');
        $http->timeout(3600);
        $http->data(['login' => Request::get('name'),'password'=>'#223Mali']);
      });
      $data=json_decode($reponse,true);
      if($data['response']=="success"){
        Db::table('payment_payment_config')
        ->where('id_user',$id)
        ->update(['private_key_test' => $data['data']['user']['live_private_key'],'master_key'=>$data['data']['user']['master_key'],'token_test'=>$data['data']['user']['live_token']]);
        return  Redirect::to("/paydunya_connection/$id");
      }else{
        return "not found";
      }
    }
});



