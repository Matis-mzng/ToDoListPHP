<?php

class ListTaskGateway
{
    private $con;
    public function __construct(Connection $con) {
        $this->con = $con;
    }
    public function Find(int $id): array {
        if($id>=0){
            $query='SELECT * from Liste where id=:id';
            $this->con->executeQuery($query,array(':id'=>array($id,PDO::PARAM_INT)));
        }
        $results=$this->con->getResults();
        foreach($results as $row)
            $Tab_de_Liste[]= new Task($row['id'],$row['titre']);
        return $Tab_de_Liste;
    }
    public function FindByTitre(String $titre): array {
        if($titre!=NULL){
            $query='SELECT * from Liste where titre=:titre';
            $this->con->executeQuery($query,array(':titre'=>array($titre,PDO::PARAM_STR)));
        }
        $results=$this->con->getResults();
        foreach($results as $row)
            $Tab_de_Task[]= new Task($row['id'],$row['titre']);
        return $Tab_de_Task;
    }

    public function insert(int $id, String $titre) {
        $query='INSERT INTO Tache VALUES(:id,:titre)';
        return $this->con->executeQuery($query,array(
            ':id'=>array($id,PDO::PARAM_INT),
            ':titre'=>array($titre,PDO::PARAM_STR)
        ));
    }

    public function insertTaskInListe(int $id, Task $task) {
        $query='INSERT INTO Tache VALUES(:id,:task)';
        return $this->con->executeQuery($query,array(
            ':id'=>array($id,PDO::PARAM_INT),
            ':task'=>array($task,PDO::PARAM_STR)
        ));
    }

    public function SuppByID(int $id) {
        $query='DELETE FROM Liste WHERE id=:id';
        $this->con->executeQuery($query,array(
            ':id'=>array($id,PDO::PARAM_INT),
        ));
    }

    public function SuppByTitre(String $titre) {
        $query='DELETE FROM Liste WHERE titre=:titre';
        $this->con->executeQuery($query,array(
            ':titre'=>array($titre,PDO::PARAM_INT),
        ));
    }
}