<?php

class ControleurUser {

    function __construct() {
        global $rep,$vues; // nécessaire pour utiliser variables globales

// on démarre ou reprend la session si necessaire (préférez utiliser un modèle pour gérer vos session ou cookies)
        session_start();
//debut

//on initialise un tableau d'erreur
        $dVueErreur = array ();

        try{

            $action=$_REQUEST['action'];

            switch($action) {

//pas d'action, on r�initialise 1er appel
                case NULL:
                    $this->AffPageDef();
                    break;

//mauvaise action
                default:
                    $dVueErreur[] =	"Erreur d'appel php";
                    require ($rep.$vues['princ']);
                    break;
            }

        } catch (PDOException $e)
        {
            //si erreur BD, pas le cas ici
            $dVueErreur[] =	"Erreur inattendue!!! ";
            require ($rep.$vues['erreur']);

        }
        catch (Exception $e2)
        {
            $dVueErreur[] =	"Erreur inattendue!!! ";
            require ($rep.$vues['erreur']);
        }

//fin
        exit(0);
    }//fin constructeur


    function AffPageDef() {
        global $rep,$vues; // nécessaire pour utiliser variables globales
        $task = new Task(1,"TitreTask");
        $TabTask = $task->getTitre();
        require ($rep.$vues['princ.php']);
    }



}//fin class

?>