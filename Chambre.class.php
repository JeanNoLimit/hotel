<?php

class Chambre {

    private int $_num; //numéro de chambre
    private int $_nblits;
    private float $_prix;
    private bool $_wifi;
    private Hotel $_hotel;
    private array $_listeResa;

    public function __construct(int $num,int $nblits, float $prix,bool $wifi,Hotel $hotel){
        $this->_num=$num;
        $this->_nblits=$nblits;
        $this->_prix=$prix;
        $this->_wifi=$wifi;
        $this->_hotel=$hotel;
        $this->_listeResa=[];
    }

// ***********************Getter et setter************************//

    public function get_num()
    {
        return $this->_num;
    }

    public function set_num($_num)
    {
        $this->_num = $_num;

        return $this;
    }

    public function get_nblits()
    {
        return $this->_nblits;
    }

    public function set_nblits($_nblits)
    {
        $this->_nblits = $_nblits;

        return $this;
    }

    public function get_prix()
    {
        return $this->_prix;
    }

    public function set_prix($_prix)
    {
        $this->_prix = $_prix;

        return $this;
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

    public function get_listeResa()
    {
        return $this->_listeResa;
    }

    public function set_listeResa($_listeResa)
    {
        $this->_listeResa = $_listeResa;

        return $this;
    }

    public function get_wifi()
    {
        return $this->_wifi;
    }

    public function set_wifi($_wifi)
    {
        $this->_wifi = $_wifi;

        return $this;
    }
}



?>