<?php

class Ruble{
    // Ruble attributes
    private $id;
    private $sintoma_id;
    private $cita_id;

    // DataBase Connection
    private $db;

    public function __construct(){
        $this->db = DataBase::connect();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
        $this->sintoma_id = $this->db->real_escape_string($sintoma_id);

        return $this;
    }

    /**
     * Get the value of cita_id
     */ 
    public function getCita_id()
    {
        return $this->cita_id;
    }

    /**
     * Set the value of cita_id
     *
     * @return  self
     */ 
    public function setCita_id($cita_id)
    {
        $this->cita_id = $this->db->real_escape_string($cita_id);

        return $this;
    }

    public function getAll(){
        $sql = "SELECT * FROM rubro WHERE cita_id = { $this->getCita_id }";
        $ruble = $this->db->query($sql);
        return $ruble;
    }

}