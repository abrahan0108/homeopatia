<?php

class Patient{
    // Attributes for patient
    private $id;
    private $nombre;
    private $a_paterno;
    private $a_materno;
    private $f_nacimiento;
    private $genero;
    private $calle;
    private $colonia;
    private $n_interior;
    private $n_exterior;
    private $ciudad;
    private $estado;
    private $telefono;
    private $movil;
    private $email;

    // DataBase connection
    private $db;

    private function __construct(){
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
     * Get the value of a_paterno
     */ 
    public function getA_paterno()
    {
        return $this->a_paterno;
    }

    /**
     * Set the value of a_paterno
     *
     * @return  self
     */ 
    public function setA_paterno($a_paterno)
    {
        $this->a_paterno = $this->db->real_escape_string($a_paterno);

        return $this;
    }

    /**
     * Get the value of a_materno
     */ 
    public function getA_materno()
    {
        return $this->a_materno;
    }

    /**
     * Set the value of a_materno
     *
     * @return  self
     */ 
    public function setA_materno($a_materno)
    {
        $this->a_materno = $this->db->real_escape_string($a_materno);

        return $this;
    }

    /**
     * Get the value of f_nacimiento
     */ 
    public function getF_nacimiento()
    {
        return $this->f_nacimiento;
    }

    /**
     * Set the value of f_nacimiento
     *
     * @return  self
     */ 
    public function setF_nacimiento($f_nacimiento)
    {
        $this->f_nacimiento = $this->db->real_escape_string($f_nacimiento);

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $this->db->real_escape_string($genero);

        return $this;
    }

    /**
     * Get the value of calle
     */ 
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set the value of calle
     *
     * @return  self
     */ 
    public function setCalle($calle)
    {
        $this->calle = $this->db->real_escape_string($calle);

        return $this;
    }

    /**
     * Get the value of colonia
     */ 
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set the value of colonia
     *
     * @return  self
     */ 
    public function setColonia($colonia)
    {
        $this->colonia = $this->db->real_escape_string($colonia);

        return $this;
    }

    /**
     * Get the value of n_interior
     */ 
    public function getN_interior()
    {
        return $this->n_interior;
    }

    /**
     * Set the value of n_interior
     *
     * @return  self
     */ 
    public function setN_interior($n_interior)
    {
        $this->n_interior = $this->db->real_escape_string($n_interior);

        return $this;
    }

    /**
     * Get the value of n_exterior
     */ 
    public function getN_exterior()
    {
        return $this->n_exterior;
    }

    /**
     * Set the value of n_exterior
     *
     * @return  self
     */ 
    public function setN_exterior($n_exterior)
    {
        $this->n_exterior = $this->db->real_escape__string($n_exterior);

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $this->db->real_escape_string($ciudad);

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $this->db->real_escape_string($estado);

        return $this;
    }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $this->db->real_escape_string($telefono);

        return $this;
    }

    /**
     * Get the value of movil
     */ 
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set the value of movil
     *
     * @return  self
     */ 
    public function setMovil($movil)
    {
        $this->movil = $this->db->real_escape_string($movil);

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);

        return $this;
    }

    public function getAll(){
        $sql = "SELECT * FROM patient ORDER BY id DESC";
        $patient = $this->db->query($sql);
        return $patient;
    }

}