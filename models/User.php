<?php

class User{
    // Attributes of User Model
    private $id;
    private $nombre;
    private $a_paterno;
    private $a_materno;
    private $email;
    private $rol;
    private $password;

    // Database Connection
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

    /**
     * Get the value of rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */ 
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT,['cost' => 4]);
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $this->db->real_escape_string($password);

        return $this;
    }

    public function login(){
        $result = false;
        $email = $this->email;
        $password = $this->password;

        // Comprobar si existe el usuario
        $sql = "SELECT * FROM usuario WHERE email = ' $email '";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1){
            $user = $login->fetch_object();
            $verify = password_verify($password, $user->password);
            if($verify){
                $result = $user;
            }
        }
        return $result;
    }
}