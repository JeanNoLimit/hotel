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
        $this->_cP=$cP;
        $this->_ville=$ville;
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


    public function get_listeResa()
    {
        return $this->_listeResa;
    }

    public function set_listeResa($_listeResa)
    {
        $this->_listeResa = $_listeResa;

        return $this;
    }

    public function get_listeChambre()
    {
        return $this->_listeChambre;
    }
    
    public function set_listeChambre($_listeChambre)
    {
        $this->_listeChambre = $_listeChambre;
    
        return $this;
    }

//*****function addChambre pour ajouter la liste des chambres de l'hotel *****//
    public function addChambre(Chambre $chambre){
        $this->_listeChambre[]=$chambre;
    }
//*****function addResa pour ajouter la liste des réservations de l'hotel ******/
    public function addResa(Reservation $reservation){
        $this->_listeResa[]=$reservation;
    }

//*****function affichage des infos de l'hotel : nombre de chambres et réservations *****//
    public function affichageInfosHotel(){
        $nbchambres=count($this->_listeChambre);
        $result="<h3> Hotel".$this->get_nom()." ".$this->get_ville(). "</h3>";
        $result.=$this->get_adresse()." ".$this->get_cP()." ".$this->get_ville()."<br>";
        $result.="Nombre de chambres : ". $nbchambres. "<br>";
        echo $result;
    }
// ***** function affichageReservation pour afficher la liste complète des réservations de l'hotel *****//
    public function affichageReservation(){
        $nbReservations=count($this->_listeResa);
        $result="<h3>Réservations de l'Hotel ".$this->get_nom()." ".$this->get_ville(). "</h3>";
        foreach ($this->_listeResa as $reservation){
            $result.=$reservation->get_prenom();
        }
        echo $result;


    }

}




?>