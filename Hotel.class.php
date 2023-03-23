<?php

class Hotel {

    private string $_nom;
    private string $_adresse;
    private int $_cP; //code postal
    private string $_ville;
    private array $_listeChambre; 
    private array $_listeResa; //Liste des reservations de l'hotel

    public function __construct(string $nom, string $adresse, string $cP, string $ville){
        $this->_nom=$nom;
        $this->_adresse=$adresse;
        $this->cP=$cP;
        $this->_ville=$vile;
        $this->_listeChambre=[];
        $this->_listeResa=[];
    }


//  *********Getter et Setter************ //

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    public function get_adresse()
    {
        return $this->_adresse;
    }

    public function set_adresse($_adresse)
    {
        $this->_adresse = $_adresse;

        return $this;
    }

    public function get_cP()
    {
        return $this->_cP;
    }

    public function set_cP($_cP)
    {
        $this->_cP = $_cP;

        return $this;
    }

    public function get_ville()
    {
        return $this->_ville;
    }

    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }

    public function get_nbChambres()
    {
        return $this->_nbChambres;
    }

    public function set_nbChambres($_nbChambres)
    {
        $this->_nbChambres = $_nbChambres;

        return $this;
    }

    public function get_listeResa()
    {
        return $this->_listeResa;
    }

    public function set_listeResa($_listeResa)
    {
        $this->_listeResa = $_listeResa;

        return $this;
    }

}




?>