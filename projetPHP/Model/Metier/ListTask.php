<?php
class ListTask
{
    private int $id;
    private String $nom;


    private $ListeTask = array();

    /**
     * @param int $id
     * @param String $nom
     */
    public function __construct(int $id, string $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->ListeTask = [];
    }

    /**
     * @return int
     */
    private function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    private function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param String $nom
     */
    private function setNom(string $nom): void
    {
        $this->$nom = $nom;
    }

    /**
     * @return array
     */
    private function getListeTask(): array
    {
        return $this->ListeTask;
    }

    /**
     * @param array $ListeTask
     */
    private function setListeTask(array $ListeTask): void
    {
        $this->ListeTask = $ListeTask;
    }

}