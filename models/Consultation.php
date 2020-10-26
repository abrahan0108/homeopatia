<?php

class Consultation{
    // Consultation Attributes
    private $id;
    private $paciente_id;
    private $usuario_id;
    private $remedio_id;
    private $fecha;
    private $tipo;
    private $temperatura;
    private $pre_arterial;
    private $frec_respi;
    private $padecimiento;
    private $potencia;
    private $prox_cita;
    private $indicaciones;

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
     * Get the value of paciente_id
     */ 
    public function getPaciente_id()
    {
        return $this->paciente_id;
    }

    /**
     * Set the value of paciente_id
     *
     * @return  self
     */ 
    public function setPaciente_id($paciente_id)
    {
        $this->paciente_id = $this->db->real_escape_string($paciente_id);

        return $this;
    }

    /**
     * Get the value of usuario_id
     */ 
    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    /**
     * Set the value of usuario_id
     *
     * @return  self
     */ 
    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $this->db->real_escape_string($usuario_id);

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
        $this->remedio_id = $this->db->real_escape_string($remedio_id);

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $this->db->real_escape_string($fecha);

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $this->db->real_escape_string($tipo);

        return $this;
    }

    /**
     * Get the value of temperatura
     */ 
    public function getTemperatura()
    {
        return $this->temperatura;
    }

    /**
     * Set the value of temperatura
     *
     * @return  self
     */ 
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $this->db->real_escape_string($temperatura);

        return $this;
    }

    /**
     * Get the value of pre_arterial
     */ 
    public function getPre_arterial()
    {
        return $this->pre_arterial;
    }

    /**
     * Set the value of pre_arterial
     *
     * @return  self
     */ 
    public function setPre_arterial($pre_arterial)
    {
        $this->pre_arterial = $this->db->real_escape_string($pre_arterial);

        return $this;
    }

    /**
     * Get the value of frec_respi
     */ 
    public function getFrec_respi()
    {
        return $this->frec_respi;
    }

    /**
     * Set the value of frec_respi
     *
     * @return  self
     */ 
    public function setFrec_respi($frec_respi)
    {
        $this->frec_respi = $this->db->real_escape_string($frec_respi);

        return $this;
    }

    /**
     * Get the value of padecimiento
     */ 
    public function getPadecimiento()
    {
        return $this->padecimiento;
    }

    /**
     * Set the value of padecimiento
     *
     * @return  self
     */ 
    public function setPadecimiento($padecimiento)
    {
        $this->padecimiento = $this->db->real_escape_string($padecimiento);

        return $this;
    }

    /**
     * Get the value of potencia
     */ 
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * Set the value of potencia
     *
     * @return  self
     */ 
    public function setPotencia($potencia)
    {
        $this->potencia = $this->db->real_escape_string($potencia);

        return $this;
    }

    /**
     * Get the value of prox_cita
     */ 
    public function getProx_cita()
    {
        return $this->prox_cita;
    }

    /**
     * Set the value of prox_cita
     *
     * @return  self
     */ 
    public function setProx_cita($prox_cita)
    {
        $this->prox_cita = $this->db->real_escape_string($prox_cita);

        return $this;
    }

    /**
     * Get the value of indicaciones
     */ 
    public function getIndicaciones()
    {
        return $this->indicaciones;
    }

    /**
     * Set the value of indicaciones
     *
     * @return  self
     */ 
    public function setIndicaciones($indicaciones)
    {
        $this->indicaciones = $this->db->real_escape_string($indicaciones);

        return $this;
    }

    public function getAll(){
        $sql = "SELECT * FROM cita WHERE paciente_id = { $this->getPaciente_id }";
        $consultation = $this->db->query($sql);

        return $consultation;
    }

}