<?php
use rainlab\user\models\User;
use Db;
use Redirect;
use Illuminate\Contracts\Encryption\DecryptException;
use Auth;
use  BackendAuth;
/*Route::get('api/user{nom?}', function ($nom=null) {
    return User::where('id',9)->get();
});*/
Route::get('user/{name?}', function () {
    $user=User::where('email',Request::get('name'))->get();
    $p=new User();
    if(sizeof($p->scopeIsActivated($user))==0){
        return 'false';
    }else{
       $email=$p->scopeIsActivated($user)[0]->email;
       $password=$p->scopeIsActivated($user)[0]->password;
    return  Redirect::to("/paydunya_connection/$email/$password");
    //return $p->scopeIsActivated($user)[0];
    }
});