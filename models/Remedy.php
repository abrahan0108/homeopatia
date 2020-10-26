<?php

class Remedy{
    // Remedy Attributes
    private $id;
    private $nombre;
    private $presentacion;
    private $descripcion;

    // DataBase connection
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

    /**
     * Get the value of presentacion
     */ 
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * Set the value of presentacion
     *
     * @return  self
     */ 
    public function setPresentacion($presentacion)
    {
        $this->presentacion = $this->db->real_escape_string($presentacion);

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);

        return $this;
    }

    public function getAll(){
        $sql = "SELECT * FROM remedio ORDER BY id DESC";
        $remedy = $this->db->query($sql);

        return $remedy;
    }

}