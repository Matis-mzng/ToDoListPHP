<?php

class ModeleUser
{

    function connection(String $login, String $mdp){
       global $dsn;
       $login=FILTER_VAR($login,FILTER_SANITIZE_SPECIAL_CHARS);
       $mdp=FILTER_VAR($mdp,FILTER_SANITIZE_SPECIAL_CHARS);
       $gateway=new Connection($dsn, $login, $mdp);
        if(password_verify($mdp, $gateway->getPasswd($login)))
        {
            $_SESSION['role']='user';
            $_SESSION['login']=$login;
            return new User($login,'user');
        }
        else return null;
    }


}
?>