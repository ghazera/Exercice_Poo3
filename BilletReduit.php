<?php

class BilletReduit extends BilletPleinTarif{
    //ATTRIBUT : encapsulation typage date_variable
    private string $justificatif = '';

    //GETTER ET SETTER
    //Getter : méthode dont le but est de lire la valeur d'un attribut

    public function getjustificatif(): string {
        return $this->justificatif;
    }
    
    //Setter : méthode dont le but est de modifier la valeur d'un attribut

    public function setjustificatif(string $justificatif): void {
        $this->justificatif = $justificatif;
    }

    //METHODE

    public function calculerPrix(string $justificatif = 'Aucun justificatif') : float{
        $this->justificatif = $justificatif;
        $prixMoins30Percent = $this->getprix() * 0.30;
        return $prixMoins30Percent;
    }
    
}