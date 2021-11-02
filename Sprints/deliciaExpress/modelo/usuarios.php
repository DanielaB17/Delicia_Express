<?php
class Usuarios{
private $IdUsuarios;
private $NombreUsuarios;
private $ApellidoUsuarios;
private $EmailUsuarios;
private $ContrasenaUsuarios;
private $IdRoles;

function __construct($IdUsuarios,$NombreUsuarios,$ApellidoUsuarios,$EmailUsuarios,$ContrasenaUsuarios,$IdRoles){
    $this->IdUsuarios=$IdUsuarios;
    $this->NombreUsuarios=$NombreUsuarios;
    $this->ApellidoUsuarios=$ApellidoUsuarios;
    $this->EmailUsuarios=$EmailUsuarios; 
    $this->ContrasenaUsuarios=$ContrasenaUsuarios;
    $this->IdRoles=$IdRoles; 
}

function getIdUsuarios() {
    return $this->IdUsuarios;
}

function setIdUsuarios($IdUsuarios) {
    $this->IdUsuarios = $IdUsuarios;
}

function getNombreUsuarios() {
    return $this->NombreUsuarios;
}

function setNombreUsuarios($NombreUsuarios) {
    $this->NombreUsuarios = $NombreUsuarios;
}

function getApellidoUsuarios() {
    return $this->ApellidoUsuarios;
}

function setApellidoUsuarios($ApellidoUsuarios) {
    $this->ApellidoUsuarios = $ApellidoUsuarios;
}

function  getEmailUsuarios() {
    return $this->EmailUsuarios;
}

function  setEmailUsuarios($EmailUsuarios){
    $this->EmailUsuarios= $EmailUsuarios;
}

function  getContrasenaUsuarios() {
    return $this->ContrasenaUsuarios;
}

function  setContrasenaUsuarios($ContrasenaUsuarios){
    $this->ContrasenaUsuarios= $ContrasenaUsuarios;
}

function  getIdRoles() {
    return $this->IdRoles;
}

function  setIdRoles($IdRoles){
    $this->IdRoles= $IdRoles;
}
}

class Domiciliarios{
    private $IdDomiciliarios;
    private $AseguradoraSoat;
    private $LicenciaConduccion;
    
    function __construct($IdDomiciliarios,$AseguradoraSoat,$LicenciaConduccion){
        $this->IdDomiciliarios=$IdDomiciliarios;
        $this->AseguradoraSoat=$AseguradoraSoat;
        $this->$LicenciaConduccion=$LicenciaConduccion;
    }
    
    function getIdDomiciliarios() {
        return $this->IdDomiciliarios;
    }
    
    function setIdDomiciliarios($IdDomiciliarios) {
        $this->IdDomiciliarios = $IdDomiciliarios;
    }
    
    function getAseguradoraSoat() {
        return $this->AseguradoraSoat;
    }
    
    function setAseguradoraSoat($AseguradoraSoat) {
        $this->AseguradoraSoat = $AseguradoraSoat;
    }
    
    function getLicenciaConduccion() {
        return $this->LicenciaConduccion;
    }
    
    function setLicenciaConduccion($LicenciaConduccion) {
        $this->LicenciaConduccion = $LicenciaConduccion;
    }
    }
?>