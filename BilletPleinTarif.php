<?php

class BilletPleinTarif{
    //ATTRIBUT : encapsulation typage date_variable
    private int $numero;
    private float $prix;
    private Seance $seance;

    /*
    CONSTRUCTEUR
    */

    public function __construct(int $numero, float $prix, Seance $seance) {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->seance = $seance;
    }

    //GETTER ET SETTER
    //Getter : méthode dont le but est de lire la valeur d'un attribut

    public function getnumero(): int {
        return $this->numero;
    }

    public function getprix(): float {
        return $this->prix;
    }

    public function getSeance(): Seance {
        return $this->seance;
    }
    
    //Setter : méthode dont le but est de modifier la valeur d'un attribut

    public function setnumero(int $numero): void {
        $this->numero = $numero;
    }

    public function setprix(float $prix): void {
        $this->prix = $prix;
    }

    public function setSeance(Seance $seance): void {
        $this->seance = $seance;
    }

    //METHODE

    public function calculerPrix() : float {
        return $this->prix;
    }

    public function imprimerDetail() : void{
        echo'Le billet est '.$this->numero;
        echo'<br><br>';
        echo'<p>La seance aura lieu le '.$this->seance->getdate().' à '.$this->seance->getheure().'</p>';
    }

    
}