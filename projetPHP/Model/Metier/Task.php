<?php

class Task
{
    private int $id;
    private String $titre;
    private bool $fini;

    public function __construct(int $id, string $titre)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->fini = FALSE;
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

    /**
     * @return String
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param String $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return bool
     */
    public function isFini(): bool
    {
        return $this->fini;
    }

    /**
     * @param bool $fini
     */
    public function setFini(bool $fini): void
    {
        $this->fini = $fini;
    }


    /**
     * @param int $id
     * @param String $titre
     * @param bool $fini
     */

}