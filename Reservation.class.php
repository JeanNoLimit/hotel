<?php

class Reservation {

    private Hotel $_hotel;
    private Chambre $_chambre;
    private Client $_client;
    private string $_dateEntree;
    private string $_dateSortie;

    public function __construct(Hotel $hotel, Chambre $chambre, Client $client, string $dateEntree, string $dateSortie){
        $this->_hotel=$hotel;
        $this->_chambre=$chambre;
        $this->_client=$client;
        $this->_dateEntree=$dateEntree;
        $this->_dateSortie=$dateSortie;
    }

    public function get_hotel()
    {
        return $this->_hotel;
    }

    public function set_hotel($_hotel)
    {
        $this->_hotel = $_hotel;

        return $this;
    }

    public function get_chambre()
    {
        return $this->_chambre;
    }

    public function set_chambre($_chambre)
    {
        $this->_chambre = $_chambre;

        return $this;
    }

    public function get_client()
    {
        return $this->_client;
    }

    public function set_client($_client)
    {
        $this->_client = $_client;

        return $this;
    }

    public function get_dateEntree()
    {
        return $this->_dateEntree;
    }

    public function set_dateEntree($_dateEntree)
    {
        $this->_dateEntree = $_dateEntree;

        return $this;
    }

    public function get_dateSortie()
    {
        return $this->_dateSortie;
    }

    public function set_dateSortie($_dateSortie)
    {
        $this->_dateSortie = $_dateSortie;

        return $this;
    }
}



?>