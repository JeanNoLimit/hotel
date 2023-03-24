<?php

class Client {

    private string $_prenom;
    private string $_nom;
    private array $_listeResa;


    public function __construct(string $prenom, string $nom){
        $this->_prenom=$prenom;
        $this->_nom=$nom;
        $this->_listeResa=[];
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

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
    //*****function addResa pour ajouter la liste des réservations de l'hotel ******/
    public function addResaClient(Reservation $reservation){
        $this->_listeResa[]=$reservation;
        
    }

    //*****function affichageResaClient pour afficher les réservations d'un client *****/
    public function affichageResaClient(){
        $result="<h3>Réservations de ". $this->get_prenom()." ".$this->get_nom()."</h3>";

        foreach ($this->_listeResa as $reservation){
            //Utilisation de l'opérateur ternaire. Permet d'écrire sur une seule ligne une condition if/else
            //Ici par exemple -> Si le wifi est présent dans une chambre ? renvoyer "oui" : sinon renvoyer "non"
            //*********** https://www.w3schools.in/php/operators/ternary-operator ***********/
            $wifi = ($reservation->get_chambre()->get_wifi()) ? "oui" : "non";  
            $result.="Hotel : ".$reservation->get_hotel()->get_nom()." ".$reservation->get_hotel()->get_ville()."/".
            " Chambre : ".$reservation-> get_chambre()->get_num()."(".$reservation->get_chambre()->get_nblits()." lits -".
            $reservation->get_chambre()->get_prix()." € - Wifi : ".$wifi.") du ".
            $reservation->get_dateEntree(). " au ". $reservation->get_dateSortie();
        }
       //📶 On peut récupérer le code utf-8 de l'émoji wifi pour l'affichage ou utiliser front awesome (https://fontawesome.com/)
        echo $result;



    }



    
}


?>