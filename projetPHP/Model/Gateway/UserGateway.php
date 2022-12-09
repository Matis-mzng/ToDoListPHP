<?php

class UserGateway {
    private $con;
    public function __construct(Connection $con) {
        $this->con = $con;
    }
    function getPasswd(String $login) : String {
        $query = 'SELECT motDePasse FROM User WHERE :login=login';
        $this->con->ExecuteQuery($query, array($login=>array($login(PDO::PARAM_STR))));
        $result = $this->con->getResult();
        if (isset($result[0]['motDePasse'])){
            return $result;
        }
        else {
            throw new Exception("Bad Password");
        }
    }
    public function Find(int $id): array {
        if($id>=0){
            $query='SELECT * from User where id=:id';
            $this->con->executeQuery($query,array(':id'=>array($id,PDO::PARAM_INT)));
        }
        $results=$this->con->getResults();
        return $results;
    }

    public function FindByName(int $nom): array {
        if($nom!=NULL){
            $query='SELECT * from Tache where nom=:nom';
            $this->con->executeQuery($query,array(':titre'=>array($nom,PDO::PARAM_STR)));
        }
        $results=$this->con->getResults();
        foreach($results as $row)
            $Tab_de_User[]= new User($row['id'],$row['nom'],$row['prenom']);
        return $Tab_de_User;
    }

}