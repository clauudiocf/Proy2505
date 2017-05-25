<?php


class LogTransaccion {
    var $accion;
    var $descripcion;
    var $idacceso;
    var $nomtabla;
    
    public function Agregar(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $sql="insert into logtransacciones(accion,descripcion,nomtabla)";
        $sql=$sql." values('$this->accion','$this->descripcion','$this->nomtabla')";
        
        $resultado=$db->query($sql);

        if ($resultado)
            return true;
        else
            return false;
        
        
    }
}
