<?php 
use event\event\models\AchatList;class Cms5d4c01859771d256690882_0a63e7377cb7cc57769a360ae5f5e094Class extends Cms\Classes\PageCode
{

public function onStart(){
        $user = Auth::getUser();
        $this['achats'] = AchatList::where('user_email', '=', $user->email)->get();
    }
}
