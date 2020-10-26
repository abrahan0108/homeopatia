<?php

class Symptom{
    // Symptom attributes
    private $id;
    private $nombre;

    // Database connection
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

    public function getAll(){
        $sql = "SELECT * FROM sintoma ORDER BY id DESC";
        $symptom = $this->db->query($sql);
        return $symptom;
    }

}