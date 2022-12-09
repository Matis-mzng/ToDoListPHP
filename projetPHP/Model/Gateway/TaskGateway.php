<?php

class TaskGateway {
    private $con;
    public function __construct(Connection $con) {
        $this->con = $con;
    }
    public function Find(int $id): array {
        if($id>=0){
            $query='SELECT * from Tache where id=:id';
            $this->con->executeQuery($query,array(':id'=>array($id,PDO::PARAM_INT)));
        }
        $results=$this->con->getResults();
        foreach($results as $row)
            $Tab_de_Task[]= new Task($row['id'],$row['titre']);
        return $Tab_de_Task;
    }

    public function FindByTitre(int $titre): array {
        if($titre!=NULL){
            $query='SELECT * from Tache where titre=:titre';
            $this->con->executeQuery($query,array(':titre'=>array($titre,PDO::PARAM_STR)));
        }
        $results=$this->con->getResults();
        foreach($results as $row)
            $Tab_de_Task[]= new Task($row['id'],$row['titre']);
        return $Tab_de_Task;
    }

    public function Insert(int $id, String $titre) {
        $query='INSERT INTO Tache VALUES(:id,:titre)';
        return $this->con->executeQuery($query,array(
            ':id'=>array($id,PDO::PARAM_INT),
            ':titre'=>array($titre,PDO::PARAM_STR)
            ));
    }

    public function SuppByID(int $id) {
        $query='DELETE FROM Tache WHERE id=:id)';
        $this->con->executeQuery($query,array(
            ':id'=>array($id,PDO::PARAM_INT),
        ));
    }

    public function SuppByTitre(int $titre) {
        $query='DELETE FROM Tache WHERE titre=:titre';
        $this->con->executeQuery($query,array(
            ':titre'=>array($titre,PDO::PARAM_INT),
        ));
    }
}