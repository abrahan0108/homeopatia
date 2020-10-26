<?php

class Associated{
    // Associated attributes
    private $id;
    private $sintoma_id;
    private $remedio_id;
    private $nombre;

    // DataBase connection
    private $db;

    public function __construct(){
        $this->db = DataBase::connect();
    }

    /**
     * Get the value of sintoma_id
     */ 
    public function getSintoma_id()
    {
        return $this->sintoma_id;
    }

    /**
     * Set the value of sintoma_id
     *
     * @return  self
     */ 
    public function setSintoma_id($sintoma_id)
    {
        $this->sintoma_id = $sintoma_id;

        return $this;
    }

    /**
     * Get the value of remedio_id
     */ 
    public function getRemedio_id()
    {
        return $this->remedio_id;
    }

    /**
     * Set the value of remedio_id
     *
     * @return  self
     */ 
    public function setRemedio_id($remedio_id)
    {
        $this->remedio_id = $remedio_id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        return $this;
    }
}