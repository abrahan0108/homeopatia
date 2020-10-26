<?php
require_once 'models/Patient.php';

class PatientController{
    public function list(){
        $patient = new Patient();
        $patient = $patient->getAll();
        require_once 'views/tables/table_patient.php';
    }
}