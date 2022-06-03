<?php
class Vacina
{
    private $id;
    private $vacina;
    private $ubs;
    private $data;
    private $hora;


    function __construct($id, $vacina, $ubs, $data, $hora)
    {
        $this->id = $id;
        $this->vacina = $vacina;
        $this->ubs= $ubs;
        $this->data = $data;
        $this->hora = $hora;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getVacina()
    {
        return $this->vacina;
    }

    public function setVacina($vacina)
    {
        $this->vacina = $vacina;
    }

    public function getUbs()
    {
        return $this->ubs;
    }

    public function setUbs($ubs)
    {
        $this->ubs = $ubs;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
    }
}
