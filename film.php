<?php

class Film {
    private string $titre;
    public function __construct(string $titre) {
        $this->titre = $titre;
    }
    public function getTitre(): string {
        return $this->titre;
    }
}
