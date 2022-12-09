<?php

class User
{
    private int $id;
    private String $nom;
    private bool $prenom;
    private String $mail;
    private String $mdp;

    public function __construct(String $nom, String $prenom, String $mail, String $mdp)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->mdp = $mdp;
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
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return bool|String
     */
    public function getPrenom(): bool|string
    {
        return $this->prenom;
    }

    /**
     * @param bool|String $prenom
     */
    public function setPrenom(bool|string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return String
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param String $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return String
     */
    public function getMdp(): string
    {
        return $this->mdp;
    }

    /**
     * @param String $mdp
     */
    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

}