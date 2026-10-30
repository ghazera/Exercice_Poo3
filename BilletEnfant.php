<?php

class BilletEnfant extends BilletPleinTarif{ 
    //ATTRIBUT : encapsulation typage date_variable
    private int $age = 0;

    //GETTER ET SETTER
    //Getter : méthode dont le but est de lire la valeur d'un attribut

    public function getage(): int {
        return $this->age;
    }
    
    //Setter : méthode dont le but est de modifier la valeur d'un attribut

    public function setage(int $age): void {
        $this->age = $age;
    }

    //METHODE

    public function calculerPrix(int $age = 0) : float{
        $this->age = $age;
        return $this->getprix();
    }

}