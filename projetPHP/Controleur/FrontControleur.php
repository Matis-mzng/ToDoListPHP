<?php

class FrontControleur
{

    public function __construct()
    {
        global $rep, $vues;
        $mdlUser=new ModeleUser();
        $listeAction_User=array('deconnecter','supprimer','ajouter');
        session_start();

        $dVueErreur = array();

    }
}

?>